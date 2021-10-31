@extends('layouts.app')

@section('content')
    <div id="app">
        <main class="py-4">
            <div class="container">
                <div class="card">
                    <h1>Forum Content</h1>


                    @foreach ($users as $user)

                        {{ $user->armyTeamSquads }}

                    @endforeach

                </div>
            </div>
        </main>
    </div>
@endsection
