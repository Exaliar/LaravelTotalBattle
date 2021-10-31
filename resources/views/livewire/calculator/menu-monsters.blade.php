<div>
    <table class="table table-dark table-hover m-0">

        <thead>
            <tr>
                <th colspan="6" class="text-center table-calculator">Przeciwnik</th>
            </tr>
        </thead>

        <tbody>
            <tr class="text-primary">
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
                                <tr class="border-bottom border-second text-primary">
                                    <th>Nazwa</th>
                                    <th>Ilość</th>
                                    <th>Typ</th>
                                    <th>Bonus</th>
                                    <th>Atak</th>
                                    <th>Życie</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($monsterScope as $eachScope)

                                    @isset($monsters[$eachScope])
                                        <tr class="border-bottom border-bottom-2p border-second">
                                            <td>{{ $monsters[$eachScope]['name'] }}</td>
                                            <td>{{ $monsters[$eachScope . '_count'] }}</td>
                                            <td class="hiddenRow">
                                                <table class="w-100">
                                                    <tbody>
                                                        <tr class="border-bottom border-second">
                                                            <td class="border-0">Base</td>
                                                        </tr>
                                                        <tr class="border-bottom border-second">
                                                            <td class="border-0">{{ str_replace('_', ' ', ucfirst($monsters[$eachScope]['first_type'])) }}</td>
                                                        </tr>
                                                        <tr class="border-bottom border-second">
                                                            <td class="border-0">{{ str_replace('_', ' ', ucfirst($monsters[$eachScope]['second_type'])) }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="border-0">{{ str_replace('_', ' ', ucfirst($monsters[$eachScope]['third_type'])) }}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td class="hiddenRow">
                                                <table class="w-100">
                                                    <tr class="border-bottom border-second">
                                                        <td class="border-0">---------</td>
                                                    </tr>
                                                    <tr class="border-bottom border-second">
                                                        <td class="border-0">{{ $monsters[$eachScope]['first_bonus'] . '% ' . str_replace('_', ' ', ucfirst($monsters[$eachScope]['first_bonus_who'])) }}</td>
                                                    </tr>
                                                    <tr class="border-bottom border-second">
                                                        <td class="border-0">{{ $monsters[$eachScope]['second_bonus'] . '% ' . str_replace('_', ' ', ucfirst($monsters[$eachScope]['second_bonus_who'])) }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="border-0">{{ $monsters[$eachScope]['third_bonus'] . '% ' . str_replace('_', ' ', ucfirst($monsters[$eachScope]['third_bonus_who'])) }}</td>
                                                    </tr>
                                                </table>
                                            </td>
                                            <td class="hiddenRow">
                                                <table class="w-100">
                                                    <tr class="border-bottom border-second">
                                                        <td class="border-0">{{ $monsters[$eachScope . '_count'] * $monsters[$eachScope]['strength'] }}</td>
                                                    </tr>
                                                    <tr class="border-bottom border-second">
                                                        <td class="border-0">{{ $monsters[$eachScope . '_count'] * (($monsters[$eachScope]['strength'] / 100) * (100 + $monsters[$eachScope]['first_bonus'])) }}</td>
                                                    </tr>
                                                    <tr class="border-bottom border-second">
                                                        <td class="border-0">{{ $monsters[$eachScope . '_count'] * (($monsters[$eachScope]['strength'] / 100) * (100 + $monsters[$eachScope]['second_bonus'])) }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="border-0">{{ $monsters[$eachScope . '_count'] * (($monsters[$eachScope]['strength'] / 100) * (100 + $monsters[$eachScope]['third_bonus'])) }}</td>
                                                    </tr>
                                                </table>
                                            </td>
                                            <td>{{ $monsters[$eachScope . '_count'] * $monsters[$eachScope]['health'] }}</td>
                                        </tr>
                                    @endisset

                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </td>
            </tr>

        </tbody>

    </table>
</div>
