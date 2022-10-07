<div>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">UŻYTKOWNICY</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Panel administracyjny</a></li>
                        <li class="breadcrumb-item active">Użytkownicy</li>
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
                                <button wire:click.prevent="addNew" class="btn btn-primary mr-1">
                                    Wszyscy
                                </button>
                                <button wire:click.prevent="addNew" class="btn btn-success mr-1">
                                    Oczekujący
                                </button>
                                <button wire:click.prevent="addNew" class="btn btn-warning mr-1">
                                    Zrezygnowali
                                </button>
                                <button wire:click.prevent="addNew" class="btn btn-danger mr-1">
                                    Zbanowani
                                </button>
                            </div>


                            <p class="card-text">
                            <table class="table table-dark table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Avatar</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Screen Name</th>
                                        <th scope="col">Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <th scope="row">1</th>
                                            <td><img src="{{ $user->profile_image_url }}" alt="{{ $user->name }}">
                                            </td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->screen_name }}</td>
                                            <td>
                                                <a href="" wire:click.prevent="edit({{ $user }})">
                                                    <i class="fa fa-edit mr-2"></i>
                                                </a>
                                                <a href="">
                                                    <i class="fa fa-trash text-danger"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            </p>

                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
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
                    <h2 class="modal-title" id="exampleModalLabel">
                        <img src="{{ $img }}" alt="{{ $nick }}"
                            class="img-responsive mr-2"><span>{{ $name }}</span>

                    </h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form autocomplete="off" wire:submit.prevent="updateUserRole">
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <div>{{ $name }}</div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div>{{ $nick }}</div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="position">Status użytkownika:</label>


                                @foreach ($roles as $role)
                                    <div class="form-check mx-5">
                                        <input wire:model.defer="userRoles" class="form-check-input" type="checkbox"
                                            value="{{ $role }}" id="{{ $name }}"
                                            {{ in_array($role, $userRoles) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="flexCheckChecked">
                                            {{ $role }}
                                        </label>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Zrezygnuj</button>
                    <button type="submit" class="btn btn-primary">

                        <span>Aktualizuj</span>

                    </button>
                </div>
            </div>
            </form>
        </div>
    </div>
    <!-- Modal end -->


</div>
