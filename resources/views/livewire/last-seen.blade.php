<div>
    <ul>

        @foreach($users as $key => $user)
        <li>{{ $user->screen_name }} | {{ $user->updated_at }}</li>
    @endforeach

    </ul>

</div>
