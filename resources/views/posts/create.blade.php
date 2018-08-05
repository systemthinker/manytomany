@extends('layouts.app')

@section('content')

    <form action="/posts" method="post">
        <input type="text" name="title" value="Enter Title">

        {{csrf_field()}}

        <input  type="text" name="content" value="Enter Content">





        <input type="submit" name="submit" placeholder="submit">

    </form>


    @stop