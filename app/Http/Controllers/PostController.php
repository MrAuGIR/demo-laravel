<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index()
    {

        $title = 'Mon super titre';
        $title2 = "Mon second article";
        $listTitle = ['Mon super titre', 'Mon second article'];
        /*
            Façon possible pour passer des données à une vue Blade
        */
        //return view('posts', compact('title'));
        //return view('posts')->with('title',$title);
        //return view('posts',compact('title','title2'));
        //return view('posts', ['title'=> $title, 'title2' => $title2]);
        return view('posts', compact('listTitle'));
    }

    public function show($id)
    {
        $post = [

        ];
    }

    public function contact()
    {
        return view('contact',['title' => 'contact']);
    }
}
