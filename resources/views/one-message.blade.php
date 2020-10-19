@extends('layouts.app')

@section('title-block')Message @endsection

@section('content')
    <h1>Messages from {{ $data->name }}</h1>

        <div class="alert alert-info">
            <p>{{ $data->message }}</p>
            <p>{{ $data->email }}</p>
            <p><small>{{ $data->created_at }}</small></p>
            {{-- <a href="{{ route('submit-data-message', $data->id)}}" class="btn btn-warning">See message</a> --}}
        </div>

@endsection
