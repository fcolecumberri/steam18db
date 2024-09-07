<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;
use App\Models\Game;

class Search extends Component
{
    public $game = null;
    public $app_id = "";

    public function search(): Game|null
    {
        $game = Game::findOr(
            Game::extract_id($this->app_id),
            ["*"],
            fn() => null
        );
        return $game;
    }

    /**
     * @return View
     */
    public function render(): View
    {
        $this->game = $this->search();
        //dd($this->game);
        return view("livewire.search", [
            "app_id" => $this->app_id,
            "game" => $this->game,
        ]);
    }
}
