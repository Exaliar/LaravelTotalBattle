@extends('layouts.app')

@section('content')

    @livewire('calculator.menu-monsters-modal')

    <!-- ARMY MODAL -->
    <div class="modal fade army-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="overflow: scroll">
        <div class="modal-dialog modal-xl">
            <div class="modal-content bg-dark" style="min-width: 640px">
                <div class="modal-header">
                    <h5 class="modal-title text-white" id="exampleModalLongTitle">Army Menu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="text-danger" aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body d-flex flex-column">

                    <nav>
                        <div class="nav nav-tabs" role="tablist">
                            @foreach ($armies as $group => $army)
                                <a class="nav-item nav-link @if ($loop->first) active @endif" id="nav-{{ $group }}-tab" data-toggle="tab" href="#nav-{{ $group }}" role="tab" aria-controls="nav-{{ $group }}"
                                    aria-selected="true">{{ strtoupper($group) }}</a>
                            @endforeach
                        </div>
                    </nav>

                    <div class="tab-content">
                        @foreach ($armies as $group => $army)
                            <div class="tab-pane fade show @if ($loop->first) active @endif" id="nav-{{ $group }}" role="tabpanel">
                                <table class="table table-dark table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col" style="width: 50px">#</th>
                                            <th scope="col" style="width: 300px">Name</th>
                                            <th scope="col">Lvl's</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($army as $name => $lvls)
                                            <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>{{ ucfirst($name) }}</td>
                                                <td>
                                                    @foreach ($lvls as $lvl => $id)
                                                        <a href="#{{ $id }}"
                                                            class="btn btn-sm
                                                        @if ($lvl == 1) lvl-I @endif
                                                        @if ($lvl == 2) lvl-II @endif
                                                        @if ($lvl == 3) lvl-III @endif
                                                        @if ($lvl == 4) lvl-IV @endif
                                                        @if ($lvl == 5) lvl-V @endif
                                                        @if ($lvl == 6) lvl-VI @endif
                                                        @if ($lvl == 7) lvl-VII @endif
                                                        "
                                                            role="button">{{ $lvl }}</a>
                                                    @endforeach
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endforeach
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                                <table class="table table-dark table-hover m-0">

                                    <thead>
                                        <tr>
                                            <th colspan="6" class="text-center table-calculator">Przeciwnik</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <th class="text-center">Rodzaj</th>
                                            <th class="text-center">Lvl</th>
                                            <th class="text-center">Typ</th>
                                            <th class="text-center">Menu</th>
                                        </tr>
                                        @livewire('calculator.menu-monsters')
                                    </tbody>

                                </table>

                                <table class="table table-dark table-hover m-0">

                                    <thead>
                                        <tr>
                                            <th colspan="7" class="text-center table-calculator">Jednostki Gracza</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td data-toggle="collapse" data-target="#army1" class="accordion-toggle align-middle" style="cursor:pointer;">1</td>
                                            <td data-toggle="collapse" data-target="#army1" class="accordion-toggle align-middle w-50" style="cursor:pointer;">Jezdziec Ognistego Robaka
                                            <td class="text-center align-middle"><button class="btn lvl-V">5</button></td>
                                            </td>
                                            <td colspan="4">
                                                <div class="input-group">
                                                    <input type="number" class="w-100p form-control" placeholder="Ilość">
                                                    <input type="number" class="w-100p form-control" placeholder="Bonus Atak">
                                                    <input type="number" class="w-100p form-control" placeholder="Bonus Życie">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-outline-primary" type="button" id="button-addon2">Zmień</button>
                                                        <button class="btn btn-outline-danger" type="button" id="button-addon2">Usuń</button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="6" class="hiddenRow">
                                                <div id="army1" class="accordian-body collapse">
                                                    <table class="w-100">
                                                        <thead>
                                                            <tr class="text-primary">
                                                                <th>Typ</th>
                                                                <th>Bonus</th>
                                                                <th>Atak</th>
                                                                <th>Życie</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Postawa</td>
                                                                <td>BRAK</td>
                                                                <td>12345</td>
                                                                <td>4321</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Piechota</td>
                                                                <td>+2 050% Bestia</td>
                                                                <td>12345</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Człowiek</td>
                                                                <td>+1 000% Jezżiec</td>
                                                                <td>12345</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>

                                    <tbody>
                                        <tr>
                                            <td class="pr-0 text-center align-middle">Atak</td>
                                            <td class="pr-0 align-middle">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="firstAtak" id="firstAtak1" value="option1" checked>
                                                    <label class="form-check-label" for="firstAtak1">
                                                        Gracz
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="firstAtak" id="firstAtak2" value="option2">
                                                    <label class="form-check-label" for="firstAtak2">
                                                        Potwory
                                                    </label>
                                                </div>
                                            </td>

                                            <td class="pr-0 align-middle">Zmień we wszystkich</td>

                                            <td class="pr-0 align-middle">
                                                <div class="input-group w-150p">
                                                    <div class="input-group-prepend">
                                                        <button class="btn btn-outline-secondary" type="button">-</button>
                                                    </div>
                                                    <input type="number" value="25" class="form-control">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-outline-secondary" type="button">+</button>
                                                    </div>
                                                </div>
                                            </td>

                                            <td class="pr-0 align-middle">
                                                <div class="input-group w-150p">
                                                    <div class="input-group-prepend">
                                                        <button class="btn btn-outline-secondary" type="button">-</button>
                                                    </div>
                                                    <input type="number" value="25" class="form-control">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-outline-secondary" type="button">+</button>
                                                    </div>
                                                </div>
                                            </td>

                                            <td class="pr-0 align-middle" colspan="2">
                                                <div class="input-group w-250p">
                                                    <div class="input-group-prepend">
                                                        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target=".army-modal">Armia</button>
                                                    </div>
                                                    <div class="input-group-append">
                                                        <button type="button" class="btn table-calculator">Oblicz</button>
                                                        <button type="button" class="btn btn-success">Zapisz</button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>

                                </table>

                                <table class="table table-dark table-hover">

                                    <thead>
                                        <tr>
                                            <th colspan="12" class="text-center table-calculator">Raport</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr style="cursor: pointer">
                                            <td data-toggle="collapse" data-target="#demo3" class="accordion-toggle text-center btn btn-primary w-50">Ogólny</td>
                                            <td data-toggle="collapse" data-target="#demo4" class="accordion-toggle text-center btn btn-primary w-50">Szczegółowy</td>
                                        </tr>
                                        <tr>
                                            <td colspan="6" class="hiddenRow">
                                                <div id="demo3" class="accordian-body collapse">

                                                    <table class="w-100">
                                                        <tbody>
                                                            <tr>
                                                                <th class="text-center">#</th>
                                                                <th class="text-center">Nazwa</th>
                                                                <th class="text-center">lvl</th>
                                                                <th class="text-center">ilość</th>
                                                                <th colspan="2" class="text-center">Przetrwało</th>
                                                                <th colspan="2" class="text-center">Zgineło</th>
                                                            </tr>
                                                        </tbody>
                                                        <tbody>
                                                            <tr>
                                                                <td class="text-center align-middle">1</td>
                                                                <td class="text-center align-middle">Pustynny Pogromca</td>
                                                                <td class="text-center align-middle"><button class="btn lvl-V">5</button></td>
                                                                <td class="text-center align-middle">2 485 000</td>
                                                                <td colspan="4" class="text-center align-middle">

                                                                    <div class="progress m-1">
                                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>

                                                                </td>
                                                            </tr>
                                                        </tbody>

                                                    </table>


                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="6" class="hiddenRow">
                                                <div id="demo4" class="accordian-body collapse show">
                                                    <div class="container-fluid">
                                                        <div class="row p-1">
                                                            <div class="col-1 text-center border border-primary p-3"><span>#</span></div>
                                                            <div class="col-5 text-center border border-success p-3"><span>Gracz</span></div>
                                                            <div class="col-1 text-center border border-primary p-3"><span>Atak</span></div>
                                                            <div class="col-5 text-center border border-danger p-3"><span>Przeciwnik</span></div>
                                                        </div>
                                                        <div class="row align-items-center p-1">
                                                            <div class="col-1 text-center">1</div>
                                                            <div class="col-5 border border-success p-0">
                                                                <div class="container-fluid">
                                                                    <div class="row align-items-center">
                                                                        <div class="col-6 align-middle text-center px-1 opa-30"><span>Jezdziec Ognistego Robaka</span></div>
                                                                        <div class="col-1"><button class="btn lvl-V">5</button></div>
                                                                        <div class="col-5">
                                                                            <div class="row">
                                                                                <div class="col-12 text-right raport-live px-1"><span>2 000 000 000</span></div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-12 text-right raport-deth px-1"><span>- 2 000 000 000</span></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row position-absolute raport-killed">
                                                                            <div class="col-12 m-auto ">
                                                                                <h1>
                                                                                    <i class="fas fa-skull-crossbones"></i>
                                                                                </h1>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-1 text-center text-danger">
                                                                <h1 class="m-0"><i class="fas fa-arrow-left"></i></h1>
                                                            </div>
                                                            <div class="col-5 border border-danger p-0">
                                                                <div class="container-fluid">
                                                                    <div class="row align-items-center">
                                                                        <div class="col-6 align-middle text-center px-1"><span>Jezdziec Ognistego Robaka</span></div>
                                                                        <div class="col-1"><button class="btn lvl-III">3</button></div>
                                                                        <div class="col-5">
                                                                            <div class="row">
                                                                                <div class="col-12 text-right raport-live px-1"><span>2 000 000 000</span></div>
                                                                            </div>
                                                                            <div class="row">
                                                                                {{-- <div class="col-12 text-right raport-deth px-1"><span>0</span></div> --}}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row align-items-center p-1">
                                                            <div class="col-1 text-center">2</div>
                                                            <div class="col-5 border border-success p-0">
                                                                <div class="container-fluid">
                                                                    <div class="row align-items-center">
                                                                        <div class="col-6 align-middle text-center px-1"><span>Jezdziec Ognistego Robaka</span></div>
                                                                        <div class="col-1"><button class="btn lvl-II">2</button></div>
                                                                        <div class="col-5">
                                                                            <div class="row">
                                                                                <div class="col-12 text-right raport-live px-1"><span>2 000 000 000</span></div>
                                                                            </div>
                                                                            <div class="row">
                                                                                {{-- <div class="col-12 text-right raport-deth px-1 h-100"><span></span></div> --}}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-1 text-center text-success">
                                                                <h1 class="m-0"><i class="fas fa-arrow-right"></i></h1>
                                                            </div>
                                                            <div class="col-5 border border-danger p-0">
                                                                <div class="container-fluid">
                                                                    <div class="row align-items-center">
                                                                        <div class="col-6 align-middle text-center px-1"><span>Jezdziec Ognistego Robaka</span></div>
                                                                        <div class="col-1"><button class="btn lvl-VII">7</button></div>
                                                                        <div class="col-5">
                                                                            <div class="row">
                                                                                <div class="col-12 text-right raport-live px-1"><span>2 000 000 000</span></div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-12 text-right raport-deth px-1"><span>- 500 000 000</span></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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
