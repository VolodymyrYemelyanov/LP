@extends('layouts.app')

@section('title-block')Contact @endsection

@section('content')
    <h1>Contact page</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('submit-form') }}" method="post">
        @csrf

        <div class="form-group">
            <label for="name">Enter your name</label>
            <input id="name" class="form-control" name="name" type="text" placeholder="Enter your name">
        </div>

        <div class="form-group">
            <label for="email">Enter your email</label>
            <input id="email" class="form-control" name="email" type="email" placeholder="Enter your email">
        </div>

        <div class="form-group">
            <label for="message">Enter your message</label>
            <textarea id="message" class="form-control" name="message" rows="5" placeholder="Enter your message"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Submit</button>
    </form>
@endsection
