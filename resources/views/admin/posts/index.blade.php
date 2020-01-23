@extends('layouts.index')




@section('content')

    @if (Auth::check())
        @if (Auth::user()->isAdmin())

            <h1>Posts</h1>

    <table class="table">
        <thead>
        <tr>

            <th>Photo</th>
            <th>Name</th>
            <th>Category</th>
            <th>Price</th>
            <th>Year</th>
            <th>Kilometers</th>
            <th>Body</th>
            <th>Created</th>
            <th>Approve/Un-approve</th>
            <th>Delete</th>


        </tr>
        </thead>
        <tbody>

        @if($posts)

            @foreach($posts as $post)
                <tr>

                    <td><img height="120" src="\images/{{$post->photo ? $post->photo->file : '/images/placeholder.jpg'}}" alt=""></td>
                    <td>{{$post->name}}</td>
                    <td>{{$post->category->name}}</td>
                    <td>{{$post->price}}</td>
                    <td>{{$post->year}}</td>
                    <td>{{$post->kilometers}}</td>
                    <td>{{$post->body}}</td>
                    <td>{{$post->created_at->diffForHumans()}}</td>

                    <td>

                        @if($post->is_active == 0)


                            {!! Form::open(['method'=>'PATCH', 'action'=> ['AdminPostsController@update', $post->id]]) !!}


                            <input type="hidden" name="is_active" value="1">


                            <div class="form-group">
                                {!! Form::submit('Approve', ['class'=>'btn btn-success']) !!}
                            </div>
                            {!! Form::close() !!}


                        @else


                            {!! Form::open(['method'=>'PATCH', 'action'=> ['AdminPostsController@update', $post->id]]) !!}


                            <input type="hidden" name="is_active" value="0">


                            <div class="form-group">
                                {!! Form::submit('Un-approve', ['class'=>'btn btn-info']) !!}
                            </div>
                            {!! Form::close() !!}




                        @endif



                    </td>




                    <td>


                        {!! Form::open(['method'=>'Delete', 'action'=> ['AdminPostsController@destroy', $post->id]]) !!}

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

    {{--    paggination--}}
    <div class="row d-flex justify-content-center">
        <div class="col-sm-6 col-sm-offset-5">

            {{$posts->render()}}

        </div>
    </div>

        @endif
    @endif


@stop
