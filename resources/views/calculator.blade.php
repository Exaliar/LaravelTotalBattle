@extends('layouts.app')

@section('content')

    <!-- MONSTER MODAL -->
    @livewire('calculator.menu-monsters-modal')
    <!-- END MONSTER MODAL -->

    <!-- ARMY MODAL -->
    @livewire('calculator.menu-army-modal')
    <!-- END ARMY MODAL -->

    <div id="app">
        <main class="py-4">
            <div class="container-fluid">
                <div class="color-second-text color-mine">
                    <h1 class="display-3 text-center">{{ 'Calculator' }}</h1>

                </div>

                <div class="container-fluid w-1000p overflow-scroll">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">

                                @livewire('calculator.menu-monsters')


                                @livewire('calculator.player-panel')


                                @livewire('calculator.raport')


                            </div>
                        </div>
                    </div>
                </div>
                {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".monster-modal">Monsters</button>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".army-modal">Army</button> --}}
            </div>
        </main>
    </div>
@endsection
