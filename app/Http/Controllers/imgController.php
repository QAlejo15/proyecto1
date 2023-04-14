<?php

namespace App\Http\Controllers;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Str;

class imgController extends Controller
{
    //
    public function store(Request $request){
       // return "ruta funcionando";

        $imagen = $request->file('file');


        $nombreImagen = Str::uuid() . "." . $imagen->extension();
        $imagenServidor = Image::make($imagen);
        $imagenServidor->fit(800,800);
        $imagenPath = public_path('uploads'). '/' . $nombreImagen;

        #Image::make($imagen)->save($imagenPath);
        $imagenServidor->save($imagenPath);
       return response()->json(['imagen' => $nombreImagen]);

    }
}
