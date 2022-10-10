<div>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">LISTA UCZESTNIKÓW</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Panel administracyjny</a></li>
                        <li class="breadcrumb-item active">Lista uczestników</li>
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
                                @foreach ($ids as $id)
                                    <button wire:click.prevent="setLeague({{ $id['id'] }})"
                                        class="btn btn-primary btn-sm mr-1">
                                        {{ $id['short'] }}
                                    </button>
                                @endforeach

                            </div>


                            <p class="card-text">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">lp.</th>
                                        <th scope="col">#Nr</th>
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
                                            @isset($member->user_id)
                                                @foreach($member->user->roles as $role)
                                                @if($role->title=="banned")
                                                <button class="btn-danger">B</button>

                                                @elseif($role->title=="retired")
                                                <button class="btn-warning">R</button>
                                                @elseif($role->title=="vip")
                                                <button class="btn-info">V</button>
                                                @elseif($role->title=="pending")
                                                <button class="btn-light">P</button>
                                                @elseif($role->title=="admin")
                                                <button class="btn-dark">A</button>
                                                @else
                                                <button class="btn-primary">U</button>
                                                @endif

                                                @endforeach
                                            @endisset
                                        </td>
                                        <td>
                                            @isset($member->user_id)
                                            <a href=""
                                                wire:click.prevent="removeFromLeague({{ $member }})">
                                                <i class="fa fas fa-user-minus text-danger"></i>
                                            </a>
                                            @else
                                            <a href=""
                                                wire:click.prevent="addToLeague({{ $member }})">
                                                <i class="fa fas fa-user-plus text-success"></i>
                                            </a>
                                            @endisset
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        </p>


                    </div>

                </div>
                <div class="card-footer d-flex justify-content-end">


                </div>
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->

</div>
</div>
