@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Listado de post</h1>
        <div class="row">

            @forelse($posts as $post)
            <div class="col-sm-4">
                <div class="card">
                    @if($post->file)
                    <img class="card-img-top" src="{{ $post->file }}" alt="Card image cap">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->name }}</h5>
                        <p class="card-text">{{ $post->excerpt }}...</p>
                        <a href="#" class="btn btn-primary">Leer más</a>
                    </div>
                </div>
            </div>
            @empty
                <p>Sin publicaciones para mostrar :(</p>
            @endforelse
        </div>
        {{ $posts->links() }}
    </div>
@endsection
