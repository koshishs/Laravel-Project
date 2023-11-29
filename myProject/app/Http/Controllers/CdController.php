<?php

namespace App\Http\Controllers;

use App\Models\CdProduct;
use Illuminate\Http\Request;

class CdController extends Controller
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
        $cds = CdProduct::query('cd_products')->latest()->filter(request(['user_search']))->paginate(8);
        return view('cd',['cds'=>$cds]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cdadd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $result = CdProduct::create($this->validateCds($request));
        if ($result) {
            return redirect()->route('cd');
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
    public function edit(CdProduct $cd)
    {
        return view('modifycd',[
                'id'=>$cd->id,
                'title'=>$cd->title,
                'firstname'=>$cd->firstname,
                'band'=>$cd->band,
                'price'=>$cd->price,
                'playlength'=>$cd->playlength
                ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CdProduct $cd)
    {
        $result = $cd->update($this->validateCds($request));
        if ($result) {
            return redirect()->route('cd');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(CdProduct $cd)
    {
        $result = $cd->delete();
        if ($result) {
            return redirect()->route('cd');
        }

    }
    public function validateCds(Request $request){
        return $this->validate($request,
            [
            'title'=>'required',
            'firstname'=>'nullable',
            'band'=>'required',
            'price'=>'required|numeric',
            'playlength'=>'required|numeric'
        ]);
    }
}
