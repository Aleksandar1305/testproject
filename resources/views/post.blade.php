@extends('layouts.front-index')


@section('content')


    <!-- Blog Post -->

    <!-- Title -->
    <h1 class="text-center btn-danger">{{$posts->name}}</h1>

    <hr>


    <h5 class="btn btn-secondary">Price:</h5>  <h4>{{$posts->price}}</h4>

    <hr>


    <!-- Preview Image -->
    <div class="text-center">
   <img  class="col-md-6" src="\images/{{$posts->photo ? $posts->photo->file : '/images/placeholder.jpg'}}" alt="">
    </div>
    <hr>

    <!-- Post Content -->
    <p class="btn btn-secondary">Details: </p> <h4>{{$posts->body}}</h4>
    <hr>
    <!-- Date/Time -->
    <p><span class="glyphicon glyphicon-time"></span> Posted {{$posts->created_at->diffForHumans()}}</p>


@stop
