@extends('layouts.admin_app')

@section('content')
    <div class="container">
        <div class="card p-5 mt-3">
            <form class="" action="/admin/manage_voter/{{ $voters->id }}" method="POST">
                {!! csrf_field() !!}
                @method('PATCH')
                <input type="hidden" name="id" value="{{ $voters->id }}">
                <div class="">
                    <label for="name" class="form-label mt-2 fw-bold">Student Name: </label>
                    <input type="text" id="name" class="form-control " value="{{ $voters->name }}">
                </div>
                <div class="">
                    <label for="email" class="form-label mt-2 fw-bold">Email Address: </label>
                    <input type="text" id="email" class="form-control w-100"value="{{ $voters->email }}">
                </div>
                <div class="row">
                    <label for="password" class="form-label mt-2 fw-bold">Password: </label><br>
                    <div class="d-inline-flex justify-content-between">
                        <div class="col-lg-6 col-md-8 col-sm-7">
                            <input type="text" id="password"
                                class="form-control w-100 me-2"value="{{ $voters->password }}" name="password"
                                onclick="this.select();">
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4">
                            <button type="button" id="generate" class="btn btn-primary w-100 mx-auto"
                                onclick="randomString();"> GENERATE
                            </button>
                        </div>
                        <div class="col-lg-2 d-lg-inline d-none">
                            <button type="button" id="clear" class="btn btn-outline-primary w-100 mx-auto"
                                onclick="ClearFields()"> CLEAR
                            </button>
                        </div>
                    </div>
                </div>
                <div class="">
                    <label for="name"class="fw-bold">School Year</label>
                    <input type="text" value="{{ $voters->school_year }}" name="Address" id="Address"
                        class="form-control" />
                </div>


                <div class="row mt-3">
                    <div class="col-lg-8 col-md-10 col-sm-12 text-end">

                        <button type="submit" id="create" class="btn btn-primary"> UPDATE </button>
                        <button type="button" id="print" class="btn btn-outline-success"> PRINT </button>
            </form>

            <a href="{{ route('manage_voter.index') }}" class=""><button type="button"
                    class="btn btn-outline-success ">GO
                    BACK</button></a>
        </div>
    </div>
    </div>

    </div>
    </div>
@endsection
