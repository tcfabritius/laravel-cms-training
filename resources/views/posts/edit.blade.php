@extends('layouts.app')

@section('content')

<h1>Edit post</h1>

<form action="/posts/{{$post->id}}" method="post">
    {{ csrf_field() }}

    <input type="hidden" name="_method" value="PUT">
    <input type="text" name="title" id="" placeholder="Enter title" value="{{$post->title}}">

    <input type="submit" value="update" name="submit">
</form>
<form action="/posts/{{$post->id}}" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="DELETE">
    <input type="submit" value="delete" name="submit">
</form>

@endsection