<?php

namespace App\Http\Controllers;

use App\Models\GameProduct;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $games = GameProduct::query('game_products')->latest()->filter(request(['user_search']))->paginate(8);

        return view('game',['games'=>$games]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gameadd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $result = GameProduct::create($this->validateGames($request));
        if ($result) {
            return redirect()->route('game');
        }
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(GameProduct $game)
    {
   
        return view('modifygame',[
                'id'=>$game->id,
                'title'=>$game->title,
                'Console'=>$game->Console,
                'price'=>$game->price,
                ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GameProduct $game)
    {
        $result = $game->update($this->validategames($request));
        if ($result) {
            return redirect()->route('game');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(GameProduct $game)
    {
        $result = $game->delete();
        if ($result) {
            return redirect()->route('game');
        }

    }
    public function validategames(Request $request){
     
        return $this->validate($request,
            [
            'title'=>'required',
            'Console'=>'required',
            'price'=>'required|numeric',
           
        ]);
    }
}
