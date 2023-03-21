@inject('userClass', 'App\Models\User')

@extends('layouts.app')
@section('content')

<h1 class="text-5xl text-center pt-24">New answer</h1>

    <div class="block mx-auto my-12 p-8 bg-white w-1/2 border border-gray-200 rounded-lg shadow-lg">

    <p>Title:   {{ $post->title }}</p>
    <p>Content: {{ $post->text_post}}</p>

    <form method="post" action="{{ route('answer.store') }} ">
        @csrf
        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
        <input type="hidden" name="post_id" value="{{$post->id}}">
        <textarea class="w-full" placeholder="Answer here" name="answer"></textarea>
        <br>
<button type="submit" class="block mx-auto rounded-md bg-indigo-500 w-4/5 text-lg text-white font-semibold p-2 my-3 hover:bg-indigo-600">Answer</button>
        <br>
        <br>

    </form>

    @foreach($answers as $answer)
    <div class="block mx-auto my-12 p-8 bg-white w-3/2 border border-gray-200 rounded-lg shadow-lg">
        <p>Author:   {{ $userClass->find($answer->user_id)->name }}</p>
        <p>{{ $answer->answer }}</p>
        <br>
    </div>
    @endforeach    

    </div>


@endsection
