@extends('layouts.app')

@section('content')
    <div id="particle-js"> </div>
    <div class="container vh-100">
        <div class="row align-items-center vh-100">
            <div class="col-lg-4 col-md-6 col-sm-8 col-10 mx-auto formbox ">
                <div class="bg-white p-3 rounded shadow-lg">
                    <form method="POST" action="{{ route('login') }}">
                        <div class="mb-4">
                            <div class="text-center">
                                <img src="{{ asset('images/ICI_Logo.png') }}" class="img-fluid w-75 ">
                            </div>
                            <h2 class="text-center"> SBO Voting System </h2>
                        </div>
                        <div class="mb-3">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                placeholder="User ID">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password" placeholder="Password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3 text-end">
                            <button type="submit" class="btn btn-primary w-50">
                                {{ __('Login') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
