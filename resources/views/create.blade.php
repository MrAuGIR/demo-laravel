@extends('layouts.app')
@section('content')
<h1>Créer un nouveau poste</h1>
<div class="container">
    <div class="row">
        <div class="col-12">
            <form method="POST" action="{{route('posts.store')}}">
                @csrf
                <div class="form-group">
                    <label for="title">Le titre</label>
                    <input type="text" class="form-control" name="title">
                </div>
                <div class="form-group">
                    <label for="content">Le contenu</label>
                    <input type="text" class="form-control" name="content">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endSection