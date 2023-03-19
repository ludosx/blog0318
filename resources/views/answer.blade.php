@extends('layouts.app')
@section('content')

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
    </form>
@endsection
