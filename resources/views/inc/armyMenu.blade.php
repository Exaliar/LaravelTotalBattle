<div class=" container">

    <ul class="nav nav-pills row align-items-start mb-1 row" id="pills-tab" role="tablist">
        <li class="nav-item col"></li>
        <li class="nav-item col">
            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-normal" role="tab" aria-controls="pills-home" aria-selected="true">Zwykłe</a>
        </li>
        <li class="nav-item col">
            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-rare" role="tab" aria-controls="pills-profile" aria-selected="false">Rzadkie</a>
        </li>
        <li class="nav-item col">
            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-heroic" role="tab" aria-controls="pills-contact" aria-selected="false">Heroiczne</a>
        </li>
        <li class="nav-item col">
            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-difrent" role="tab" aria-controls="pills-contact" aria-selected="false">Inne</a>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show d-flex active" id="pills-normal" role="tabpanel" aria-labelledby="pills-home-tab">

            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                @for ($i = 1; $i <= 50; $i += 5)
                    <a class="nav-link @if ($i===1) active @endif " id=" v-pills-{{ $i }}-{{ $i + 4 }}-tab" data-toggle="pill"
                        href="#v-pills-{{ $i }}-{{ $i + 4 }}" role="tab" aria-controls="v-pills-{{ $i }}-{{ $i + 4 }}" aria-selected="

                                                   @if ($i===1)
                        true
                    @else
                        false
                        @endif">{{ $i }}-{{ $i + 4 }}</a>
                @endfor

            </div>

            @for ($i = 1; $i <= 50; $i += 5)
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade @if ($i===1) show active @endif" id="v-pills-{{ $i }}-{{ $i + 4 }}" role="tabpanel"
                        aria-labelledby="v-pills-{{ $i }}-{{ $i + 4 }}-tab">
                        {{ $i }}-{{ $i + 4 }}
                    </div>
                </div>
            @endfor

        </div>
        <div class="tab-pane fade" id="pills-rare" role="tabpanel" aria-labelledby="pills-profile-tab">Rzadkie</div>
        <div class="tab-pane fade" id="pills-heroic" role="tabpanel" aria-labelledby="pills-contact-tab">Heroiczne</div>
        <div class="tab-pane fade" id="pills-difrent" role="tabpanel" aria-labelledby="pills-contact-tab">Inne</div>
    </div>
</div>
