@inject('userClass', 'App\Models\User')

@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <h1 class="text-5xl text-center pt-24">Home</h1>


@foreach($posts as $post)
    <div class="block mx-auto my-12 p-8 bg-white w-1/2 border border-gray-200 rounded-lg shadow-lg">


    <h1 class="text-3xl text-center font-bold">{{ $post->title }}</h1>

    @auth
        <form class="mt-4" method="post" action="{{ route('answer.create') }}">
        @csrf
    @endauth
    @guest
        <form class="mt-4" method="get" action="{{ route('login') }}">  
    @endguest
    <p>Author: {{ ($userClass->find($post->user_id))->name }}</p>
    <p>{{ $post->text_post }}</p>
    <input type="hidden" name="post_id" value="{{ $post->id }}">
    <button type="submit" class="block mx-auto rounded-md bg-indigo-500 w-4/5 text-lg text-white font-semibold p-2 my-3 hover:bg-indigo-600">Show</button>
    </form>

</div>

@endforeach    

@endsection
