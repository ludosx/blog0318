@extends('layouts.app')
@section('content')

<div class="block mx-auto my-12 p-8 bg-white w-1/2 border border-gray-200 rounded-lg shadow-lg">
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
</div>    
@endsection
