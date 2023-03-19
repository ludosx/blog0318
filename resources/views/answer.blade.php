@inject('userClass', 'App\Models\User')

@extends('layouts.app')
@section('content')



    <div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg">

    <p>{{ $post->title }}</p>
    <p>{{ $post->text_post}}</p>

    <form method="post" action="{{ route('answer.store') }} ">
        @csrf
        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
        <input type="hidden" name="post_id" value="{{$post->id}}">
        <textarea placeholder="answer post" name="answer"></textarea>
        <br>
        <input type="submit" value="answer">
        <br>
        <br>

    </form>

    @foreach($answers as $answer)
    <div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg">
        <p>{{ $userClass->find($answer->user_id)->name }}</p>
        <p>{{ $answer->answer }}</p>
        <br>
    </div>
    @endforeach    

    </div>


@endsection
