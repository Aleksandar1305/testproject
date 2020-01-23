<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Posts;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $posts = Posts::paginate(6);

//        $categories = Categories::pluck('name', 'name')->prepend('Chose category', 'Select A Form');

        $categories = Categories::all();






        return view('front.front', compact('posts', 'categories'));
    }


}
