<?php

namespace App\Http\Controllers\User;

use App\Models\Game;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserGameController extends Controller
{
    public function index()
    {
        $games = Game::get();
        return view('user.games.index', compact('games'));
    }
    
    public function show(Game $game)
    {
        return view('user.games.show', compact('game'));
    }
}
