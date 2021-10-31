<div>
    <table class="table table-dark table-hover m-0">

        <thead>
            <tr>
                <th colspan="7" class="text-center table-calculator">Jednostki Gracza</th>
            </tr>
        </thead>
        @foreach ($armiesSquad as $index => $army)

            {{-- "id" => 1
        "lvl" => 1
        "name" => "Lucznik"
        "menu_type" => "guardsman"
        "first_type" => "ranged_unit"
        "second_type" => "human"
        "third_type" => null
        "strength" => 50
        "health" => 150
        "first_bonus" => 52
        "first_bonus_who" => "melee_unit"
        "second_bonus" => 67
        "second_bonus_who" => "flying_unit"
        "third_bonus" => null
        "third_bonus_who" => null
        "graphics" => null
        "deleted_at" => null
        "created_at" => "2021-10-03T06:48:18.000000Z"
        "updated_at" => "2021-10-03T06:48:18.000000Z" --}}

            <tbody>
                <tr>
                    <td data-toggle="collapse" data-target="#army{{ $loop->index }}" class="accordion-toggle align-middle" style="cursor:pointer;">{{ $loop->index + 1 }}</td>
                    <td data-toggle="collapse" data-target="#army{{ $loop->index }}" class="accordion-toggle align-middle w-50" style="cursor:pointer;">{{ $army['army']['name'] }}
                    <td class="text-center align-middle">
                        <button
                            class="btn
                            @if ($army['army']['lvl'] == 1) lvl-I @endif
                            @if ($army['army']['lvl'] == 2) lvl-II @endif
                            @if ($army['army']['lvl'] == 3) lvl-III @endif
                            @if ($army['army']['lvl'] == 4) lvl-IV @endif
                            @if ($army['army']['lvl'] == 5) lvl-V @endif
                            @if ($army['army']['lvl'] == 6) lvl-VI @endif
                            @if ($army['army']['lvl'] == 7) lvl-VII @endif
                            ">{{ $army['army']['lvl'] }}</button>
                    </td>
                    </td>
                    <td colspan="4">
                        <div class="input-group">
                            <input wire:model="armiesSquad.{{ $index }}.count" type="number" class="w-100p form-control" placeholder="Ilość">
                            <input wire:model="armiesSquad.{{ $index }}.atakBonus" type="number" class="w-100p form-control" placeholder="Bonus Atak">
                            <input wire:model="armiesSquad.{{ $index }}.healthBonus" type="number" class="w-100p form-control" placeholder="Bonus Życie">
                            <div class="input-group-append">
                                <button wire:click="changeArmy({{ $index }})" type="button" class="btn btn-outline-primary" data-toggle="modal" data-target=".army-modal">Zmień</button>
                                <button wire:click="deleteArmy({{ $index }})" class="btn btn-outline-danger" type="button">Usuń</button>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="6" class="hiddenRow">
                        <div id="army{{ $loop->index }}" class="accordian-body collapse">
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
                                        <td>Base</td>
                                        <td>-----</td>
                                        <td>{{ (int) $army['count'] * (((float) $army['army']['strength'] / 100) * (100 + (float) $army['atakBonus'])) }}</td>
                                        <td>{{ (int) $army['count'] * (((float) $army['army']['health'] / 100) * (100 + (float) $army['healthBonus'])) }}</td>
                                    </tr>
                                    @if ($army['army']['first_bonus'] !== null)
                                        <tr>
                                            <td>{{ str_replace('_', ' ', ucfirst($army['army']['first_type'])) }}</td>
                                            <td>{{ $army['army']['first_bonus'] . '% ' . str_replace('_', ' ', ucfirst($army['army']['first_bonus_who'])) }}</td>
                                            <td>{{ (int) $army['count'] * (((float) $army['army']['strength'] / 100) * (100 + (float) $army['atakBonus'] + $army['army']['first_bonus'])) }}</td>
                                            <td></td>
                                        </tr>
                                    @endif
                                    @if ($army['army']['second_bonus'] !== null)
                                        <tr>
                                            <td>{{ str_replace('_', ' ', ucfirst($army['army']['second_type'])) }}</td>
                                            <td>{{ $army['army']['second_bonus'] . '% ' . str_replace('_', ' ', ucfirst($army['army']['second_bonus_who'])) }}</td>
                                            <td>{{ (int) $army['count'] * (((float) $army['army']['strength'] / 100) * (100 + (float) $army['atakBonus'] + $army['army']['second_bonus'])) }}</td>
                                            <td></td>
                                        </tr>
                                    @endif
                                    @if ($army['army']['third_bonus'] !== null)
                                        <tr>
                                            <td>{{ str_replace('_', ' ', ucfirst($army['army']['third_type'])) }}</td>
                                            <td>{{ $army['army']['third_bonus'] . '% ' . str_replace('_', ' ', ucfirst($army['army']['third_bonus_who'])) }}</td>
                                            <td>{{ (int) $army['count'] * (((float) $army['army']['strength'] / 100) * (100 + (float) $army['atakBonus'] + $army['army']['third_bonus'])) }}</td>
                                            <td></td>
                                        </tr>
                                    @endif
                                    <tr>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </td>
                </tr>
            </tbody>

        @endforeach

        <tbody>
            <tr>
                <td class="pr-0 text-center align-middle">Atak</td>
                <td class="pr-0 align-middle">
                    <div class="form-check">
                        <input wire:model="firstAtak" class="form-check-input" type="radio" name="firstAtak" id="firstAtak1" value="player">
                        <label class="form-check-label" for="firstAtak1">
                            Gracz
                        </label>
                    </div>
                    <div class="form-check">
                        <input wire:model="firstAtak" class="form-check-input" type="radio" name="firstAtak" id="firstAtak2" value="monster">
                        <label class="form-check-label" for="firstAtak2">
                            Potwory
                        </label>
                    </div>
                </td>

                <td class="pr-0 align-middle">Zmień we wszystkich</td>

                <td class="pr-0 align-middle">
                    <p class="pr-0 text-center">Bonus Atak</p>
                    <div class="input-group w-150p">
                        <div class="input-group-prepend">
                            <button wire:click="decreaseAtak" class="btn btn-outline-secondary" type="button">-</button>
                        </div>
                        <input wire:model="massChangeAtak" type="number" class="form-control">
                        <div class="input-group-append">
                            <button wire:click="increaseAtak" class="btn btn-outline-secondary" type="button">+</button>
                        </div>
                    </div>
                </td>

                <td class="pr-0 align-middle">
                    <p class="pr-0 text-center">Bonus Życie</p>
                    <div class="input-group w-150p">
                        <div class="input-group-prepend">
                            <button wire:click="decreaseHealth" class="btn btn-outline-secondary" type="button">-</button>
                        </div>
                        <input wire:model="massChangeHelth" type="number" class="form-control">
                        <div class="input-group-append">
                            <button wire:click="increaseHealth" class="btn btn-outline-secondary" type="button">+</button>
                        </div>
                    </div>
                </td>

                <td class="pr-0 align-middle" colspan="2">
                    <div class="input-group w-250p">
                        <div class="input-group-prepend">
                            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target=".army-modal">Dodaj</button>
                        </div>
                        <div class="input-group-append">
                            <button wire:click="calculate" type="button" class="btn table-calculator">Oblicz</button>
                            <button wire:click="saveSquad" type="button" class="btn btn-success">Zapisz</button>
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>

    </table>
</div>
