@extends('layouts.app')
@section('content')

<h1 class="text-5xl text-center pt-24">New post</h1>

<div class="block mx-auto my-12 p-8 bg-white w-1/2 border border-gray-200 rounded-lg shadow-lg">
    <form method="post" action="{{ route('post.store') }}">
        @csrf
        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
        <input class="w-full" type="ext" placeholder="Title" name="title">
        <br>
        <textarea class="w-full" placeholder="Text here" name="text_post"></textarea>
        <br>
        <button type="submit" class="block mx-auto rounded-md bg-indigo-500 w-4/5 text-lg text-white font-semibold p-2 my-3 hover:bg-indigo-600">Post</button>
        <br>
    </form>
</div>    
@endsection
