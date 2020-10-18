@extends('layouts.app')

@section('title-block')LP @endsection

@section('content')
    <h1>Main page</h1>
    <h3>Hello, World!</h3>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit, repellendus ex quibusdam tempore obcaecati quam libero soluta quasi assumenda, vitae reprehenderit eum consequuntur, placeat esse quis quidem iure unde aspernatur!</p>
@endsection

@section('aside')
    @parent
    <p>Additional text in main page</p>
@endsection

