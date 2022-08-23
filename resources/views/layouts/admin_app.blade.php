<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />

    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&family=Montserrat:wght@300;400;600&display=swap"
        rel="stylesheet">

    <!-- chart -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>

    <!--google material icon-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/main.min.css') }}" />
    <!----css3---->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}" />

    {{-- <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
</head>

<body>

    <div class="wrapper">
        <div class="body-overlay"></div>
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <img src="{{ asset('images/ICI_Logo.png') }}" class="img-fluid" id="ICI" />
            </div>
            <ul class="list-unstyled components d-flex flex-column h-75" id="ul_sidenav">

                <!-- 1st menu HOME-->
                <li class="{{ Route::is('admin.index') ? 'active' : '' }}">
                    <a href="{{ route('admin.index') }}" class="dashboard">
                        <i class="material-icons"> home </i><span>View Election Status</span>
                    </a>
                </li>

                <!-- 2nd menu -->
                <li class="{{ Route::is('manage_voter.index') ? 'active' : '' }}">
                    <a href="{{ route('manage_voter.index') }}">
                        <i class="material-icons">group_add</i><span>Manage Voter Details</span>
                    </a>
                </li>

                <!-- 3rd menu -->
                <li class="{{ Route::is('manage_candidate.index') ? 'active' : '' }}">
                    <a href="{{ route('manage_candidate.index') }}">
                        <i class="material-icons">engineering</i><span>Manage Candidate Details</span>
                    </a>
                </li>


                <!-- 4th menu Logout -->
                <li class="mt-auto p-2">
                    <a href="/">
                        <i class="material-icons">logout</i><span>Logout</span>
                    </a>
                </li>
                <hr>
            </ul>

            <div class="col p-2 text-center footer-sidenavbar">
                <img src="{{ asset('images/WRI_Logo.png') }}" class="img-fluid" id="WRI" width="50" />

                <p class="copyright text-center">
                    SBO-Voting System 2022 &copy <br>Created by <a href="#" class="fw-bold">WRI Designs</a>
                </p>
            </div>
        </nav>

        <!-- Page Content  -->
        <div id="content">
            <div class="top-navbar">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">
                        <button type="button" id="sidebarCollapse" class="d-xl-block d-lg-block d-md-mone d-none">
                            <span class="material-icons">arrow_back_ios</span>
                        </button>
                        <a class="navbar-brand" href="#"> Dashboard </a>

                        <button class="d-inline-block d-lg-none ml-auto more-button" type="button"
                            data-toggle="collapse" data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="material-icons"id="three_dots">more_vert</span>
                        </button>


                    </div>
                </nav>
            </div>
            <div class="main-content">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('js/jquery-3.3.1.slim.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script>
        $(document).ready(function() {
            $("#sidebarCollapse").on("click", function() {
                $("#sidebar").toggleClass("active");
                $("#content").toggleClass("active");
                $("#ul_sidenav").toggleClass("h-75");
                var src = $("#ICI").attr("src");
                var newsrc =
                    $("#sidebar").hasClass("active") ?
                    "{{ asset('images/ICI_Brain_Logo.png') }}" :
                    "{{ asset('images/ICI_Logo.png') }}";
                $("#ICI").attr("src", newsrc);

                $(".copyright, .footer-sidenavbar, #WRI").toggleClass("d-none");
            });

            $(".more-button,.body-overlay").on("click", function() {
                $("#sidebar,.body-overlay").toggleClass("show-nav");
                $("#sidebar").removeClass("active");
                $("#content").removeClass("active");
                $("#ICI").attr("src", "{{ asset('images/ICI_Logo.png') }}");

            });
        });

        const candidates = document.getElementById("OverallChart").getContext("2d");
        const OverallChart = new Chart(candidates, {
            type: "bar",
            data: {
                labels: [
                    "President 1",
                    "President 2",
                    "President 3",
                    "Vice President 1",
                    "Vice President 2",
                    "Vice President 3",
                    "Secretary 1",
                    "Secretary 2",
                    "Secretary 3",
                    "Pio 1",
                    "Pio 2",
                    "Pio 3",
                    "Tresurer 1",
                    "Tresurer 2",
                    "Tresurer 3",
                    "Auditor 1",
                    "Auditor 2",
                    "Auditor 3",
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
                    data: [
                        500, 700, 350, 780, 400, 650, 780, 400, 1000, 780, 650,
                        1000, 780, 650, 1000, 780, 400, 650, 780, 400, 650, 800,
                        655, 234, 831, 230, 402, 1000,
                    ],
                    backgroundColor: "#198dc6",
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

        // for searchbar
        function myFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>
</body>

</html>
