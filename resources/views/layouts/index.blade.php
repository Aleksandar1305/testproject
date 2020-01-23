<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simple Sidebar - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/simple-sidebar.css')}}" rel="stylesheet">

</head>

<body>

<div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
        <div class="sidebar-heading"><a href="{{route('home')}}">Home</a> </div>
        <div class="list-group list-group-flush">


            @if (Auth::check())
            @if (Auth::user()->isMember())

                    <a href="{{route('admin.home')}}" class="list-group-item list-group-item-action bg-light">Dashboard</a>
                    <a href="{{route('users.index')}}" class="list-group-item list-group-item-action bg-light">Users</a>
                    <a href="{{route('categories.index')}}" class="list-group-item list-group-item-action bg-light">Categories</a>
                    <a href="{{route('posts.index')}}" class="list-group-item list-group-item-action bg-light">All Posts</a>
            @endif
            @endif



            <a href="{{route('posts.create')}}" class="list-group-item list-group-item-action bg-light">Create Post</a>
        </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            <button class="btn btn-primary" id="menu-toggle">Hide sidebar</button>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="border-success" href="{{url('/logout')}}"><h5>Logout</h5></a>
                    </li>
                </ul>
            </div>
        </nav>


    @yield('content')
    <!-- /#page-content-wrapper -->

</div>




<!-- /#wrapper -->

<!-- Bootstrap core JavaScript -->

    @yield('scripts')

<script src="{{asset('js/jquery.min.js')}}"></script>

<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>

</div>
</body>


</html>
