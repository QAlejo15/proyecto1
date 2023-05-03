<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Comentario;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class ComentarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Post $post, Request $request)
    {

      


        $request->validate([
            'contenido' => 'required',
            'post_id' => 'required',
        ]);

        $comentario = Comentario::create([
            'contenido' => $request->contenido,
            'user_id' => auth()->user()->id,
            'post_id' => $request->post_id,
        ]);

        return redirect()->back()->with('success', 'El comentario se agrego con exito');
        
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comentario $comentario, $id)
    {
        $comentario = Comentario::findOrFail($id);
        $comentario->delete();

        //$comentario=Comentario::where('id',$id)->first();
       // $comentario->delete();
        return redirect()->back();

       // return redirect()->back()->with('success', 'Comentario elimando con exito');
    }
}
