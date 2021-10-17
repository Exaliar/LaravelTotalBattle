<div>
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
</div>
