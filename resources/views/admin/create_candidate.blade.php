@extends('layouts.admin_app')

@section('content')
    <div class="container">
        <div class="card p-3 mt-2">
            <form action="{{ url('admin/manage_candidate') }}" method="POST" class="row">
                {!! csrf_field() !!}
                <div class="col-12 d-flex justify-content-end">

                </div>
                <div class="col-lg-6">
                    <label for="student_id" class="form-label"> NAME: </label>

                    {{-- <select name="student_id" id="student_id" class="form-control">
                        <option value="">--- Select Student ---</option>
                        @foreach ($options as $option)
                            <option value="{{ $option->id }}">{{ $option->name }}"</option>">
                        @endforeach --}}
                    {!! Form::select('student_id', $options, null, ['class' => 'form-control']) !!}
                </div>
                <div class="col-lg-6 ">
                    <label for="position_id" class="form-label"> POSITION: </label>
                    <input type="number" id="position_id" class="form-control rounded">
                </div>
                <div class="col-lg-6 mt-1">
                    <label for="partylist_id" class="form-label"> PARTYLISTT: </label>
                    <input type="number" id="partylist_id" class="form-control rounded">
                </div>
                <div class="col-lg-6 mt-1">
                    <label for="school_year" class="form-label"> S.Y: </label>
                    <input type="text" id="school_year" class="form-control rounded">
                </div>
                <div class="col-6 mt-3">
                    {{-- <div class="mb-3">
                        <label for="img_uploaded" class="form-label"> PICTURE: </label>
                        <input class="form-control" type="file" id="img_uploaded" style="width: 75%;">
                    </div> --}}

                </div>
                <div class="col-12 d-flex justify-content-end">
                    <button type="submit" id="create" class="btn btn-primary me-2"> CREATE </button>
                </div>
            </form>
        </div>
    </div>
@endsection
