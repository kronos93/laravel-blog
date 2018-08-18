@extends('layouts.app')


@section('content')
    <div class="container">

            <div class="card text-center">
                <div class="card-header">
                    <h1> {{ $post->name }} </h1>
                    <h4>Categoría: </h4>
                    <a href="{{ route('categories.show', $post->category->slug) }}">{{ $post->category->name }}</a>
                </div>
                <div class="card-body">
                    @if($post->file)
                        <img class="card-img-top" src="{{ $post->file }}" alt="Card image cap">
                    @endif
                    <!-- <h5 class="card-title">Special title treatment</h5> -->
                    <p class="card-text">{!! $post->body !!}</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                <div class="card-footer text-muted">
                    Etiquetas:
                    @foreach($post->tags as $tag)
                        <a href="{{ route('tags.show', $tag->slug) }}">{{ $tag->name }}</a>,
                    @endforeach
                </div>
            </div>

    </div>
@endsection
