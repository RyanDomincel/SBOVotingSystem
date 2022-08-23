@extends('layouts.voter_app')

@section('content')
    <!--- Header --->
    <div class="header img-fluid" style="background-image:url({{ asset('images/bg_landing.png') }});">
        <div class="color-overlay ">
            <div class=" mt-2 text-end ">
                <button type="button" class="btn btn-primary mx-auto justify-content-end"> Logout </button>
            </div>
            <div class="d-flex align-items-center h-75 w-75 mx-auto">

                <div class="justify-content-start ">
                    <h4 class="fw-light"> Welcome to </h4>
                    <h1 class="text1 fw-semibold"> ICI - SBO <br> Voting System </h1>
                    <div class=" ">
                        <a href="{{ route('user.vote_now') }}"> <button type="button"
                                class="btn btn-success me-2  d-lg-inline d-md-inline d-block mb-3">
                                Vote Now! </button></a>
                        <a href="{{ route('user.view_vote') }}"> <button type="button"
                                class="btn btn-outline-success me-2  d-lg-inline d-md-inline d-block mb-3"> View my vote
                            </button></a>
                        <a href="{{ route('user.view_ranking') }}"> <button type="button"
                                class="btn btn-outline-success  d-lg-inline d-md-inline d-block mb-3"> View Election Status
                            </button></a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--- End of Header --->

    <!--- Start of the List of Candidates --->
    <div class="container container2">
        <div class="container-fluid">
            <div class=" mt-5 ">
                <h1 class=" fw-semibold text-center " style="color: #0D3376;  ">
                    List of Candidates </h1>
            </div>
            <!--- President --->
            <div class="card m-3 p-4 shadow">
                <div class="container">
                    <h3 style="color: #0D3376;"> Candidates for President </h3>
                    <hr class="w-100">
                    <div class="row text-center mt-5">
                        <!-- box 1 -->
                        <div class="col-lg-4 col-6">
                            <img class="rounded-circle shadow-1-strong mb-4"
                                src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(3).webp" alt=""
                                style="width: 120px; height: 120px;">
                            <h5 class="mb-3">John Doe</h5>
                        </div>
                        <!-- End of box 1-->

                        <!-- box 2 -->
                        <div class="col-lg-4 col-6">
                            <img class="rounded-circle shadow-1-strong mb-4"
                                src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(3).webp" alt=""
                                style="width: 120px; height: 120px;">
                            <h5 class="mb-3">John Doe</h5>
                        </div>
                        <!-- End of box 2-->

                        <!-- box 3 -->
                        <div class="col-lg-4 col-6">
                            <img class="rounded-circle shadow-1-strong mb-4"
                                src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(3).webp" alt=""
                                style="width: 120px; height: 120px;">
                            <h5 class="mb-3">John Doe</h5>
                        </div>
                        <!-- End of box 3 -->
                    </div>
                </div>
            </div>
            <!--- End of President --->
            <!--- Vice President --->
            <div class="card m-3 p-4 shadow">
                <div class="container">
                    <h3 style="color: #0D3376; "> Candidates for Vice President </h3>
                    <hr class="w-100">
                    <div class="row text-center mt-5">
                        <!-- box 1 -->
                        <div class="col-lg-4 col-6">
                            <img class="rounded-circle shadow-1-strong mb-4"
                                src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(3).webp" alt=""
                                style="width: 120px; height: 120px;">
                            <h5 class="mb-3">John Doe</h5>
                        </div>
                        <!-- End of box 1-->

                        <!-- box 2 -->
                        <div class="col-lg-4 col-6">
                            <img class="rounded-circle shadow-1-strong mb-4"
                                src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(3).webp" alt=""
                                style="width: 120px; height: 120px;">
                            <h5 class="mb-3">John Doe</h5>
                        </div>
                        <!-- End of box 2-->

                        <!-- box 3 -->
                        <div class="col-lg-4 col-6">
                            <img class="rounded-circle shadow-1-strong mb-4"
                                src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(3).webp" alt=""
                                style="width: 120px; height: 120px;">
                            <h5 class="mb-3">John Doe</h5>
                        </div>
                        <!-- End of box 3 -->
                    </div>
                </div>
            </div>
            <!--- End of Vice President --->
            <!--- Secretary --->
            <div class="card m-3 p-4 shadow">
                <div class="container">
                    <h3 style="color: #0D3376; "> Candidates for Secretary </h3>
                    <hr class="w-100">
                    <div class="row text-center mt-5">
                        <!-- box 1 -->
                        <div class="col-lg-4 col-6">
                            <img class="rounded-circle shadow-1-strong mb-4"
                                src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(3).webp" alt=""
                                style="width: 120px; height: 120px;">
                            <h5 class="mb-3">John Doe</h5>
                        </div>
                        <!-- End of box 1-->

                        <!-- box 2 -->
                        <div class="col-lg-4 col-6">
                            <img class="rounded-circle shadow-1-strong mb-4"
                                src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(3).webp" alt=""
                                style="width: 120px; height: 120px;">
                            <h5 class="mb-3">John Doe</h5>
                        </div>
                        <!-- End of box 2-->

                        <!-- box 3 -->
                        <div class="col-lg-4 col-6">
                            <img class="rounded-circle shadow-1-strong mb-4"
                                src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(3).webp" alt=""
                                style="width: 120px; height: 120px;">
                            <h5 class="mb-3">John Doe</h5>
                        </div>
                        <!-- End of box 3 -->
                    </div>
                </div>
            </div>
            <!--- End of Secretary --->
            <!--- Auditor --->
            <div class="card m-3 p-4 shadow">
                <div class="container">
                    <h3 style="color: #0D3376; "> Candidates for Auditor </h3>
                    <hr class="w-100">
                    <div class="row text-center mt-5">
                        <!-- box 1 -->
                        <div class="col-lg-4 col-6">
                            <img class="rounded-circle shadow-1-strong mb-4"
                                src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(3).webp" alt=""
                                style="width: 120px; height: 120px;">
                            <h5 class="mb-3">John Doe</h5>
                        </div>
                        <!-- End of box 1-->

                        <!-- box 2 -->
                        <div class="col-lg-4 col-6">
                            <img class="rounded-circle shadow-1-strong mb-4"
                                src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(3).webp" alt=""
                                style="width: 120px; height: 120px;">
                            <h5 class="mb-3">John Doe</h5>
                        </div>
                        <!-- End of box 2-->

                        <!-- box 3 -->
                        <div class="col-lg-4 col-6">
                            <img class="rounded-circle shadow-1-strong mb-4"
                                src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(3).webp" alt=""
                                style="width: 120px; height: 120px;">
                            <h5 class="mb-3">John Doe</h5>
                        </div>
                        <!-- End of box 3 -->
                    </div>

                </div>
            </div>
            <!--- End of Auditor --->
            <!--- Treasurer --->
            <div class="card m-3 p-4 shadow">
                <div class="container">
                    <h3 style="color: #0D3376; "> Candidates for Treasurer </h3>
                    <hr class="w-100">
                    <div class="row text-center mt-5">
                        <!-- box 1 -->
                        <div class="col-lg-4 col-6">
                            <img class="rounded-circle shadow-1-strong mb-4"
                                src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(3).webp" alt=""
                                style="width: 120px; height: 120px;">
                            <h5 class="mb-3">John Doe</h5>
                        </div>
                        <!-- End of box 1-->

                        <!-- box 2 -->
                        <div class="col-lg-4 col-6">
                            <img class="rounded-circle shadow-1-strong mb-4"
                                src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(3).webp" alt=""
                                style="width: 120px; height: 120px;">
                            <h5 class="mb-3">John Doe</h5>
                        </div>
                        <!-- End of box 2-->

                        <!-- box 3 -->
                        <div class="col-lg-4 col-6">
                            <img class="rounded-circle shadow-1-strong mb-4"
                                src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(3).webp" alt=""
                                style="width: 120px; height: 120px;">
                            <h5 class="mb-3">John Doe</h5>
                        </div>
                        <!-- End of box 3 -->
                    </div>

                </div>
            </div>
            <!--- End of Treasurer --->
            <!--- PIO --->
            <div class="card m-3 p-4 shadow">
                <div class="container">
                    <h3 style="color: #0D3376; "> Candidates for PIO </h3>
                    <hr class="w-100">
                    <div class="row text-center mt-5">
                        <!-- box 1 -->
                        <div class="col-lg-4 col-6">
                            <img class="rounded-circle shadow-1-strong mb-4"
                                src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(3).webp" alt=""
                                style="width: 120px; height: 120px;">
                            <h5 class="mb-3">John Doe</h5>
                        </div>
                        <!-- End of box 1-->

                        <!-- box 2 -->
                        <div class="col-lg-4 col-6">
                            <img class="rounded-circle shadow-1-strong mb-4"
                                src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(3).webp" alt=""
                                style="width: 120px; height: 120px;">
                            <h5 class="mb-3">John Doe</h5>
                        </div>
                        <!-- End of box 2-->

                        <!-- box 3 -->
                        <div class="col-lg-4 col-6">
                            <img class="rounded-circle shadow-1-strong mb-4"
                                src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(3).webp" alt=""
                                style="width: 120px; height: 120px;">
                            <h5 class="mb-3">John Doe</h5>
                        </div>
                        <!-- End of box 3 -->
                    </div>

                </div>
            </div>
            <!--- End of PIO --->
            <!--- Senators --->
            <div class="card m-3 p-4 shadow">
                <div class="container">
                    <h3 style="color: #0D3376;"> Candidates for Senators </h3>
                    <hr class="w-100">
                    <div class="row text-center mt-5">
                        <!-- box 1 -->
                        <div class="col-lg-4 col-6">
                            <img class="rounded-circle shadow-1-strong mb-4"
                                src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(3).webp" alt=""
                                style="width: 120px; height: 120px;">
                            <h5 class="mb-3">John Doe</h5>
                        </div>
                        <!-- End of box 1-->

                        <!-- box 2 -->
                        <div class="col-lg-4 col-6">
                            <img class="rounded-circle shadow-1-strong mb-4"
                                src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(3).webp" alt=""
                                style="width: 120px; height: 120px;">
                            <h5 class="mb-3">John Doe</h5>
                        </div>
                        <!-- End of box 2-->

                        <!-- box 3 -->
                        <div class="col-lg-4 col-6">
                            <img class="rounded-circle shadow-1-strong mb-4"
                                src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(3).webp" alt=""
                                style="width: 120px; height: 120px;">
                            <h5 class="mb-3">John Doe</h5>
                        </div>
                        <!-- End of box 3 -->

                        <!-- box 4 -->
                        <div class="col-lg-4 col-6">
                            <img class="rounded-circle shadow-1-strong mb-4"
                                src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(3).webp" alt=""
                                style="width: 120px; height: 120px;">
                            <h5 class="mb-3">John Doe</h5>
                        </div>
                        <!-- End of box 4-->

                        <!-- box 5-->
                        <div class="col-lg-4 col-6">
                            <img class="rounded-circle shadow-1-strong mb-4"
                                src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(3).webp" alt=""
                                style="width: 120px; height: 120px;">
                            <h5 class="mb-3">John Doe</h5>
                        </div>
                        <!-- End of box 5-->

                        <!-- box 6 -->
                        <div class="col-lg-4 col-6">
                            <img class="rounded-circle shadow-1-strong mb-4"
                                src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(3).webp" alt=""
                                style="width: 120px; height: 120px;">
                            <h5 class="mb-3">John Doe</h5>
                        </div>
                        <!-- End of box 6 -->
                    </div>

                </div>
            </div>
            <!--- End of Senators --->
        </div>
    </div>
    <!--- end of list candidates --->

    <!--- Carousel for partylist --->
    <hr>
    <!--- End of Carousel --->

    <div class="mt-5 ">
        <h2 class=" fw-semibold text-center " style="color: #0D3376;  ">
            Meet the Developers </h2>
    </div>
    <div class="container mt-2">
        <!---- Start of Portfolio ---->
        <div class="container-fluid">
            <div class="d-xl-flex flex-column mx-auto justify-content-center " style="width: 75%;">
                <!--- Testimonial 1 --->
                <div class="d-sm-flex flex-row p-4 m-3 justify-content-center align-items-center box1"
                    style="width: 100%;">
                    <div class="d-flex flex-column flex-shrink-1 m-auto align-items-center ">
                        <!--- Image --->
                        <img class="rounded-circle border border-4 bg-primary" width="150px" height="150px">
                    </div>
                    <div class="m-3 flex-column text-center text-sm-start">
                        <!--- Details --->
                        <div class="flex-row">
                            <h2><span style="color: #4154F1 ;">Firstname</span><span style="color: #0D3376;">
                                    Lastname</span></h2>
                            <p class="text-justify flex-grow-1 ">
                                "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem
                                sint vero voluptatem commodi officiis minima, architecto veritatis
                                nobis. Iste dolore distinctio dolorum. Consequatur, dolorum nihil
                                sed enim placeat possimus nemo."</p>

                            <a href="#" style="text-decoration: none; color: white; "> <button type="button"
                                    class="btn btn-primary  mb-2">See my Portfolio </button></a>
                        </div>
                    </div>
                </div>
                <!--- End of Testimonial 1 --->
                <!--- Testimonial 2 --->
                <div class="d-sm-flex flex-row-reverse p-4 m-3 justify-content-center align-items-center box1"
                    style="width: 100%;">
                    <div class="d-flex flex-column flex-shrink-1 m-auto align-items-center">
                        <!--- Image --->
                        <img class="rounded-circle border border-4 bg-primary" width="150px" height="150px">
                    </div>
                    <div class="m-3 flex-column text-center text-sm-end">
                        <!--- Details --->
                        <div class="flex-row">
                            <h2><span style="color: #4154F1 ;">Firstname</span><span style="color: #0D3376;">
                                    Lastname</span></h2>
                            <p class="text-justify flex-grow-1 ">
                                "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem
                                sint vero voluptatem commodi officiis minima, architecto veritatis
                                nobis. Iste dolore distinctio dolorum. Consequatur, dolorum nihil
                                sed enim placeat possimus nemo."</p>

                            <a href="#" style="text-decoration: none; color: white; "> <button type="button"
                                    class="btn btn-primary  mb-2">See my Portfolio </button></a>
                        </div>
                    </div>
                </div>
                <!--- End of Testimonial 2 --->
                <!--- Testimonial 3 --->
                <div class="d-sm-flex flex-row p-4 m-3 justify-content-center align-items-center box1"
                    style="width: 100%;">
                    <div class="d-flex flex-column flex-shrink-1 m-auto align-items-center">
                        <!--- Image --->
                        <img class="rounded-circle border border-4 bg-primary" width="150px" height="150px">
                    </div>
                    <div class="m-3 flex-column text-center text-sm-start">
                        <!--- Details --->
                        <div class="flex-row">
                            <h2><span style="color: #4154F1 ;">Firstname</span><span style="color: #0D3376;">
                                    Lastname</span></h2>
                            <p class="text-justify flex-grow-1 ">
                                "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem
                                sint vero voluptatem commodi officiis minima, architecto veritatis
                                nobis. Iste dolore distinctio dolorum. Consequatur, dolorum nihil
                                sed enim placeat possimus nemo."</p>

                            <a href="#" style="text-decoration: none; color: white; "> <button type="button"
                                    class="btn btn-primary  mb-2">See my Portfolio </button></a>
                        </div>
                    </div>
                </div>
                <!--- End of Testimonial 3 --->
            </div>
            <hr>
            <div class="col p-2 text-center footer-sidenavbar">
                <img src="{{ asset('images/WRI_Logo.png') }}" class="img-fluid" id="WRI" width="50" />

                <p class="copyright text-center">
                    SBO-Voting System 2022 &copy <br>Created by <a href="#" class="fw-bold">WRI Designs</a>
                </p>
            </div>
        </div>

        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
        </script>
    @endsection
