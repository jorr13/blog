<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;

class PostController extends Controller
{
     
   public function index($id = null)
    {
        if($id == null){
            $posts = post::all();
            return view('postsindex', compact('posts'));
            //return response()->json($posts, 200);
        }
        
        else
        {
            $posts = post::find($id);

            if($posts == null)
            {
                 return response()->json(
            [
                "status" => 0,
                "descripcion" => "No se hallaron resultados"
            ], 200);
            } 
       return view('postsindex', compact('posts'));
        //return response()->json($posts, 200);
        } 
       
    }
   
    public function ircrear()
    {
        return view('create');
    }

    public function create(Request $request)
    {
       
        $this->validate($request, [
          'titulo' => 'required|unique:posts|max:255',
          'contenido' => 'required'
        ]);
        
        $posts = post::create([
            'titulo' => $request->get('titulo'),
            'contenido' => $request->get('contenido')
        ]);
        return response()->json($posts, 200);
    }

    public function update(Request $request, post $posts)
    {
      
        $this->validate($request, [
		  'titulo' => 'required|unique:posts|max:255',
          'contenido' => 'required'
        ]);

        $posts->fill($request->all());
        
        $updated = $posts->save();

        return response()->json($updated, 200);
    }


    public function delete($id)
    {
        $posts = post::find($id);
        $deleted = $posts->delete();
        return "se ha elimnado con exito";
    }
}
 
 
