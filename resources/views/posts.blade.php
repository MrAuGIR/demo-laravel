@extends('layouts.app')

@section('content')
    @foreach ($listTitle as $title)
        <h3>{{ $title }}</h3>
    @endforeach
@endsection