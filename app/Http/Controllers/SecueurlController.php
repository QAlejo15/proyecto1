<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Like;
use App\Models\Comentario;
use Illuminate\Http\Request;
use App\Models\User;

class SecueurlController extends Controller
{


    public function __construct (){

        $this->middleware('auth');
    }
    public function index(User $user){

        //prueba
        $posts = Post::where("user_id",$user->id)->get();
        $posts = Post::where('user_id', $user->id)->paginate(3);//->get()
        //dd($posts);

        $users = User::all();
        #dd($user);
        return view('dashboard'
          ,['users' =>$users,
          'posts' => $posts,
          //'likes' => $likes
          ]  
        );
        //prueba

        return redirect()->route('dash',['user'=>auth()->user()->name]);

    }
   public function create(){
    //dd('creando nueva publicacion');
    return view ('publicaciones.create');
   }

   public function show(User $user,Post $post,){

    $comentarios = $post->comentario;
    $likes = $post->like;
    $likesCount = $post->likes->count();

   return view('publicaciones.show', compact('post','comentarios','likesCount'));
    
   return view('publicaciones.show' , [
    'post' => $post,
    'user'=>$user,
    'comentarios'=>$comentarios,
    'likes'=>$likes->count(),
   ]);
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



 public function destroy(Post $post)
 {
   // dd("Se eliminara el ", $post->id);
   $this->authorize('delete', $post);

   $post->delete();

   return redirect()->route('dash', auth()->user()->username);
 }
}