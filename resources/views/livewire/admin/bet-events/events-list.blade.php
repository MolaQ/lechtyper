<div>
    <!-- Content Header (Page header) -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Kalendarz</li>
        </ol>
    </nav>
    <!-- /.content-header -->

    {{-- Buuton --}}
    <div class="d-flex justify-content-end">
        <button wire:click.prevent="addNew" class="btn btn-success">
            <i class="fa-solid fa-calendar-plus mx-2"></i>Dodaj spotkanie
        </button>
    </div>
    {{-- End buuton --}}

    <div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">lp.</th>
                    <th scope="col">Spotkanie</th>
                    <th scope="col">Hashtag</th>
                    <th scope="col">Data i godzina</th>
                    <th scope="col">Wynik</th>
                    <th scope="col">Akcje</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($betevents as $betevent)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>
                            {{ $betevent->name }}
                        </td>
                        <td>{{ $betevent->hashtag }}</td>
                        <td>{{ $betevent->datetime }}</td>
                        <td>{{ isset($betevent->homescore) ? $betevent->homescore : '?' }}:{{ isset($betevent->awayscore) ? $betevent->awayscore : '?' }}
                        </td>
                        <td>
                            <div>
                                <a href="" class="btn rounded-pill btn-primary btn-sm"
                                    wire:click.prevent="edit({{ $betevent }})">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <a href="" class="btn rounded-pill btn-success btn-sm"
                                wire:click.prevent="addBetDetails({{ $betevent }})">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="form" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
        wire:ignore.self>
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        @if ($showEditModal)
                            <span>Edytuj dane spotkania</span>
                        @else
                            <span>Dodaj nowe spotkanie</span>
                        @endif
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3" autocomplete="off"
                        wire:submit.prevent="{{ $showEditModal ? 'updateBetEvent' : 'createBetEvent' }}">

                        <div class="col-md-4">
                            <label for="number">Spotkanie</label>
                            <input wire:model.defer="state.name" type="text"
                                class="form-control @error('name') is-invalid @enderror" id="name">
                        </div>

                        <div class="col-md-3">
                            <label for="hashtag">#hashtag</label>
                            <input wire:model.defer="state.hashtag" type="text"
                                class="form-control @error('hashtag') is-invalid @enderror" id="hashtag">
                        </div>
                        <div class="col-md-3">
                            <label for="datetimepicker">Data i godzina  [YYYY-mm-dd H:i:s]</label>
                            <input wire:model.defer="state.datetime" type="text"
                                class="form-control @error('datetime') is-invalid @enderror date" id='datetimepicker'>
                        </div>
                        <div class="col-md-1">
                            <label for="homescore">Gospod.</label>
                            <input wire:model.defer="state.homescore" type="text"
                                class="form-control @error('homescore') is-invalid @enderror" id="homescore">
                        </div>
                        <div class="col-md-1">
                            <label for="awayscore">Goście</label>
                            <input wire:model.defer="state.awayscore" type="text"
                                class="form-control @error('awayscore') is-invalid @enderror" id="awayscore">
                        </div>

                        <div class="col-12">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zrezygnuj</button>
                            <button type="submit" class="btn btn-primary">
                                @if ($showEditModal)
                                    <span>Aktualizuj</span>
                                @else
                                    <span>Dodaj</span>
                                @endif

                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal end -->

        <!-- Modal -->
        <div class="modal fade" id="form2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
        wire:ignore.self>
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        @if ($showEditModal)
                            <span>Edytuj dane spotkania</span>
                        @else
                            <span>Dodaj nowe spotkanie</span>
                        @endif
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3" autocomplete="off"
                        wire:submit.prevent="{{ $showEditModal ? 'updateBetEvent' : 'createBetEvent' }}">

                        <div class="col-md-4">
                            <label for="number">Spotkanie</label>
                            <input wire:model.defer="state.name" type="text"
                                class="form-control @error('name') is-invalid @enderror" id="name">
                        </div>

                        <div class="col-md-3">
                            <label for="hashtag">#hashtag</label>
                            <input wire:model.defer="state.hashtag" type="text"
                                class="form-control @error('hashtag') is-invalid @enderror" id="hashtag">
                        </div>
                        <div class="col-md-3">
                            <label for="datetimepicker">Data i godzina  [YYYY-mm-dd H:i:s]</label>
                            <input wire:model.defer="state.datetime" type="text"
                                class="form-control @error('datetime') is-invalid @enderror date" id='datetimepicker'>
                        </div>
                        <div class="col-md-1">
                            <label for="homescore">Gospod.</label>
                            <input wire:model.defer="state.homescore" type="text"
                                class="form-control @error('homescore') is-invalid @enderror" id="homescore">
                        </div>
                        <div class="col-md-1">
                            <label for="awayscore">Goście</label>
                            <input wire:model.defer="state.awayscore" type="text"
                                class="form-control @error('awayscore') is-invalid @enderror" id="awayscore">
                        </div>

                        <div class="col-12">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zrezygnuj</button>
                            <button type="submit" class="btn btn-primary">
                                @if ($showEditModal)
                                    <span>Aktualizuj</span>
                                @else
                                    <span>Dodaj</span>
                                @endif

                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal end -->

</div>
