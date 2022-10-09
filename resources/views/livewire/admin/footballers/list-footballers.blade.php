<div>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">PIŁKARZE</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Panel administracyjny</a></li>
                        <li class="breadcrumb-item active">Piłkarze</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-end">
                                <button wire:click.prevent="addNew" class="btn btn-primary">
                                    <i class="fa fa-plus-circle mr-1"></i> Dodaj nowego piłkarza

                                </button>
                            </div>


                            <p class="card-text">
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
                                                <h4>
                                                    <span
                                                        class="badge badge-pill badge-primary">#{{ $footballer->nr }}</span>
                                                </h4>
                                            </td>
                                            <td>{{ $footballer->name }}</td>
                                            <td>{{ $footballer->nickname }}</td>
                                            <td>{{ $footballer->position }}</td>
                                            <td>
                                                <a href="" wire:click.prevent="edit({{ $footballer }})">
                                                    <i class="fa fa-edit mr-2"></i>
                                                </a>
                                                <a href=""
                                                    wire:click.prevent="confirmFootballerRemover({{ $footballer->id }})">
                                                    <i class="fa fa-trash text-danger"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            </p>


                        </div>

                    </div>
                    <div class="card-footer d-flex justify-content-end">

                        {{ $footballers->links(0) }}

                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->

    <!-- Modal -->
    <div class="modal fade" id="form" role="dialog" tabindex="-1" aria-labelledby="form" aria-hidden="true"
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
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form autocomplete="off"
                        wire:submit.prevent="{{ $showEditModal ? 'updateFootballer' : 'createFootballer' }}">
                        <div class="form-row">
                            <div class="col-md-2 mb-3">
                                <label for="number">Nr</label>
                                <input wire:model.defer="state.nr" type="text"
                                    class="form-control @error('nr') is-invalid @enderror" id="number">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="surname">Ksywka</label>
                                <input wire:model.defer="state.nickname" type="text"
                                    class="form-control @error('nickname') is-invalid @enderror" id="surname">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="name">Imię i nazwisko</label>
                                <input wire:model.defer="state.name" type="text"
                                    class="form-control @error('name') is-invalid @enderror" id="name">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="position">Pozycja</label>
                                <select wire:model.defer="state.position"
                                    class="custom-select @error('position') is-invalid @enderror" id="position">
                                    <option selected value="">-- pozycja --</option>
                                    <option>G</option>
                                    <option>D</option>
                                    <option>M</option>
                                    <option>F</option>
                                </select>
                            </div>
                            <div class="col-md-6
                                    mb-3">
                                <label for="status">Status</label>
                                <select wire:model.defer="state.status"
                                    class="custom-select @error('status') is-invalid @enderror" id="status">
                                    <option selected value="">-- status --</option>
                                    <option>Aktywny</option>
                                    <option>Nieaktywny</option>
                                </select>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Zrezygnuj</button>
                    <button type="submit" class="btn btn-primary">
                        @if ($showEditModal)
                            <span>Aktualizuj</span>
                        @else
                            <span>Dodaj</span>
                        @endif

                    </button>
                </div>
            </div>
            </form>
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
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Anuluj</button>
                    <button type="button" wire:click.prevent="deleteFootballer" class="btn btn-danger">Tak,
                        usuń!</button>
                </div>
            </div>

        </div>
    </div>
    <!-- Delete Confirmation modal end-->

</div>
</div>
