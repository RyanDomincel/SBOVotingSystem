@extends('layouts.voter_app')

@section('content')
    <div class="container">
        <div class="row mt-4">
            <div class="col-lg-4 col-md-4 text-start my-auto">
                <h2>Results per Position</h2>

            </div>
            <div class="col-lg-6 col-md-6 text-center my-auto">

                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" aria-label="Search" id="myInput" onkeyup="myFunction()"
                        placeholder="Search for a Position" title="Type in a name">
                    <button class="btn btn-success" type="submit">Search</button>
                </form>
            </div>
            <div class="col-lg-2 col-md-2 text-end my-auto">
                <a href="{{ route('user.index') }}"><button class="btn btn-primary">Back to Homepage</button></a>
            </div>
        </div>
        <div id="selection_of_charts">
            <div class="row charts_selection">

                <div class="card  mx-auto mt-5" style="width: 60rem">
                    <div class="card-header">
                        <h3>President</h3>
                    </div>
                    <div class="card-body text-center">
                        <canvas id="PresidentChart"></canvas>
                    </div>
                    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                </div>
            </div>
            <div class="row charts_selection">
                <div class="card  mx-auto mt-5" style="width: 60rem">
                    <div class="card-header">
                        <h3>Vice President</h3>

                    </div>
                    <div class="card-body text-center">
                        <canvas id="VicePresidentChart"></canvas>
                    </div>
                    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                </div>
            </div>
            <div class="row charts_selection">
                <div class="card  mx-auto mt-5" style="width: 60rem">
                    <div class="card-header">
                        <h3>Secretary</h3>

                    </div>
                    <div class="card-body text-center">
                        <canvas id="Secretary"></canvas>
                    </div>
                    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                </div>
            </div>
            <div class="row charts_selection">
                <div class="card  mx-auto mt-5" style="width: 60rem">
                    <div class="card-header">
                        <h3>Pio</h3>

                    </div>
                    <div class="card-body text-center">
                        <canvas id="Pio"></canvas>
                    </div>
                    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                </div>
            </div>
            <div class="row charts_selection">
                <div class="card  mx-auto mt-5" style="width: 60rem">
                    <div class="card-header">
                        <h3>Treasurer</h3>

                    </div>
                    <div class="card-body text-center">
                        <canvas id="Tresurer"></canvas>
                    </div>
                    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                </div>
            </div>
            <div class="row charts_selection">
                <div class="card  mx-auto mt-5" style="width: 60rem">
                    <div class="card-header">
                        <h3>Auditor</h3>

                    </div>
                    <div class="card-body text-center">
                        <canvas id="Auditor"></canvas>
                    </div>
                    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                </div>
            </div>
            <div class="row charts_selection">
                <div class="card  mx-auto mt-5" style="width: 60rem">
                    <div class="card-header">
                        <h3>Senators</h3>

                    </div>
                    <div class="card-body text-center">
                        <canvas id="Senator"></canvas>
                    </div>
                    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                </div>
            </div>
        </div>
        <br />
        <hr>
        <br>
        <div class="row mb-5 mt-5">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="card card-stats shadow">
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
                <div class="card card-stats shadow">
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
                <div class="card card-stats shadow">
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
        <hr />
        <div class="row mt-5">
            <div class="col-lg-12 col-md-12">
                <div class="card" style="min-height: 485px">
                    <div class="card-header card-header-text">
                        <h4 class="card-title">Partial Tally of the Votes</h4>
                        <p class="category">Votes counted as of (Inserting date and time here)</p>
                    </div>
                    <div class="card-content table-responsive">
                        <table class="table table-hover">
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
                                            <div class="progress-bar progress-bar-striped progress-bar-animated"
                                                role="progressbar" aria-label="Animated striped example"
                                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"
                                                style="width: 75%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Bob Williams</td>
                                    <td>President</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated"
                                                role="progressbar" aria-label="Animated striped example"
                                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"
                                                style="width: 75%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Bob Williams</td>
                                    <td>President</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated"
                                                role="progressbar" aria-label="Animated striped example"
                                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"
                                                style="width: 75%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Bob Williams</td>
                                    <td>President</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated"
                                                role="progressbar" aria-label="Animated striped example"
                                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"
                                                style="width: 75%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Bob Williams</td>
                                    <td>President</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated"
                                                role="progressbar" aria-label="Animated striped example"
                                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"
                                                style="width: 75%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Bob Williams</td>
                                    <td>President</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated"
                                                role="progressbar" aria-label="Animated striped example"
                                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"
                                                style="width: 75%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Bob Williams</td>
                                    <td>President</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated"
                                                role="progressbar" aria-label="Animated striped example"
                                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"
                                                style="width: 75%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Bob Williams</td>
                                    <td>President</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated"
                                                role="progressbar" aria-label="Animated striped example"
                                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"
                                                style="width: 75%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Bob Williams</td>
                                    <td>President</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated"
                                                role="progressbar" aria-label="Animated striped example"
                                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"
                                                style="width: 75%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Bob Williams</td>
                                    <td>President</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated"
                                                role="progressbar" aria-label="Animated striped example"
                                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"
                                                style="width: 75%"></div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 text-lg-start text-md-start text-center">

                    <ul class="m-0 p-0 ">
                        <li>
                            <a href="{{ route('user.index') }}"> Home </a>
                        </li>
                        <li><span>|</span></li>
                        <li>
                            <a href="{{ route('user.view_vote') }}"> View My Vote </a>
                        </li>
                        <li><span>|</span></li>
                        <li>
                            <a href="{{ route('user.view_ranking') }}"> Manage Candidates </a>
                        </li>
                    </ul>

                </div>
                <div class="col-lg-6 col-md-6 text-lg-end text-md-end text-center ">

                    <img src="{{ asset('images/WRI_Logo.png') }}" class="img-fluid d-inline" id="WRI"
                        width="50" />

                    <p class="copyright text-center d-lg-inline d-md-inline d-sm-block">
                        SBO-Voting System 2022 &copy Created by <a href="#" class="fw-bold">WRI Designs</a>
                    </p>

                </div>
            </div>
        </div>
    </footer>
    <script>
        const pres = document.getElementById("PresidentChart").getContext("2d");
        const PresidentChart = new Chart(pres, {
            type: "bar",
            data: {
                labels: ["President 1", "President 2", "President 3"],
                datasets: [{
                    label: "# of Votes",
                    data: [500, 700, 350, 1000],
                    backgroundColor: ["#198dc6", "#198dc6", "#198dc6"],
                    // borderColor: ["#0D3376", "#0D3376", "#0D3376"],
                    // borderWidth: 0,
                }, ],
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                    },
                },
            },
        });
    </script>
    <script>
        const vpress = document.getElementById("VicePresidentChart").getContext("2d");
        const VicePresidentChart = new Chart(vpress, {
            type: "bar",
            data: {
                labels: ["Vice President 1", "Vice President 2", "Vice President 3"],
                datasets: [{
                    label: "# of Votes",
                    data: [780, 400, 650, 1000],
                    backgroundColor: ["#198dc6", "#198dc6", "#198dc6"],
                    // borderColor: ["#0D3376", "#0D3376", "#0D3376"],
                    // borderWidth: 0,
                }, ],
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                    },
                },
            },
        });
    </script>
    <script>
        const sec = document.getElementById("Secretary").getContext("2d");
        const Secretary = new Chart(sec, {
            type: "bar",
            data: {
                labels: ["Secretary 1", "Secretary 2", "Secretary 3"],
                datasets: [{
                    label: "# of Votes",
                    data: [780, 400, 650, 1000],
                    backgroundColor: ["#198dc6", "#198dc6", "#198dc6"],
                    // borderColor: ["#0D3376", "#0D3376", "#0D3376"],
                    // borderWidth: 0,
                }, ],
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                    },
                },
            },
        });
    </script>
    <script>
        const pio = document.getElementById("Pio").getContext("2d");
        const Pio = new Chart(pio, {
            type: "bar",
            data: {
                labels: ["Pio 1", "Pio 2", "Pio 3"],
                datasets: [{
                    label: "# of Votes",
                    data: [780, 400, 650, 1000],
                    backgroundColor: ["#198dc6", "#198dc6", "#198dc6"],
                    // borderColor: ["#0D3376", "#0D3376", "#0D3376"],
                    // borderWidth: 0,
                }, ],
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                    },
                },
            },
        });
    </script>
    <script>
        const tres = document.getElementById("Tresurer").getContext("2d");
        const Tresurer = new Chart(tres, {
            type: "bar",
            data: {
                labels: ["Tresurer 1", "Tresurer 2", "Tresurer 3"],
                datasets: [{
                    label: "# of Votes",
                    data: [780, 400, 650, 1000],
                    backgroundColor: ["#198dc6", "#198dc6", "#198dc6"],
                    // borderColor: ["#0D3376", "#0D3376", "#0D3376"],
                    // borderWidth: 0,
                }, ],
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                    },
                },
            },
        });
    </script>
    <script>
        const aud = document.getElementById("Auditor").getContext("2d");
        const Auditor = new Chart(aud, {
            type: "bar",
            data: {
                labels: ["Auditor 1", "Auditor 2", "Auditor 3"],
                datasets: [{
                    label: "# of Votes",
                    data: [780, 400, 650, 1000],
                    backgroundColor: ["#198dc6", "#198dc6", "#198dc6"],
                    // borderColor: ["#0D3376", "#0D3376", "#0D3376"],
                    // borderWidth: 0,
                }, ],
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                    },
                },
            },
        });
    </script>
    <script>
        const sen = document.getElementById("Senator").getContext("2d");
        const Senator = new Chart(sen, {
            type: "bar",
            data: {
                labels: [
                    "Senator 1",
                    "Senator 2",
                    "Senator 3",
                    "Senator 4",
                    "Senator 5",
                    "Senator 6",
                    "Senator 7",
                    "Senator 8",
                    "Senator 9",
                ],
                datasets: [{
                    label: "# of Votes",
                    data: [780, 400, 650, 800, 655, 234, 831, 230, 402, 1000],
                    backgroundColor: [
                        "#198dc6",
                        "#198dc6",
                        "#198dc6",
                        "#198dc6",
                        "#198dc6",
                        "#198dc6",
                        "#198dc6",
                        "#198dc6",
                        "#198dc6",
                    ],
                    // borderColor: ["#0D3376", "#0D3376", "#0D3376"],
                    // borderWidth: 0,
                }, ],
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                    },
                },
            },
        });
    </script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <script>
        // for searchbar
        function myFunction() {
            var input, filter, table, tr, td, i, txtValue, position;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("selection_of_charts");
            tr = table.getElementsByClassName("charts_selection");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("h3");
                position = td.item('h3')
                // console.log(position.innerHTML)
                if (position) {
                    txtValue = position.innerHTML;

                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                        // console.log('OK')
                        // console.log(tr[i])
                    } else {
                        tr[i].style.display = "none";
                        // console.log('NOT OK')
                    }
                }
            }


        }
    </script>
@endsection
