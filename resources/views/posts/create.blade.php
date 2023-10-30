@extends('layouts.app')

@section('content')

<h1>Create Post</h1>

<form action="/posts" method="post">
    {{ csrf_field() }}
    <input type="text" name="title" id="" placeholder="Enter title">

    <input type="submit" value="submit" name="submit">
</form>

@endsection
