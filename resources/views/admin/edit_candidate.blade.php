@extends('layouts.admin_app')

@section('content')
    <div class="container">
        <div class="card p-5 mt-3">

            <form class="" action="/admin/manage_candidate/{{ $candidate->id }}" method="POST">
                {!! csrf_field() !!}
                @method('PATCH')
                <input type="hidden" name="id" value="{{ $candidate->id }}">
                <div class="">
                    <label for="name" class="form-label mt-2 fw-bold">Student Name: </label>
                    @foreach ($candidate->user as $candidates)
                        <input type="text" id="name" class="form-control " value="{{ $candidates->name }}">
                    @endforeach
                </div>


                <div class="">
                    <label for="position_id" class="form-label mt-2 fw-bold">Position </label>
                    <input type="text" id="position_id" class="form-control w-100"value="{{ $candidate->position_id }}">
                </div>
                <div class="row">
                    <label for="school_year" class="form-label mt-2 fw-bold">A.Y.: </label><br>
                    <div class="d-inline-flex justify-content-between">
                        <div class="col-lg-6 col-md-8 col-sm-7">
                            <input type="text" id="school_year"
                                class="form-control w-100 me-2"value="{{ $candidate->school_year }}" name="school_year">
                        </div>
                        <div class="col-lg-6 col-md-8 col-sm-7">
                            <input type="text" id="partylist_id"
                                class="form-control w-100 me-2"value="{{ $candidate->partylist_id }}" name="partylist_id">
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-lg-8 col-md-10 col-sm-12 text-end">

                        <button type="submit" id="create" class="btn btn-primary"> UPDATE </button>
                        <button type="button" id="print" class="btn btn-outline-success"> PRINT </button>
            </form>

            <a href="{{ route('manage_candidate.index') }}" class=""><button type="button"
                    class="btn btn-outline-success ">GO
                    BACK</button></a>
        </div>
    </div>
    </div>

    </div>
    </div>
@endsection
