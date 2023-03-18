@extends('layouts.app')
@section('content')
    <form method="post" action="{{ route('post.store') }}">
        @csrf
        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
        <input type="text" placeholder="title" name="title">
        <br>
        <textarea placeholder="text_post" name="text_post"></textarea>
        <br>
        <input type="submit" value="post">
        <br>
    </form>
@endsection
