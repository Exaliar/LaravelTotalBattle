<div>
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
    </table>s
</div>
