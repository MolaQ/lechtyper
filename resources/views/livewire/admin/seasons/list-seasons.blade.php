<div>
    <!-- Content Header (Page header) -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Sezony</li>
        </ol>
    </nav>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-end">
                <button wire:click.prevent="addNew" class="btn btn-primary">
                    <i class="fa fa-plus-circle mr-1"></i> Dodaj nowy sezon

                </button>
            </div>


            <p class="card-text">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">lp.</th>
                        <th scope="col">#Nr</th>
                        <th scope="col">Nazwa</th>
                        <th scope="col">Akcje</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($seasons as $season)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>
                                <h4>
                                    <span class="badge badge-pill badge-primary">#{{ $season->nr }}</span>
                                </h4>
                            </td>
                            <td>{{ $season->name }}</td>
                            <td>
                                <a href="" wire:click.prevent="edit({{ $season }})">
                                    <i class="fa fa-edit mr-2"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            </p>


        </div>
        <div class="card-footer d-flex justify-content-end">


        </div>
    </div>

    <!-- /.content -->

    <!-- Modal form-->
    <div class="modal fade" id="form" role="dialog" tabindex="-1" aria-labelledby="form" aria-hidden="true"
        wire:ignore.self>
        <div class="modal-dialog">

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        @if ($showEditModal)
                            <span>Edytuj dane sezonu</span>
                        @else
                            <span>Dodaj nowy sezon</span>
                        @endif
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form autocomplete="off"
                        wire:submit.prevent="{{ $showEditModal ? 'updateSeason' : 'createSeason' }}">
                        <div class="form-row">
                            <div class="col-md-3 mb-3">
                                <label for="number">Nr</label>
                                <input wire:model.defer="state.nr" type="text"
                                    class="form-control @error('nr') is-invalid @enderror" id="number">
                            </div>
                            <div class="col-md-9 mb-3">
                                <label for="surname">Nazwa</label>
                                <input wire:model.defer="state.name" type="text"
                                    class="form-control @error('name') is-invalid @enderror" id="surname">
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
