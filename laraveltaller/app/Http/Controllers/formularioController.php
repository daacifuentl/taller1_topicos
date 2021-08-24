<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class formularioController extends Controller

{
    public function formulariocreacion (){

        return view('formulariocreacion');

    }

    public function guardarformulario (Request $request){

        $this-> validate($request,[
        
        'ide' => 'required',
        'idd' => 'required'
        
        ]);

  //      echo   "Elemento creado satisfactoriamente";


     Review::create([
            
        'comentario' => request('ide'),
        'estrellas' => request('idd'),

    ]);

    return back()->withSuccess('Elemento creado satisfactoriamente');






    }


}