@extends('layouts.admin_app')

@section('content')
    {{-- <div class="card m-4 p-4">
        <h1>Add New Contact</h1>
        <form action="{{ url('contacts') }}" method="POST">
            {!! csrf_field() !!}
            <label for="name">Name</label>
            <input type="text" name="contactName" id="contactName" class="form-control">
            <br>
            <label for="contactNum">Contact Number</label>
            <input type="text" name="contactNum" id="contactNum" class="form-control">
            <br>
            <label for="Address">Contact Address</label>
            <input type="text" name="Address" id="Address" class="form-control">
            <br>
            <input type="submit" value="Add Contact" class="btn btn-primary">
        </form>
    </div> --}}
    <div class="container">
        <div class="card p-5 mt-3">
            <form action="{{ url('admin/manage_voter') }}" method="POST" class="row">
                {!! csrf_field() !!}

                <div class="col-lg-4 d-inline-flex g-2">
                    <label for="name" class="form-label mt-2 me-2">NAME: </label>
                    <input type="text" id="name" class="form-control " name="name">
                </div>
                <div class="col-lg-4 d-inline-flex g-2">
                    <label for="school_year" class="form-label mt-2 me-2">S.Y: </label>
                    <input type="text" id="school_year" class="form-control w-100" name="school_year">
                </div>
                <div class="col-lg-4 d-inline-flex g-2">
                    <label for="email" class="form-label mt-2 me-2">EMAIL: </label>
                    <input type="text" id="email" class="form-control " name="email">
                </div>


                <div class="col-lg-12 d-inline-flex g-2">
                    <label for="password" class="form-label mt-2 me-2 ">PASSWORD: </label>
                    <input type="text" id="password" class="form-control me-2 w-50" name="password">

                    <button type="button" id="generate" class="btn btn-primary me-2 w-25" onclick="randomString();">
                        GENERATE
                    </button>

                    <button type="button" id="clear" class="btn btn-outline-primary  w-25" onclick="ClearFields()">
                        CLEAR
                    </button>
                </div>


                <div class="d-flex justify-content-end mt-3 ">

                    <button type="submit" id="create" class="btn btn-success me-2"
                        onclick="return confirm('Please confirm to proceed')"> CREATE </button>

                    <button type="button" id="print" class="btn btn-outline-success"> PRINT </button>

                </div>

            </form>
        </div>
    </div>
@endsection
