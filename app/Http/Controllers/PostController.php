<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Carbon\Carbon;

class PostController extends Controller
{
    // Создано через консоль, используя команду php artisan make:controller PostController
    // Однако методы почему-то не создались автоматически. Будут созданы вручную
    
    public function index(Post $postModel)
    {
        //$posts = Post::all();
        ////dd($posts);
        //$posts = Post::latest('id')->get();
        //$posts = Post::latest('published_at')->get();
//        $posts = Post::latest('published_at')
//                ->where('published_at', '<=', Carbon::now())
//                ->get();
        
        $posts = $postModel->getPublishedPosts();
        return view('post.index', ['posts' => $posts]);
        //echo 'index';
    }	
}