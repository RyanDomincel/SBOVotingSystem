<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Candidates;
use App\Models\User;
// use Collective\Html\Eloquent\FormAccessible;


class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $candidates = Candidates::all();
        // return view('admin.manage_candidate')-> with('candidates', $candidates);
        $candidates = Candidates::with('user')->get();
        // $users = User::with('candidate')->get();
        // dd($candidates);
        return view('admin.manage_candidate')-> with('candidates', $candidates);;
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::with('candidate')->get();
        $options = $users->pluck('name', 'id')->toArray();
        // dd($options);

        return view('admin.create_candidate')->with('options',$options);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        // dd($input);
        Candidates::create($input);
        return redirect('admin/manage_candidate');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $candidates = Candidates::find($id);
        $candidate_deets = DB::table('candidates')->where('id',$id)->get();
        $data =[
            'candidates'=> $candidates,
            'candidate_deets'=>$candidate_deets,
        ];
        return view('admin.show_candidate')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {      

        $candidate = Candidates::find($id);
        $candidates = DB::table('candidates')->where('id',$id)->get();
        $data =[
            'candidates'=> $candidates,
            'candidate'=>$candidate,
        ];
        // dd($data);

        return view('admin.edit_candidate')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $candidates = Candidates::find($id);
        $input = $request->all();
        $candidates->update($input);
        return redirect('admin/manage_candidate/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Candidates::destroy($id);
        return redirect('admin/manage_candidate');
    }
}
