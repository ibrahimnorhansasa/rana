<?php
namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Recommend;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
   
    {

        $posts=Post::all();

        $recommends=Recommend::all();



        return view('front.index',compact('posts','recommends'));

    }
}