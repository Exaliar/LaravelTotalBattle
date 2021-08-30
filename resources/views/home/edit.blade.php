@extends('layouts.app')

@section('content')
    <div id="app">
        <main class="py-4">
            <div class="container">
                <div class="color-second-text color-mine">
                    <h1 class="display-3 text-center">Edit Post!</h1>
                    <form method="POST" action="{{ route('home.update', $post->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Urzytkownik</label>
                            <input name="name" type="text" class="form-control" value="{{ $post->user->name }}" readonly>
                        </div>
                        <div class="form-group">
                            <label>Tytul</label>
                            <input name="title" type="text" class="form-control" placeholder="Wpisz tytul postu" value="{{ $post->title }}">
                            @error('title')
                                <p class="text-danger"><small>{{ $message }}</small></p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Treść postu</label>
                            <textarea name="description" class="form-control" id="" cols="30" rows="10">{{ $post->description }}</textarea>
                            @error('description')
                                <p class="text-danger"><small>{{ $message }}</small></p>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </main>
    </div>
@endsection
