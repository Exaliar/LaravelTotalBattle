@extends('layouts.app')

@section('content')
    <div id="app">
        <main class="py-4">
            <div class="container">
                <div class="color-second-text color-mine">
                    <h1 class="display-3 text-center">Aktualności!</h1>
                    @if (session('message'))
                        <div class="p-3 mb-2 bg-success text-white">{{ session('message') }}</div>
                    @endif
                    @if (session('deleted'))
                        <div class="p-3 mb-2 bg-danger text-white">{{ session('deleted') }}</div>
                    @endif
                    @can('isAdmin')
                        <div class="card-body">
                            <a href="{{ route('home.create') }}" class="btn btn-success">Nowy Post</a>
                        </div>
                    @endcan
                    @foreach ($homePosts as $post)
                        @if ($loop->first)
                            <div class="card color-mine mb-4">
                                <div class="card-header">
                                    <small class="text-muted">Autor: </small>{{ $post->user->name }}
                                    <small class="text-muted">Utworzony: {{ date('j M Y', strtotime($post->updated_at)) }}</small>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $post->title }}</h5>
                                    <p class="card-text">{{ $post->description }}</p>
                                    <a href="home/{{ $post->id }}" class="btn btn-primary">Read more...</a>
                                </div>
                                @can('isAdmin')
                                    <div class="card-footer">
                                        <div class="card-body row">
                                            <a class="btn btn-primary mr-4" href="{{ route('home.edit', $post->id) }}" role="button">Edycja</a>
                                            <form method="POST" action="{{ route('home.destroy', $post->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" onclick="confirm('Czy na pewno chcesz usunąć post?')">Usuń</button>
                                            </form>
                                        </div>
                                    </div>
                                @endcan
                            </div>
                        @endif
                    @endforeach

                    @foreach ($homePosts as $post)
                        @if ($loop->index % 3 === 0)
                            <div class="card-deck mb-4">
                        @endif
                        @if (!$loop->first)
                            <div class="card color-mine">
                                <div class="card-header">
                                    <small class="text-muted">Autor: </small>{{ $post->user->name }}
                                    <small class="text-muted">Utworzony: {{ date('j M Y', strtotime($post->updated_at)) }}</small>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $post->title }}</h5>
                                    <p class="card-text">{{ $post->description }}</p>
                                    <a href="home/{{ $post->id }}" class="btn btn-primary">Read more...</a>
                                </div>
                                @can('isAdmin')
                                    <div class="card-footer">
                                        <div class="card-body row">
                                            <a class="btn btn-primary mr-4" href="{{ route('home.edit', $post->id) }}" role="button">Edycja</a>
                                            <form method="POST" action="{{ route('home.destroy', $post->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" onclick="confirm('Czy na pewno chcesz usunąć post?')">Usuń</button>
                                            </form>
                                        </div>
                                    </div>
                                @endcan
                            </div>
                        @endif
                        @if (($loop->index + 1) % 3 == 0)
                </div>
                @endif
                @endforeach
            </div>
        </main>
    </div>
@endsection
