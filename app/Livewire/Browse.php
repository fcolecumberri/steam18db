<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;
use App\Models\Game;

class Browse extends Component
{
    public $page = 1;

    public function next()
    {
        $this->page += 1;
    }

    public function prev()
    {
        $this->page -= 1;
    }

    /**
     * @return View
     */
    public function render(): View
    {
        return view("livewire.browse", [
            "games" => Game::orderBy("id")->simplePaginate(
                24,
                pageName: "games",
                page: $this->page
            ),
        ]);
    }
}
