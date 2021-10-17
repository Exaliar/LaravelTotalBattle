<div>
    {{-- "first_monster" => array:18 [▶]
    "first_monster_count" => 2995
    "second_monster" => array:18 [▶]
    "second_monster_count" => 2838
    "third_monster" => array:18 [▶]
    "third_monster_count" => 2713
    "fourth_monster" => array:18 [▶]
    "fourth_monster_count" => 6874
    "fifth_monster" => array:18 [▶]
    "fifth_monster_count" => 2035
    "sixth_monster" => array:18 [▶]
    "sixth_monster_count" => 5099
    "seventh_monster" => null --}}
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
            <tr>
                <td data-toggle="collapse" data-target="#monster" class="accordion-toggle text-center" style="cursor:pointer">{{ ucfirst($monsters['squad_type']) }}</td>
                <td data-toggle="collapse" data-target="#monster" class="accordion-toggle text-center" style="cursor:pointer">{{ $monsters['lvl'] }}</td>
                <td data-toggle="collapse" data-target="#monster" class="accordion-toggle text-center" style="cursor:pointer">{{ ucfirst($monsters['type']) }}</td>
                <td colspan="2" class="text-center"><button type="button" class="btn btn-primary" data-toggle="modal" data-target=".monster-modal">Zmień</button></td>
            </tr>
    <tr>
        <td colspan="6" class="hiddenRow">
            <div class="accordian-body collapse" id="monster">
                <table class="table color-second-text">
                    <thead>
                        <tr class="border-bottom border-second">
                            <th>Nazwa</th>
                            <th>Ilość</th>
                            <th>Typ</th>
                            <th>Bonus</th>
                            <th>Atak</th>
                            <th>Życie</th>
                        </tr>
                    </thead>

                    <tbody>
                        @isset($monsters['first_monster'])
                            {{-- {{ ddd($monsters['first_monster']) }} --}}
                            {{-- "id" => 21
  "lvl" => 0
  "name" => "Emelie Tromp"
  "first_type" => "fortification"
  "second_type" => "giant"
  "third_type" => "human"
  "strength" => 7
  "health" => 3986
  "first_bonus" => 202
  "first_bonus_who" => "human"
  "second_bonus" => 175
  "second_bonus_who" => "human"
  "third_bonus" => 930
  "third_bonus_who" => "melee_unit"
  "graphics" => "http://www.jacobi.com/ea-aut-ducimus-natus-blanditiis"
  "deleted_at" => null
  "created_at" => "2021-10-03T09:38:10.000000Z"
  "updated_at" => "2021-10-03T09:38:10.000000Z" --}}
                            <tr>
                                <td>{{ $monsters['first_monster']['name'] }}</td>
                                <td>{{ $monsters['first_monster_count'] }}</td>
                                <td class="hiddenRow">
                                    <table class="w-100">
                                        <tbody>
                                            <tr class="border-bottom border-second">
                                                <td class="border-0">{{ $monsters['first_monster']['first_type'] }}</td>
                                            </tr>
                                            <tr>
                                                <td class="border-0">{{ $monsters['first_monster']['second_type'] }}</td>
                                            </tr>
                                            <tr>
                                                <td class="border-0">{{ $monsters['first_monster']['third_type'] }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                                <td class="hiddenRow">
                                    <table class="w-100">
                                        <tr class="border-bottom border-second">
                                            <td class="border-0">---------</td>
                                        </tr>
                                        <tr>
                                            <td class="border-0">10% Jeżdziec</td>
                                        </tr>
                                    </table>
                                </td>
                                <td class="hiddenRow">
                                    <table class="w-100">
                                        <tr class="border-bottom border-second">
                                            <td class="border-0">190 400 000</td>
                                        </tr>
                                        <tr>
                                            <td class="border-0">209 440 000</td>
                                        </tr>
                                    </table>
                                </td>
                                <td>571 200 000</td>
                            </tr>
                        @endisset
                    </tbody>
                </table>
            </div>
        </td>
    </tr>

</tbody>

</table>
</div>
