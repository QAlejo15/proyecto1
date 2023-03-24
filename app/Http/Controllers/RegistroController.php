<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;


class RegistroController extends Controller
{
    public function index()
    {

        return view('registro');
    }


    public function store(Request $request)
    {
        $request->request->add(['username' => Str::slug($request->username)]);

        $validated = $request->validate([


            'name'=>'required|min:4',
            'username'=>'required|unique:users|min:3|max:15',
            'email' => 'required|unique:users|email|max:50',
            'password' => 'required|min:6|max:50',
            'carrera'=>'required|min:4',
            'semestre'=>'required|min:4',
            'celular'=>'required|min:10',
            'direccion'=>'required|min:4',
            'presentacion'=>'required|min:4',
            'genero'=>'required|min:4',

        ]);







       User::create([

            'name'=> $request->name,
            'username'=>Str::slug($request->username),
            'email'=> $request->email,
            'password'=> Hash::make($request->password),
            'carrera'=> $request->carrera,
            'semestre'=> $request->semestre,
            'celular'=> $request->celular,
            'direccion'=> $request->direccion,
            'presentacion'=> $request->presentacion,
            'genero'=> $request->genero,
            
            

       ]);

       auth()->attempt([

        'email'=> $request->email,
        'password' => $request->password,


       ]);
       return redirect()->route('sesion');

    }





}