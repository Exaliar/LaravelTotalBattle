@extends('layouts.app')

@section('content')
    <div id="app">
        <main class="py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <h1>Calculator New content</h1>
                            <div class="card-header">{{ __('TestMenuTB') }}</div>

                            <div class="card-body">

                                @include('inc.armyMenu')

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

@endsection
