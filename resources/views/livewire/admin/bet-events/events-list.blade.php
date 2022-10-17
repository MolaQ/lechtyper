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
            <i class="fa-solid fa-user-plus mx-2"></i>Dodaj mecz
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
                    <th scope="col">H</th>
                    <th scope="col">A</th>
                    <th scope="col">Akcje</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($betevents as $betevent)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>
                            {{ $betvenet->name }}
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
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


</div>
