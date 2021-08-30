@extends('layouts.app')

@section('content')
    <div id="app">
        <main class="py-4">
            <div class="container">
                <div class="card color-second-text color-mine">
                    <h1 class="display-3 text-center">Aktualności!</h1>
                    <div class="card-header">
                        <small class="text-muted">Autor: </small>{{ $post->user->name }}
                        <small class="text-muted">Utworzony: {{ date('j M Y', strtotime($post->updated_at)) }}</small>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <hr>
                        <p class="card-text">{{ $post->description }}</p>
                    </div>
                    <a class="btn btn-success m-5" href="{{ route('home.index') }}">Cofnij</a>
                </div>
            </div>
        </main>
    </div>
@endsection
