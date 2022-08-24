@extends('layouts.admin_app')

@section('content')
    <form action="/admin/manage_voter/{{ $voters->id }}" method="POST">
        {!! csrf_field() !!}
        @method('PATCH')
        <input type="hidden" name="id" value="{{ $voters->id }}">
        <label for="name">Student Name</label>
        <input type="text" value="{{ $voters->name }}" name="contactName" id="contactName" class="form-control" />
        <br>
        <label for="name">Email Address</label>
        <input type="text" value="{{ $voters->email }}" name="contactNum" id="contactNum" class="form-control" />
        <br>

        <label for="name">Password</label>
        <input type="text" value="{{ $voters->password }}" name="Address" id="Address" class="form-control" />
        <label for="name">School Year</label>
        <input type="text" value="{{ $voters->school_year }}" name="Address" id="Address" class="form-control" />
        <br>
        <input type="submit" value="Update" class="btn btn-primary">
    </form>

    <a href="{{ route('manage_voter.index') }}"><button class="btn btn-warning">Cancel</button></a>


    {{-- <div class="container" style="width: 700px;">
        <div class="card p-5 mt-5">
            <form class="row ">
                <div class="col-lg-8 d-inline-flex g-2">
                    <label for="Name" class="form-label mt-2" style="margin-left: 40px;">NAME: </label>
                    <input type="text" id="Name" class="form-control ">
                </div>
                <div class="col-lg-4 d-inline-flex g-2">
                    <label for="Schoolyr" class="form-label mt-2">S.Y: </label>
                    <input type="text" id="Schoolyr" class="form-control w-100">
                </div>

                <div class="col-lg-8 d-inline-flex mt-3 g-2">
                    <label for="Name" class="form-label mt-2 ms1">PASSWORD: </label>
                    <input type="text" id="Name" class="form-control ">
                </div>
                <div class="col-lg-4 d-inline-flex mt-3">
                    <button type="button" id="create" class="btn btn-primary mx-auto w-100"> GENERATE </button>
                </div>

                <div class="col-lg-6 d-flex justify-content-start mt-5">
                    <button type="button" id="print" class="btn btn-primary"> PRINT </button>
                </div>
                <div class="col-lg-6  d-flex justify-content-end  mt-5">
                    <button type="button" id="create" class="btn btn-primary me-2"> CREATE </button>
                </div>

            </form>
        </div>
    </div> --}}
@endsection
