<div>
    <div class="d-grid gap-2">
        @auth
            <a class="btn btn-danger" href="{{ route('twitter.logout') }}">
                <i class="fa-solid fa-power-off"></i>
                <span class="nav-text">WYLOGUJ</span>
            </a>
        @else
            <a class="btn btn-success" href="{{ route('twitter') }}">
                <i class="fa-solid fa-power-off"></i>
                <span class="nav-text">DOŁĄCZ DO GRY</span>
            </a>
        @endauth
    </div>
</div>
