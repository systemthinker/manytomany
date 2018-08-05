@extends('layouts.app')

@section('content')

    <h1>edit post</h1>

    <form action="{{route('posts.update',$post->id)}}" method="post">

        {{csrf_field()}}
        <input type="text" name="title" value="{{$post->title}}">
        <input type="hidden" name="_method" value="PUT">
        <input type="submit" name="submit" value="Edit Title"><br>
        <input type="text" name="content" value="{{$post->content}}">

        <input type="submit" name="submit" value="Edit Content">
            <br>

        <input type="text" name="title" value="{{$post->title}}">
        <input type="hidden" name="_method" value="DELETE">
        <input type="submit" name="submit" value="DELETE">

    </form>