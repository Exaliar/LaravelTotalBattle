@extends('layouts.app')

@section('content')
    <div id="app">
        <main class="py-4">
            <div class="container">
                <div class="card">
                    <div class="card-header">{{ 'TestMenuTB' }}</div>
                    <h1>Calculator New content</h1>
                    @include('inc.armyMenu')
                </div>
            </div>
        </main>
    </div>
@endsection
