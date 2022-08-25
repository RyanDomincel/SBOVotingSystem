@extends('layouts.admin_app')


@section('content')
    <div class="card p-5 mt-3">
        @foreach ($candidates->user as $candidate)
            <h1>{{ $candidate->name }}</h1>
        @endforeach

        <small>{{ $candidates->student_id }} |</small>
        <small>{{ $candidates->school_year }}</small>
        <br>
        <a href="{{ $candidates->id }}/edit"><button class="btn btn-primary">Edit Contact</button></a>
        <br>
        <form action="/admin/manage_voter/{{ $candidates->id }}" method="POST">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <button type='submit' class="btn btn-danger" title="Delete Voter" onclick="return confirm('Are you sure?')">
                Delete Voter</button>

        </form>
        {{-- @if (count($message) > 0)
            @foreach ($message as $item)
                <div class="card p-4 m-4">
                    <h2>{{ $item->msg }}</h2>
                    <small>Written on {{ $item->created_at }}</small>
                </div>
            @endforeach
        @else
            <div class="card p-4 m-4">No Messages from this Contact xxx</div>
        @endif --}}


    </div>
@endsection
