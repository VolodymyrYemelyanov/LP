@extends('layouts.app')

@section('title-block')Messages @endsection

@section('content')
    <h1>All messages</h1>

    @foreach ($data as $item)
        <div class="alert alert-info">
        <h3>{{ $item->name }}</h3>
        <p>{{ $item->email }}</p>
        <p><small>{{ $item->created_at }}</small></p>
        </div>
    @endforeach
@endsection
