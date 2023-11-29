<?php

namespace App\Http\Controllers;

use App\Models\BookProduct;
use Illuminate\Http\Request;

class BookController extends Controller
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
        $books = BookProduct::query('book_products')->latest()->filter(request(['user_search']))->paginate(8);

        return view('book',['books'=>$books]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bookadd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $result = BookProduct::create($this->validateBooks($request));
        if ($result) {
            return redirect()->route('book');
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
    public function edit(BookProduct $book)
    {
        return view('modifybook',[
        'id'=>$book->id,
        'title'=>$book->title,
        'firstname'=>$book->firstname,
        'surname'=>$book->surname,
        'price'=>$book->price,
        'pages'=>$book->pages
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BookProduct $book)
    {
        $result = $book->update($this->validateBooks($request));
        if ($result) {
            return redirect()->route('book');
        }  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(BookProduct $book)
    {
        $result = $book->delete();
        if ($result) {
            return redirect()->route('book');
        }
    }

    public function validateBooks(Request $request){
        return $this->validate($request,
            [
            'title'=>'required',
            'firstname'=>'nullable',
            'surname'=>'required',
            'price'=>'required|numeric',
            'pages'=>'required|numeric'
        ]);
    }
}

