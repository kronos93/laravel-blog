@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach($tags as $tag)
            <p>{{ $tag->name }}</p>
        @endforeach
        {{ $tags->links() }}
    </div>
@endsection
