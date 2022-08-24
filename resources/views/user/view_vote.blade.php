@extends('layouts.voter_app')

@section('content')
    <div class="col-lg-6 mx-auto container">
        <h2 class="mt-3">Congratulations on casting your vote!</h2>
        <table class="table mt-2 mb-3 ">
            <thead>
                <tr>
                    <th class="table-primary">PRESIDENT</th>
                    <th class="text-end table-primary">VICE PRESIDENT</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <p class="text-uppercase">Uppercased text.</p>
                    </td>
                    <td>
                        <p class="text-uppercase text-end">Uppercased text.</p>
                    </td>
                </tr>
            </tbody>
            <thead>
                <tr>
                    <th class="table-primary">SECRETARY</th>
                    <th class="text-end table-primary">TREASURER</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <p class="text-uppercase">Uppercased text.</p>
                    </td>
                    <td>
                        <p class="text-uppercase text-end">Uppercased text.</p>
                    </td>
                </tr>
            </tbody>
            <thead>
                <tr>
                    <th class="table-primary">PIO</th>
                    <th class="text-end table-primary">AUDITOR</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <p class="text-uppercase">Uppercased text.</p>
                    </td>
                    <td>
                        <p class="text-uppercase text-end">Uppercased text.</p>
                    </td>
                </tr>
            </tbody>
            <thead>
                <th colspan="3" class="senator table-primary text-center">SENATORS</th>
            </thead>
            <tbody class="text-center">
                <tr>
                    <td>
                        <p class="text-uppercase">Uppercased text.</p>
                    </td>
                    <td>
                        <p class="text-uppercase ">Uppercased text.</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="text-uppercase">Uppercased text.</p>
                    </td>
                    <td>
                        <p class="text-uppercase ">Uppercased text.</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="text-uppercase">Uppercased text.</p>
                    </td>
                    <td>
                        <p class="text-uppercase ">Uppercased text.</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="text-uppercase">Uppercased text.</p>
                    </td>
                    <td>
                        <p class="text-uppercase ">Uppercased text.</p>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="col-12 mt-4">
            <div class="row">
                <div class="col-lg-6">
                    <a href="{{ route('user.index') }}"><button class="btn btn-primary">Back to Homepage</button></a>
                </div>
                <div class="col-lg-6 text-end">
                    <a href="#"><button type="button" class="btn btn-primary "
                            onclick="window.print()">Print</button></a>

                    <a href="{{ route('user.index') }}"><button type="button" class="btn btn-secondary "
                            data-bs-dismiss="modal">Close</button></a>
                </div>
            </div>
        </div>
    </div>
@endsection
