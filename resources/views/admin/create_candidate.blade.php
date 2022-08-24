@extends('layouts.admin_app')

@section('content')
    <div class="container">
        <div class="card p-3 mt-2">
            <form class="row d-flex" action="/action_page.php">
                <div class="col-12 d-flex justify-content-end">

                </div>
                <div class="col-lg-6">
                    <label for="Name" class="form-label"> NAME: </label>
                    <input type="text" id="Name" class="form-control rounded">
                </div>
                <div class="col-lg-6 ">
                    <label for="Position" class="form-label"> POSITION: </label>
                    <input type="text" id="Position" class="form-control rounded">
                </div>
                <div class="col-lg-6 mt-1">
                    <label for="Partylist" class="form-label"> PARTYLISTT: </label>
                    <input type="text" id="Position" class="form-control rounded">
                </div>
                <div class="col-lg-6 mt-1">
                    <label for="Schoolyr" class="form-label"> S.Y: </label>
                    <input type="text" id="Schoolyr" class="form-control rounded">
                </div>
                <div class="col-6 mt-3">
                    <div class="mb-3">
                        <label for="formFile" class="form-label"> PICTURE: </label>
                        <input class="form-control" type="file" id="formFile" style="width: 75%;">
                    </div>

                </div>
                <div class="col-12 d-flex justify-content-end">
                    <button type="button" id="create" class="btn btn-primary me-2"> CREATE </button>
                </div>
            </form>
        </div>
    </div>
@endsection
