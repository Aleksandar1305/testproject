@extends('layouts.index')


@section('content')

    <h1>Categories: </h1>

    <br>
    <table class="table table-bordered col-sm-8">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Created</th>
            <th>Delete</th>



        </tr>
        </thead>
        <tbody>

        @if($categories)

            @foreach($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                    <td>{{$category->created_at->diffForHumans()}}</td>


                    <td>


                        {!! Form::open(['method'=>'Delete', 'action'=> ['AdminCategoryController@destroy', $category->id]]) !!}

                        <div class="form-group">
                            {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                        </div>

                        {!! Form::close() !!}


                    </td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>


    <h2>Create Category: </h2>

    <br>

    <hr>

    <div class="col-sm-8">


        {!! Form::open(['method'=>'POST', 'action'=> 'AdminCategoryController@store']) !!}


        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class'=>'form-control'])!!}
        </div>


        <div class="form-group">
            {!! Form::submit('Create Category', ['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}

    </div>






@stop
