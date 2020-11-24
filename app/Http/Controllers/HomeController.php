<?php

namespace App\Http\Controllers;


use App\Mail\Contact;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function home(){
        $posts = Post::latest()->paginate();
        return view('home', compact('posts'));
    }

    public function about(){
        return view('about');
    }

    public function post(Post $post){
        return view('post', compact('post'));
    }

    public function contact(){
        return view('mail');
    }
    public function mail(Request $request){
        Mail::to(['kasparsu@gmail.com'])
            ->send(new Contact(
                $request->input('body'),
                $request->input('email'),
                $request->input('title')
            ));
    }
}
