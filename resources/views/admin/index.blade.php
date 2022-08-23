@extends('layouts.admin_app')

@section('content')
    <!-- Upper data VOTED,NOT VOTED, TOTAL STUDENTS -->
    <section id="threeDatasSec">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header">
                        <div class="icon icon-warning">
                            <span class="material-icons">thumb_up</span>
                        </div>
                    </div>
                    <div class="card-content">
                        <p class="category"><strong>Already Voted</strong></p>
                        <h3 class="card-title">999</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons text-info">info</i>
                            <a href="#">See detailed report</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header">
                        <div class="icon icon-rose">
                            <span class="material-icons">thumb_down_alt</span>
                        </div>
                    </div>
                    <div class="card-content">
                        <p class="category"><strong>Not Yet Voted</strong></p>
                        <h3 class="card-title">999</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons text-info">info</i>
                            <a href="#">See detailed report</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card card-stats">
                    <div class="card-header">
                        <div class="icon icon-success">
                            <span class="material-icons"> groups </span>
                        </div>
                    </div>
                    <div class="card-content">
                        <p class="category"><strong>Total # of Students</strong></p>
                        <h3 class="card-title">999</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons text-info">info</i>
                            <a href="#">See detailed report</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ROW for PARTIAL TALLY OF DATA -->
    <section id="tallySec">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card" style="min-height: 485px">
                    <div class="card-header card-header-text">
                        <h4 class="card-title">Partial Tally of the Votes</h4>
                        <p class="category">
                            Votes counted as of (Inserting date and time here)
                        </p>
                    </div>
                    <div class="card-content table-responsive">
                        <table class="table table-hover align-middle">
                            <thead class="text-primary">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Votes Garnered</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Bob Williams</td>
                                    <td>President</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar progress-bg " role="progressbar"
                                                aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0"
                                                aria-valuemax="100" style="width: 75%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Bob Williams</td>
                                    <td>President</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar progress-bg " role="progressbar"
                                                aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0"
                                                aria-valuemax="100" style="width: 75%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Bob Williams</td>
                                    <td>President</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar progress-bg " role="progressbar"
                                                aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0"
                                                aria-valuemax="100" style="width: 75%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Bob Williams</td>
                                    <td>President</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar progress-bg " role="progressbar"
                                                aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0"
                                                aria-valuemax="100" style="width: 75%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Bob Williams</td>
                                    <td>President</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar progress-bg " role="progressbar"
                                                aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0"
                                                aria-valuemax="100" style="width: 75%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Bob Williams</td>
                                    <td>President</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar progress-bg " role="progressbar"
                                                aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0"
                                                aria-valuemax="100" style="width: 75%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Bob Williams</td>
                                    <td>President</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar progress-bg " role="progressbar"
                                                aria-label="Animated striped example" aria-valuenow="75"
                                                aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Bob Williams</td>
                                    <td>President</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar progress-bg " role="progressbar"
                                                aria-label="Animated striped example" aria-valuenow="75"
                                                aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Bob Williams</td>
                                    <td>President</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar progress-bg " role="progressbar"
                                                aria-label="Animated striped example" aria-valuenow="75"
                                                aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Bob Williams</td>
                                    <td>President</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar progress-bg " role="progressbar"
                                                aria-label="Animated striped example" aria-valuenow="75"
                                                aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="row float-end p-3">
                            <button class="btn btn-primary">Print</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- graph section -->
    <section id="graphSec">
        <div class="card bg-light mx-auto mt-5">
            <div class="card-header p-2">
                <h4>Overall Chart for Candidates</h4>
            </div>
            <div class="card-body text-center">
                <canvas id="OverallChart"></canvas>
            </div>
            <div class="card-footer p-3">
                <div class="small text-muted">
                    Updated yesterday at 11:59 PM
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 d-lg-block d-none">

                    <ul class="m-0 p-0 ">
                        <li>
                            <a href="#"> Home </a>
                        </li>
                        <li><span>|</span></li>
                        <li>
                            <a href="#"> Manage Voters </a>
                        </li>
                        <li><span>|</span></li>
                        <li>
                            <a href="#"> Manage Candidates </a>
                        </li>
                    </ul>

                </div>

            </div>
        </div>
    </footer>
@endsection
