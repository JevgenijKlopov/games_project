<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\StoreUserGameRequest;
use App\Http\Requests\UpdateUserGameRequest;


class UserGamesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function add(Game $game)
    {
        $status = 0;
        if(!(DB::table('game_user')->where('game_id',$game->id)->exists())){
            $game->users()->attach([Auth::user()->id]);
            $status = 1;
        }
        $total = Game::cartPriceTotal(Auth::user()->games);
        return response()->json(['status' => $status , 'data'=> ['total' => $total, 'game'=>$game]])->getContent();
    }
    

     public function destroy(Game $game)
     {
        Auth::user()->games()->detach([$game->id]);
        $total = Game::cartPriceTotal(Auth::user()->games);
        return response()->json(['success' => true, 'data'=> ['total' => $total, 'game'=>$game]])->getContent();
     }

}
