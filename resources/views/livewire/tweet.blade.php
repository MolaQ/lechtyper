<div>

    @auth
    @if (auth()->user()->roles->contains('title', 'admin') || auth()->user()->roles->contains('title', 'user'))



    <div class="card text-center">
        <div class="card-header text-light bg-primary">
            {{ __('interface.sendtweet') }}
        </div>
        <div class="card-body">
            <form wire:submit.prevent="postTweet">
                <div class="progress" role="progressbar" aria-label="Info example" aria-valuenow="0" aria-valuemin="11"
                    aria-valuemax="280">
                    <div class="progress-bar bg-info" style="width:{{ ((11 + strlen($tweet))/280)*100 }}%"></div>
                </div>

                <div>
                    <label for="exampleFormControlTextarea1" class="form-label">pozostało znaków:
                        {{ 269 - strlen($tweet) }}</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                        wire:model="tweet"></textarea>
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-danger" type="submit">Wyślij Tweet'a</button>
                </div>
            </form>
        </div>
    </div>
    @endif
    @endauth







</div>
