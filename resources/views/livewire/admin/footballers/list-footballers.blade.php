<div>
    <!-- Content Header (Page header) -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Piłkarze</li>
        </ol>
    </nav>
    <!-- /.content-header -->

    <!-- Main content -->

    <div class="d-flex justify-content-end">
        <button wire:click.prevent="addNew" class="btn btn-success">
            <i class="fa-solid fa-user-plus mx-2"></i>Dodaj piłkarza

        </button>
    </div>

    <div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">lp.</th>
                    <th scope="col">#Nr</th>
                    <th scope="col">Imię i Nazwisko</th>
                    <th scope="col">Ksywka</th>
                    <th scope="col">Pozycja</th>
                    <th scope="col">Options</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($footballers as $footballer)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>
                            {{ $footballer->nr }}
                        </td>
                        <td>{{ $footballer->name }}</td>
                        <td>{{ $footballer->nickname }}</td>
                        <td>{{ $footballer->position }}</td>
                        <td>
                            <div>
                                <a href="" class="btn rounded-pill btn-primary btn-sm"
                                    wire:click.prevent="edit({{ $footballer }})">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>

                                <a href="" class="btn rounded-pill btn-danger btn-sm"
                                    wire:click.prevent="confirmFootballerRemover({{ $footballer->id }})">
                                    <i class="fa-solid fa-user-slash"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>





    {{-- Paginate links --}}
    <div class="d-flex justify-content-end">
        {{ $footballers->links() }}
    </div>
    {{-- End paginate links --}}

    <!-- /.content -->


    <!-- Modal -->
    <div class="modal fade" id="form" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
        wire:ignore.self>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        @if ($showEditModal)
                            <span>Edytuj dane piłkarza</span>
                        @else
                            <span>Dodaj nowego piłkarza</span>
                        @endif
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3" autocomplete="off"
                        wire:submit.prevent="{{ $showEditModal ? 'updateFootballer' : 'createFootballer' }}">

                        <div class="col-md-2">
                            <label for="number">Nr</label>
                            <input wire:model.defer="state.nr" type="text"
                                class="form-control @error('nr') is-invalid @enderror" id="number">
                        </div>

                        <div class="col-md-4">
                            <label for="surname">Ksywka</label>
                            <input wire:model.defer="state.nickname" type="text"
                                class="form-control @error('nickname') is-invalid @enderror" id="surname">
                        </div>
                        <div class="col-md-6">
                            <label for="name">Imię i nazwisko</label>
                            <input wire:model.defer="state.name" type="text"
                                class="form-control @error('name') is-invalid @enderror" id="name">
                        </div>
                        <div class="col-md-6">
                            <label for="position">Pozycja</label>
                            <select wire:model.defer="state.position"
                                class="form-select @error('position') is-invalid @enderror" id="position">
                                <option selected value="">-- pozycja --</option>
                                <option>G</option>
                                <option>D</option>
                                <option>M</option>
                                <option>F</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="status">Status</label>
                            <select wire:model.defer="state.status"
                                class="form-select @error('status') is-invalid @enderror"
                                aria-label="Default select example" id="status">
                                <option selected value="">-- status --</option>
                                <option>Aktywny</option>
                                <option>Nieaktywny</option>
                            </select>
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

    <!-- Delete Confirmation modal -->
    <div class="modal fade" id="delete-modal" role="dialog" tabindex="-1" aria-labelledby="form" aria-hidden="true"
        wire:ignore.self>
        <div class="modal-dialog">

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Usuwanie piłkarza
                    </h5>
                </div>
                <div class="modal-body">
                    <h4>Jesteś pewny, że chcesz usunąć tego piłkarza?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Anuluj</button>
                    <button type="button" wire:click.prevent="deleteFootballer" class="btn btn-danger">Tak,
                        usuń!</button>
                </div>
            </div>

        </div>
    </div>
    <!-- Delete Confirmation modal end-->

</div>
