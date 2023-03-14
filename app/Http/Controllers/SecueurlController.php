<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SecueurlController extends Controller
{


    public function __construct (){

        $this->middleware('auth');
    }
    public function index(User $user){

        $users = User::all();
        return view('dashboard',[
            'users' =>$users
        ]);

        

    }
   

    
}
