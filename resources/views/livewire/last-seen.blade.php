<div>

    <div>
        <div class="card text-center">
            <div class="card-header text-light bg-primary">
                {{ __('interface.lastseen') }}
            </div>
            <div class="card-body">

              @foreach($users as $key => $user)
              <img src="{{ $user->profile_image_url }}" alt="{{ $user->screen_name }}" class="img-thumbnail rounded-pill">
              @endforeach
            </div>
          </div>

    </div>



</div>
