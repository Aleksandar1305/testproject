@extends('layouts.front-index')


@section('content')




    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-lg-3">

                <h1 class="my-4">B . U . C</h1>
{{--                <div class="list-group">--}}
{{--                    @if ($categories)--}}

{{--                        @foreach($categories as $category)--}}
{{--                    <a href="#" class="list-group-item">{{$category->name}}</a>--}}


{{--                        @endforeach--}}

{{--                        @endif--}}
{{--                </div>--}}



{{--                <div class="form-group">--}}
{{--                    --}}
{{--                    <div class="form-group">--}}

{{--                        {!! Form::select('search',  $categories, null, ['class' => 'form-control']) !!}--}}

{{--                    </div>--}}

{{--                    <div class="form-group">--}}
{{--                        {!! Form::submit('Submit', ['class'=>'btn btn-primary']) !!}--}}
{{--                    </div>--}}


{{--                </div>--}}


                <div class="col-md-12">
                    <div class="col-md-6">
                        <label><h3>Category:</h3></label>
                        <select class="btn btn-primary" name = "category">
                            <option value="0">Please Select Category</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>


            </div>
            <!-- /.col-lg-3 -->

            <div class="col-lg-9">

                <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="/images/1.png" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="/images/3.png" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="/images/2.png" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>




                <div class="row">
                @if($posts)

                    @foreach($posts as $post)

                            @if($post->is_active == 1)

                            <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="\images/{{$post->photo ? $post->photo->file : '/images/placeholder.jpg'}}" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">{{$post->name}}</a>
                                </h4>

                                <h5 class="card-title">
                                    Category: {{$post->category->name}}
                                </h5>


                                <h5>Price: {{$post->price}}</h5>

                                <p class="card-text">Details: {{Str::limit($post->body, 35)}}</p>

                                <a class="btn btn-primary" href="{{route('front.post', $post->id)}}">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                                <hr>


                            </div>

                        </div>
                    </div>

                            @endif

                        @endforeach

                    @endif


                </div>

                <!-- /.row -->

            </div>
            <!-- /.col-lg-9 -->

        </div>
        <!-- /.row -->

    </div>

    {{--    paggination--}}
    <div class="row">
        <div class="col-sm-6 col-sm-offset-5">

            {{$posts->render()}}

        </div>
    </div>


    @stop
