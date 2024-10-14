<?php
function pagination_nav($page, $games)
{
?>
<nav class="pagination" role="navigation" aria-label="pagination">
    @if($page > 1)
        <a class="pagination-previous" wire:click="prev">Previous</a>
    @else
        <a></a>
    @endif
    @if($games->hasMorePages())
        <a class="pagination-next" wire:click="next">Next</a>
    @endif
</nav>
<?php
}
?>

<div>
    @php(pagination_nav($page, $games))
    <br/>
    <div class="fixed-grid has-2-cols-mobile has-3-cols-tablet has-4-cols-desktop has-6-cols-widescreen has-8-cols-fullhd">
        <div class="grid">
            @foreach ($games as $game)
                <div class="cell">
                    <div class="card">
                        <figure class="image is-2by1">
                            <img
                                src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/{{$game->id}}/header.jpg"
                                alt=""
                            />
                            </figure>
                        <footer class="card-footer">
                        <a href="https://store.steampowered.com/app/{{$game->id}}/" class="card-footer-item" target="_blank" rel="noopener noreferrer">Steam</a>
                        <a href="{{$game->patch}}" class="card-footer-item" target="_blank" rel="noopener noreferrer">Patch</a>
                        </footer>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <br/>
    @php(pagination_nav($page, $games))
</div>
