@extends('layouts.app')

@section('content')
    <div id="app">
        <main class="py-4">
            <div class="container">
                <div class="card">
                    <h1>Profile content</h1>
                    @foreach ($users as $user)
                        {{ ddd($users) }}
                        @foreach ($user->armyTeamSquads as $sqads)
                            <pre>
                                    {{ $sqads }}
                                </pre>
                            @foreach ($sqads as $eachSquad)

                            @endforeach
                        @endforeach
                    @endforeach
                </div>
            </div>
        </main>
    </div>
@endsection
