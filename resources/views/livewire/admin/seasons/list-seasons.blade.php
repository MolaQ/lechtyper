<div>
    <!-- Content Header (Page header) -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Sezony</li>
        </ol>
    </nav>
    <!-- /.content-header -->

    <!-- Main content -->

    <div class="d-flex justify-content-end">
        <button wire:click.prevent="addNew" class="btn btn-success">
            <i class="fa-solid fa-user-plus mx-2"></i>Dodaj sezon

        </button>
    </div>

    <div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">lp.</th>
                    <th scope="col">Nr</th>
                    <th scope="col">Nazwa</th>
                    <th scope="col">Akcje</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($seasons as $season)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>
                            {{ $season->nr }}
                        </td>
                        <td>{{ $season->name }}</td>
                        <td>
                            <div>
                                <a href="" class="btn rounded-pill btn-primary btn-sm"
                                    wire:click.prevent="edit({{ $season }})">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>

                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="d-flex justify-content-end">
        {{ $seasons->links() }}
    </div>

    {{-- Paginate links --}}
    <div class="d-flex justify-content-end">
        {{ $seasons->links() }}
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
                            <span>Edytuj dane sezonu</span>
                        @else
                            <span>Dodaj nowy sezon</span>
                        @endif
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3" autocomplete="off"
                        wire:submit.prevent="{{ $showEditModal ? 'updateSeason' : 'createSeason' }}">

                        <div class="col-md-3">
                            <label for="number">Nr</label>
                            <input wire:model.defer="state.nr" type="text"
                                class="form-control @error('nr') is-invalid @enderror" id="number">
                        </div>

                        <div class="col-md-9">
                            <label for="name">Nazwa</label>
                            <input wire:model.defer="state.name" type="text"
                                class="form-control @error('name') is-invalid @enderror" id="name">
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
