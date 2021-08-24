<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Review;

class ListaController extends Controller
{
    

    public function index(){


        $reviews = Review::all();

        return view('lista', compact('reviews'));

    }



    public function show($id){


        $review = Review::find($id);

        return view('mostrar', compact('review'));

}

public function delete($id){


    Review::destroy($id);

    return redirect()->route('lista.index');




}
}
