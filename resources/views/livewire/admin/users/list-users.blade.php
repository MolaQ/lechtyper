<div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Użytkownicy</li>
        </ol>
    </nav>

    <!-- Main content -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <p class="card-text">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Awatar</th>
                            <th scope="col">Imię i nazwisko</th>
                            <th scope="col">Nazwa</th>
                            <th scope="col">Opcje</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <th scope="row">1</th>
                                <td><img src="{{ $user->profile_image_url }}" class="rounded img-fluid" width="40"
                                        height="40" lt="{{ $user->name }}">
                                </td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->screen_name }}</td>
                                <td>
                                    <a href="" wire:click.prevent="edit({{ $user }})">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                </p>
            </div>
        </div>

    </div>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#form">
    Launch demo modal
  </button>


<div wire:ignore.self class="modal fade" id="form" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <div class="modal-title"><img src="{{ $img }}" alt="{{ $nick }}" class="rounded-pill mx-2">{{ $name }}({{ $nick }})</div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form autocomplete="off" wire:submit.prevent="updateUserRole">
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
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zrezygnuj</button>
        <button type="submit" class="btn btn-primary">

            <span>Aktualizuj</span>

        </button>
    </div>
    </div>
  </div>
</div>

</div>
