<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Game;

class GameController extends Controller
{
    // public function search(string $id): View
    // {
    //     return view("welcome", ["game" => $this->api_search($id)]);
    // }

    public function search(string $id)
    {
        return Game::findOr(Game::extract_id($id), ["*"], fn() => "{}");
    }
}
