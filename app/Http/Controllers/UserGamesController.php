<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\UserGame;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreUserGameRequest;
use App\Http\Requests\UpdateUserGameRequest;

class UserGamesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function add(Game $game)
    {
        $game->users()->attach([Auth::user()->id]);
        return redirect()->route('user.games.index');
    }
     public function destroy(Game $game)
     {
        Auth::user()->games()->detach([$game->id]);
        return response()->json(['success' => true]);
        
        
     }

}
