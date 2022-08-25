@extends('layouts.admin_app')

@section('content')
    <!-- Candidates Table -->
    <section id="tallySec">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card" style="min-height: 485px">
                    <div class="card-header card-header-text">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col">
                                <h3 class="card-title">Lists of the Candidates</h3>
                            </div>
                            <div class="col-lg-6 col-md-6 col">

                                <form class="d-flex" role="search">
                                    <input class="form-control me-2" type="search" aria-label="Search" id="myInput"
                                        onkeyup="myFunction()" placeholder="Search for a candidates name"
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
                                        <h5>Candidates</h5>
                                    </th>
                                    <th>
                                        <h5>Position</h5>
                                    </th>
                                    <th>
                                        <h5>A.Y.</h5>
                                    </th>
                                    <th>
                                        <h5>Partylist</h5>
                                    </th>
                                    <th colspan="2" class="text-center">
                                        <h5>Manage</h5>
                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                                @if (count($candidates) > 0)
                                    @foreach ($candidates as $candidate)
                                        <tr>
                                            {{-- <td>{{ $candidate->id }}</td> --}}

                                            @foreach ($candidate->user as $item)
                                                <td> {{ $item->name }}</td>
                                            @endforeach
                                            <td>{{ $candidate->position_id }}</td>
                                            <td>{{ $candidate->school_year }}</td>
                                            <td>{{ $candidate->partylist_id }}</td>
                                            <td class="text-center">
                                                <a href="/admin/manage_candidate/{{ $candidate->id }}/edit"><button
                                                        class="btn btn-primary w-100">Edit</button></a>
                                            </td>
                                            <td class="text-center">
                                                <form action="/admin/manage_candidate/{{ $candidate->id }}" method="POST">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type='submit' class="btn btn-outline-danger w-100"
                                                        title="Delete Voter" onclick="return confirm('Are you sure?')">
                                                        Delete Candidate</button>

                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif

                            </tbody>
                        </table>
                        <div class="row">

                            <div class="col-lg-6 col-md-6 col text-center p-2">
                                <a href="{{ route('manage_candidate.create') }}"><button class="btn btn-success ">Submit New
                                        Candidate</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
