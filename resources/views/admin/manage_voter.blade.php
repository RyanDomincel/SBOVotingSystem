@extends('layouts.admin_app')

@section('content')
    <!-- Voters Table -->

    {{-- @if (count($voters) > 0)
        @foreach ($voters as $item)
            <div class=" card p-4 m-4"> --}}
    {{-- <a href="/contacts/{{ $item->id }}"> --}}
    {{-- <h2>Name:{{ $item->name }}</h2> --}}
    {{-- </a> --}}
    {{-- <h5>Email{{ $item->email }}</h5>
    <h5>Password{{ $item->password }}</h5>
    <h5>School Year{{ $item->school_year }}</h5>
    <small>{{ $item->created_at }}</small>
    </div> --}}
    {{-- @endforeach
    <div class="m-4">
        {{ $voters->links() }}
        <br>
        <div class="col-lg-6 col-md-6 col text-center p-2">
            <a href="{{ route('manage_voter.create') }}"><button class="btn btn-success ">Create
                    Another
                    Voters Account</button></a>
        </div>
    </div>
    @endif --}}
    <section id="tallySec">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card" style="min-height: 485px">
                    <div class="card-header card-header-text">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col">
                                <h3 class="card-title">Lists of the Voters</h3>
                            </div>
                            <div class="col-lg-6 col-md-6 col">

                                <form class="d-flex" role="search">
                                    <input class="form-control me-2" type="search" aria-label="Search" id="myInput"
                                        onkeyup="myFunction()" placeholder="Search for a voters name"
                                        title="Type in a name">
                                    <button class="btn btn-success" type="submit">Search</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="card-content table-responsive">
                        <table class="table table-hover align-middle" id="myTable">
                            <thead class="text-primary">
                                <tr>
                                    <th>
                                        <h5>Student</h5>
                                    </th>
                                    <th>
                                        <h5>Email</h5>
                                    </th>
                                    <th>
                                        <h5>Password</h5>
                                    </th>
                                    <th>
                                        <h5>A.Y.</h5>
                                    </th>
                                    <th colspan="2" class="text-center">
                                        <h5>Manage</h5>
                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                                @if (count($voters) > 0)
                                    @foreach ($voters as $item)
                                        <tr>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->password }}</td>
                                            <td>{{ $item->school_year }}</td>
                                            <td class="text-center">
                                                <a href="/admin/manage_voter/{{ $item->id }}/edit"><button
                                                        class="btn btn-primary w-100">Edit</button></a>
                                            </td>
                                            <td class="text-center"><button
                                                    class="btn btn-outline-danger w-100">Delete</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col text-center p-2">
                                {{ $voters->links() }}
                            </div>
                            <div class="col-lg-6 col-md-6 col text-center p-2">
                                <a href="{{ route('manage_voter.create') }}"><button class="btn btn-success ">Create
                                        Another
                                        Voters Account</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
