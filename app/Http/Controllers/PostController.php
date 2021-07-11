<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index()
    {
        $title = 'Liste des articles';
        $posts = Post::all();

        return view('posts', [
            'posts' => $posts,
            'title' => $title
        ]);
        /*
            Façon possible pour passer des données à une vue Blade
        */
        //return view('posts', compact('title'));
        //return view('posts')->with('title',$title);
        //return view('posts',compact('title','title2'));
        //return view('posts', ['title'=> $title, 'title2' => $title2]);
    }

    public function show($id)
    {
        
        $post = Post::findOrFail($id);
        /*
            exemple : Eloquent 
        */
        //$post = Post::where('title','=', 'Libero ratione est impedit enim.')->first();
        //$post = Post::where('title','=', 'Libero ratione est impedit enim.')->firstOrFail();

        $title = $post->title;

        return view('show',[
           'post' => $post,
           'title' => $title
        ]);
    }

    public function contact()
    {
        return view('contact',['title' => 'contact']);
    }

    public function create()
    {
        return view('create',[
            'title' => 'Créer un nouveau Poste'
        ]);
    }

    public function store(Request $request)
    {
        // $post = new Post();
        // $post->title = $request->title;
        // $post->content = $request->content;
        // $post->save();

        /*
            bonne pratique 
            Necéssite le champ protected $fillable = ['title','content']; dans le model
        */
        Post::create([
            'title' => $request->title,
            'content' => $request->content
        ]);

    }
}
