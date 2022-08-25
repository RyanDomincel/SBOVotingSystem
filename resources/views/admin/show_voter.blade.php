@extends('layouts.admin_app')


@section('content')
    <div class="card p-5 mt-3">
        <h1>{{ $voters->name }}</h1>
        <small>{{ $voters->email }} |</small>
        <small>updated at {{ $voters->updated_at }}</small>
        <br>
        <a href="{{ $voters->id }}/edit"><button class="btn btn-primary">Edit Contact</button></a>
        <br>
        <form action="/admin/manage_voter/{{ $voters->id }}" method="POST">
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
