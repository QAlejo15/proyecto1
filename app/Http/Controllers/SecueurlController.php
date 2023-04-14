<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\User;

class SecueurlController extends Controller
{


    public function __construct (){

        $this->middleware('auth');
    }
    public function index(User $user){

        $posts = Post::where('user_id', $user->id)->get();
        //dd($posts);

        $users = User::all();
        #dd($user);
        return view('dashboard'
          ,['users' =>$users,
          'posts' => $posts
          ]  
        );

        

    }
   public function create(){
    //dd('creando nueva publicacion');
    return view ('publicaciones.create');
   }

   public function store(Request $request){
    //dd('creando publicacion');
    //return view ('publicaciones.store');

    $this->validate($request,[
        'titulo'=> 'required|min:4|max:50',
        'descripcion'=>'required|min:5|max:200',
        
    ]);

    $post = Post::create([
       'titulo' => $request->titulo,
       'descripcion'=> $request->descripcion,
       'imagen'=> $request->imagen,
       'user_id'=> auth()->user()->id
    ]);

    auth()->user()->posts()->save($post);

    return redirect()->route('dash',['user' => auth()->user()->username]);
 }

    
}
