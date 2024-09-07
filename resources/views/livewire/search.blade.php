<div>
    <section class="section">
        <div class="field">
            <label class="label">App Id</label>
            <div class="control">
                <input
                    class="input"
                    type="text"
                    placeholder="https://store.steampowered.com/app/<App ID>/<Other stuff...>"
                    wire:model.live.debounce.500ms="app_id"
                />
            </div>
        </div>
        @if($app_id != "")
            <div class="block my-6">
                <h1 class="title my-3">{{$app_id}}</h1>
                <p>
                @if($game == null or !$game->patch)
                    Not known game patch for game {{$app_id}}. Maybe it exists, but it's not in the database.
                @else
                    Link: <a href={{$game->patch}}>{{$game->patch}}</a>
                @endif
                </p>
            </div>
        @endif
    </section>
</div>
