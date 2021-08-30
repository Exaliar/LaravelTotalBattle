@extends('layouts.app')

@section('content')
    <div id="app">
        <main class="py-4">
            <div class="container">
                <div class="color-second-text color-mine">
                    <h1 class="display-3 text-center">Post!</h1>
                    <div class="form-group">
                        <label>Urzytkownik</label>
                        <input name="name" type="text" class="form-control" value="{{ Auth::user()->name }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Tytul</label>
                        <input name="title" type="text" class="form-control" placeholder="Wpisz tytul postu">
                        @error('title')
                            <p class="text-danger"><small>{{ $message }}</small></p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Treść postu</label>
                        <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
                        @error('description')
                            <p class="text-danger"><small>{{ $message }}</small></p>
                        @enderror
                    </div>
                    <a href="{{ route('home.index') }}">
                </div>
            </div>
        </main>
    </div>
@endsection
