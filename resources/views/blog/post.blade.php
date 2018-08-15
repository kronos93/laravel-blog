@extends('layouts.app')

@section('content')
    <div class="container">
        Listado de post

        @forelse($posts as $post)
            <h1>{{$post->name}}</h1>
        @empty
            <p>Sin publicaciones para mostrar :(</p>
        @endforelse
    </div>
@endsection
