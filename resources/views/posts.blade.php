@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @if($posts->count())
                @foreach ($posts as $post)
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card my-2 mx-2">
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p class="card-text">{{ $post->content }}</p>
                                <a href="{{ route('posts.show', ['id' => $post->id]) }}" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                @endforeach 
            @else
                <span>Aucun poste dans la base de donnée</span>
            @endif
        </div>
    </div>
    
@endsection