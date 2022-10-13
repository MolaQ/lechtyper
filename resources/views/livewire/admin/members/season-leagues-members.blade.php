<div>
    <!-- Content Header (Page header) -->
    <div class="my-2">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Lista uczestników</li>
            </ol>
        </nav>
    </div>
    <!-- /.content-header -->


    <div class="d-grip gap-2">

        @foreach ($ids as $id)
            <input type="checkbox" class="btn-check" id="{{ $id['id'] }}"
                {{ $id['id'] == $league ? '' : 'checked' }}checked autocomplete="off">
            <label wire:click.prevent="setLeague({{ $id['id'] }})" class="btn btn-outline-primary"
                for="btncheck2">{{ $id['short'] }}</label>
        @endforeach

    </div>


    <!-- Main content -->
    {{-- Table hover --}}
    <div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">lp.</th>
                    <th scope="col">#Nr</th>
                    <th scope="col">Imię i nazwisko</th>
                    <th scope="col">Nazwa</th>
                    <th scope="col">Role</th>
                    <th scope="col">Akcje</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($members as $member)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>
                            <div>
                                {{ $member->league->name }}
                            </div>
                        </td>
                        <td>
                            @if (isset($member->user->name))
                                {{ $member->user->name }}
                            @endisset

                    </td>
                    <td>
                        @if (isset($member->user->screen_name))
                            {{ $member->user->screen_name }}
                        @endisset

                </td>

                <td>
                    @isset($member->user_id)
                        @foreach ($member->user->roles as $role)
                            @if ($role->title == 'banned')
                                <span class="badge rounded-pill bg-danger">B</span>
                            @elseif($role->title == 'retired')
                                <span class="badge rounded-pill bg-warning">R</span>
                            @elseif($role->title == 'vip')
                                <span class="badge rounded-pill bg-info">V</span>
                            @elseif($role->title == 'pending')
                                <span class="badge rounded-pill bg-secondary">P</span>
                            @elseif($role->title == 'admin')
                                <span class="badge rounded-pill bg-dark">A</span>
                            @else
                                <span class="badge rounded-pill bg-primary">U</span>
                            @endif
                        @endforeach
                    @endisset
                </td>
                <td>
                    @isset($member->user_id)
                        <a href="" wire:click.prevent="removeFromLeague({{ $member }})">
                            <i class="fa fas fa-user-minus text-danger"></i>
                        </a>
                    @else
                        <a href="" wire:click.prevent="addToLeague({{ $member }})">
                            <i class="fa fas fa-user-plus text-success"></i>
                        </a>
                    @endisset
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>
</div>
