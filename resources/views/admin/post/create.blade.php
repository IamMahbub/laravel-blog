@extends('layout.admin.master');
@section('title','Create new post');
@section('content')

    <form action={{ route('post.store') }} method="post">
        @csrf
        <h2>create new post</h2>
        <br>
        <br>
        <input type="text" name="title" placeholder="title">
        <br><br>
        <textarea name="description" placeholder="description"></textarea>
        <br><br>
        <button name="submit">Submit</button>
    </form>
    @endsection
