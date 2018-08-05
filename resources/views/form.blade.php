@extends('layouts.app')

@section('content')

    <form action="{{route('posts.show')}}" method="post">
        <input type="text" name="title" value="Enter Title">







        <input type="submit" name="submit" placeholder="submit">

    </form>