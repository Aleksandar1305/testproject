@extends('layouts.index')


@section('content')


    <h1>Create Post</h1>

    <div class="col-sm-8">

        {!! Form::open(['method'=>'POST', 'action'=> 'AdminPostsController@store', 'files'=>true]) !!}


        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!! Form::label('category_id', 'Category:') !!}
            {!! Form::select('category_id', [''=>'Choose Categories'] + $categories, 0 , ['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!! Form::label('photo_id', 'Photo:') !!}
            {!! Form::file('photo_id', null, ['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!! Form::label('price', 'Price:') !!}
            {!! Form::text('price', null, ['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!! Form::label('year', 'Year:') !!}
            {!! Form::text('year', null, ['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!! Form::label('kilometers', 'Kilometers:') !!}
            {!! Form::text('kilometers', null, ['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!! Form::label('body', 'Description:') !!}
            {!! Form::textarea('body', null, ['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}

    </div>

    <div class="row">

        @include('includes.form_error')
    </div>



@stop
