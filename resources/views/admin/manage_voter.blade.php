@extends('layouts.admin_app')

@section('content')
    <!-- Voters Table -->
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
                                <tr>
                                    <td>Voter 1</td>
                                    <td>****************</td>
                                    <td>2001</td>
                                    <td class="text-center"><button class="btn btn-primary w-100">Edit</button></td>
                                    <td class="text-center"><button class="btn btn-outline-danger w-100">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Voter 2</td>
                                    <td>****************</td>
                                    <td>2002</td>

                                    <td class="text-center"><button class="btn btn-primary w-100">Edit</button></td>
                                    <td class="text-center"><button class="btn btn-outline-danger w-100">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Voter 3</td>
                                    <td>****************</td>
                                    <td>2002</td>

                                    <td class="text-center"><button class="btn btn-primary w-100">Edit</button></td>
                                    <td class="text-center"><button class="btn btn-outline-danger w-100">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Voter 4</td>
                                    <td>****************</td>
                                    <td>2003</td>

                                    <td class="text-center"><button class="btn btn-primary w-100">Edit</button></td>
                                    <td class="text-center"><button class="btn btn-outline-danger w-100">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Voter 5</td>
                                    <td>****************</td>
                                    <td>2003</td>

                                    <td class="text-center"><button class="btn btn-primary w-100">Edit</button></td>
                                    <td class="text-center"><button class="btn btn-outline-danger w-100">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Voter 1</td>
                                    <td>****************</td>
                                    <td>2001</td>
                                    <td class="text-center"><a href="{{ route('manage_voter.edit_voter') }}"><button
                                                class="btn btn-primary w-100">Edit</button></a></td>
                                    <td class="text-center"><button class="btn btn-outline-danger w-100">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Voter 2</td>
                                    <td>****************</td>
                                    <td>2002</td>

                                    <td class="text-center"><button class="btn btn-primary w-100">Edit</button></td>
                                    <td class="text-center"><button class="btn btn-outline-danger w-100">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Voter 3</td>
                                    <td>****************</td>
                                    <td>2002</td>

                                    <td class="text-center"><button class="btn btn-primary w-100">Edit</button></td>
                                    <td class="text-center"><button class="btn btn-outline-danger w-100">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Voter 4</td>
                                    <td>****************</td>
                                    <td>2003</td>

                                    <td class="text-center"><button class="btn btn-primary w-100">Edit</button></td>
                                    <td class="text-center"><button class="btn btn-outline-danger w-100">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Voter 5</td>
                                    <td>****************</td>
                                    <td>2003</td>

                                    <td class="text-center"><button class="btn btn-primary w-100">Edit</button></td>
                                    <td class="text-center"><button class="btn btn-outline-danger w-100">Delete</button>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col text-center p-2">
                                <nav aria-label="...">
                                    <ul class="pagination">
                                        <li class="page-item disabled">
                                            <a class="page-link">Previous</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item active" aria-current="page">
                                            <a class="page-link" href="#">2</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                </nav>
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
