<div>
    <div class="row g-2 mb-4">
        <div class="col-auto">
            <h2 class="mb-0">{{ __('Users') }}</h2>
        </div>
    </div>
        <div class="search-box mb-3 mx-auto">
                <input class="form-control search-input search form-control-sm" type="search" placeholder="Search"
                    aria-label="Search">
                <svg class="svg-inline--fa fa-magnifying-glass search-box-icon" aria-hidden="true" focusable="false"
                    data-prefix="fas" data-icon="magnifying-glass" role="img" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 512 512" data-fa-i2svg="">
                    <path fill="currentColor"
                        d="M500.3 443.7l-119.7-119.7c27.22-40.41 40.65-90.9 33.46-144.7C401.8 87.79 326.8 13.32 235.2 1.723C99.01-15.51-15.51 99.01 1.724 235.2c11.6 91.64 86.08 166.7 177.6 178.9c53.8 7.189 104.3-6.236 144.7-33.46l119.7 119.7c15.62 15.62 40.95 15.62 56.57 0C515.9 484.7 515.9 459.3 500.3 443.7zM79.1 208c0-70.58 57.42-128 128-128s128 57.42 128 128c0 70.58-57.42 128-128 128S79.1 278.6 79.1 208z">
                    </path>
                </svg>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-sm fs--1 mb-0">
                <thead>
                    <tr>
                        <th class="sort border-top ps-3" data-sort="nr">{{ __('Nr') }}</th>
                        <th class="sort border-top ps-3" data-sort="name">{{ __('user name') }}</th>
                        <th class="sort border-top" data-sort="screen_name">{{ __('screen name') }}
                        </th>
                        <th class="sort border-top" data-sort="description">{{ __('Description') }}
                        </th>
                        <th class="sort border-top" data-sort="created_at">
                            {{ __('User last seen') }}</th>
                        <th class="sort border-top" data-sort="updated_at">
                            {{ __('User created at') }}</th>
                        <th class="sort border-top" data-sort="roles">{{ __('Roles') }}</th>
                        <th class="sort text-end align-middle pe-0 border-top" scope="col">
                            {{ __('Actions') }}</th>
                    </tr>
                </thead>
                <tbody class="list">
                    @foreach($users as $user)
                        <tr>
                            <td class="align-middle">{{ $loop->iteration }}</td>

                            <td class="align-middle"><a
                                    class="d-flex align-items-center text-1100"
                                    href="../../../apps/e-commerce/landing/profile.html">
                                    <div class="avatar avatar-m"><img class="rounded-circle"
                                            src="{{ $user->profile_image_url }}" alt="{{ $user->name }}" />
                                    </div>
                                    <p class="mb-0 ms-3 text-1100 fw-bold">{{ $user->name }}</p>
                                </a>
                            </td>
                            <td class="align-middle">{{ $user->screen_name }}</td>
                            <td class="align-middle">{{ $user->description }}</td>
                            <td class="align-middle">{{ $user->updated_at->diffForHumans() }}</td>
                            <td class="align-middle">{{ $user->created_at->diffForHumans() }}</td>
                            <td class="align-middle">

                                @if(($editingUserID == $user->id) && ($editingState==1))

                                    @foreach($roles as $role)
                                        <div class="form-check mx-5">
                                            <input wire:model.defer="userRoles" class="form-check-input" type="checkbox"
                                                value="{{ $role }}" id="{{ $name }}"
                                                {{ in_array($role, $userRoles) ? 'checked' : '' }}>
                                            <label class="form-check-label" for="flexCheckChecked">
                                                {{ $role }}
                                            </label>
                                        </div>
                                    @endforeach

                                    <button wire:click='cancelEdit()' class="btn btn-secondary"
                                        data-bs-dismiss="modal">Zrezygnuj</button>
                                    <button wire:click='updateUserRole()' class="btn btn-primary"> Aktualizuj</button>



                                @else
                                    @foreach($user->roles as $r)
                                        <span class="badge bg-light text-dark">{{ ucfirst($r->title[0]) }}</span>
                                    @endforeach
                                @endif
                            </td>
                            <td  class="align-middle">
                                <a href="" wire:click.prevent="edit({{ $user }})">

                                    <span class="fas fa-edit text-primary fs-1"></span>

                                    </a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>



</div>
