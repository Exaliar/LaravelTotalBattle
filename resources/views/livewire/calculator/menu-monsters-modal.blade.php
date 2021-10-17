<div>
    <div class="modal fade monster-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="overflow: scroll">
        <div class="modal-dialog modal-xl">
            <div class="modal-content bg-dark" style="min-width: 640px">
                <div class="modal-header">
                    <h5 class="modal-title text-white" id="exampleModalLongTitle">Monster Menu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="text-danger" aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body d-flex flex-column">

                    <nav>
                        <div class="nav nav-tabs" role="tablist">
                            @foreach ($monsters as $group => $monster)
                                <a class="nav-item nav-link @if ($loop->first) active @endif" id="nav-{{ $group }}-tab" data-toggle="tab" href="#nav-{{ $group }}" role="tab" aria-controls="nav-{{ $group }}"
                                    aria-selected="true">{{ strtoupper($group) }}</a>
                            @endforeach
                        </div>
                    </nav>

                    <div class="tab-content">
                        @foreach ($monsters as $group => $monster)
                            <div class="tab-pane fade show @if ($loop->first) active @endif" id="nav-{{ $group }}" role="tabpanel">
                                <div class="container-fluid d-flex">
                                    <div class="nav nav-lvl col-1 p-0 m-0" id="v-lvl-tab-monsters" role="tablist">
                                        <span class="text-center col-12 nav-link">lvl</span>
                                        @foreach ($monster as $lvlBetwen => $lvlMonsterBetwen)
                                            <a class="nav-link col-12 p-0 m-0 text-center @if ($lvlBetwen === '1-5') active @endif" id="v-lvl-{{ $lvlBetwen }}-tab" data-toggle="pill"
                                                href="#v-lvl-{{ $lvlBetwen }}-{{ $group }}" role="tab" aria-controls="v-lvl-{{ $lvlBetwen }}" aria-selected="@if ($lvlBetwen === '1-5') true @else false @endif">{{ $lvlBetwen }}</a>
                                        @endforeach
                                    </div>
                                    <div class="tab-content col-11" id="v-lvl-tab-monstersContent">
                                        @foreach ($monster as $lvlBetwen => $lvlMonsterBetwen)
                                            <div class="tab-pane fade @if ($lvlBetwen === '1-5')show active @endif" id="v-lvl-{{ $lvlBetwen }}-{{ $group }}" role="tabpanel" aria-labelledby="v-lvl-{{ $lvlBetwen }}-tab">
                                                <table class="table table-hover table-dark container">
                                                    <thead>
                                                        <tr>
                                                            <th class="p-1 col-1 text-center">#</th>
                                                            @foreach ($monsterTypes as $type)
                                                                <th class="p-1 col-2 text-center align-middle">{{ ucfirst($type) }}</th>
                                                            @endforeach
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($lvlMonsterBetwen as $lvl => $eachMonsterLvlGroup)
                                                            <tr>
                                                                <th class="align-middle text-center p-0" scope="row">{{ $lvl }}</th>
                                                                @if (isset($lvlMonsterBetwen[$lvl][$monsterTypes[0]]))
                                                                    <td class="p-1 text-center">
                                                                        <a wire:click="$emit('monster' ,{{$lvlMonsterBetwen[$lvl][$monsterTypes[0]]['id'] }})" href="#" role="button" class="align-middle btn btn-success btn-sm" style="width: 90px">{{ ucfirst($monsterTypes[0]) }}</a>
                                                                    </td>
                                                                @else
                                                                    <td class="p-1 text-center"><button type="button" class="align-middle btn btn-secondary btn-lg disabled btn-sm" style="width: 90px">Brak</button></td>
                                                                @endif

                                                                @if (isset($lvlMonsterBetwen[$lvl][$monsterTypes[1]]))
                                                                    <td class="p-1 text-center">
                                                                        <a wire:click="$emit('monster' ,{{$lvlMonsterBetwen[$lvl][$monsterTypes[1]]['id'] }})" href="#" role="button"
                                                                            class="align-middle btn btn-success btn-sm" style="width: 90px">{{ ucfirst($monsterTypes[1]) }}</a>
                                                                    </td>
                                                                @else
                                                                    <td class="p-1 text-center"><button type="button" class="align-middle btn btn-secondary btn-lg disabled btn-sm" style="width: 90px">Brak</button></td>
                                                                @endif

                                                                @if (isset($lvlMonsterBetwen[$lvl][$monsterTypes[2]]))
                                                                    <td class="p-1 text-center">
                                                                        <a wire:click="$emit('monster' ,{{$lvlMonsterBetwen[$lvl][$monsterTypes[2]]['id'] }})" href="#" role="button"
                                                                            class="align-middle btn btn-success btn-sm" style="width: 90px">{{ ucfirst($monsterTypes[2]) }}</a>
                                                                    </td>
                                                                @else
                                                                    <td class="p-1 text-center"><button type="button" class="align-middle btn btn-secondary btn-lg disabled btn-sm" style="width: 90px">Brak</button></td>
                                                                @endif

                                                                @if (isset($lvlMonsterBetwen[$lvl][$monsterTypes[3]]))
                                                                    <td class="p-1 text-center">
                                                                        <a wire:click="$emit('monster' ,{{$lvlMonsterBetwen[$lvl][$monsterTypes[3]]['id'] }})" href="#" role="button"
                                                                            class="align-middle btn btn-success btn-sm" style="width: 90px">{{ ucfirst($monsterTypes[3]) }}</a>
                                                                    </td>
                                                                @else
                                                                    <td class="p-1 text-center"><button type="button" class="align-middle btn btn-secondary btn-lg disabled btn-sm" style="width: 90px">Brak</button></td>
                                                                @endif

                                                                @if (isset($lvlMonsterBetwen[$lvl][$monsterTypes[4]]))
                                                                    <td class="p-1 text-center">
                                                                        <a wire:click="$emit('monster' ,{{$lvlMonsterBetwen[$lvl][$monsterTypes[4]]['id'] }})" href="#" role="button"
                                                                            class="align-middle btn btn-success btn-sm" style="width: 90px">{{ ucfirst($monsterTypes[4]) }}</a>
                                                                    </td>
                                                                @else
                                                                    <td class="p-1 text-center"><button type="button" class="align-middle btn btn-secondary btn-lg disabled btn-sm" style="width: 90px">Brak</button></td>
                                                                @endif
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
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
</div>
