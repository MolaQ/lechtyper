<div>
    <div class="d-grid gap-2">
    @auth
        <a class="btn btn-primary btn-block" href="{{ route('twitter.logout') }}">
            <span class="nav-text">WYLOGUJ</span>
        </a>
    @else
        <a class="btn btn-primary btn-block" href="{{ route('twitter') }}">
            <span class="nav-text">DOŁĄCZ DO GRY</span>
        </a>
    @endauth
    </div>
</div>
