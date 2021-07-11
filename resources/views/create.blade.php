@extends('layouts.app')
@section('content')
<h1>Créer un nouveau poste</h1>

<form method="POST" action="{{route('posts.store')}}">
    <label for="title">Le titre</label>
    <input type="text" class="form-control" name="title">
    <label for="content">Le contenu</label>
    <input type="text" class="form-control" name="content">
</form>

@endSection