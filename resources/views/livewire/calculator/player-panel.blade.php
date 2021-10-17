<div>
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
</div>
