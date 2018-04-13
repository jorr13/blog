<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;

class PostController extends Controller
{
     

     
    public function index($id=null)
    {
        if ($id==null) {
            $posts = post::all();
            return response()->json($posts, 200);
        }else{
            $posts = post::find($id);
            return response()->json($posts, 200);
        }
    }

   

    public function create(Request $request)
    {
       
        $this->validate($request, [
          'titulo' => 'required|unique:posts|max:255',
          'contenido' => 'required',
          'timestamp' => 'required'
        ]);
        
        $posts = post::create([
            'titulo' => $request->get('titulo'),
            'contenido' => $request->get('contenido'),
            'timestamp' => $request->get('timestamp')
        ]);
        return response()->json($posts, 200);
    }

    public function update(Request $request, post $posts)
    {
      
        $this->validate($request, [
		  'titulo' => 'required|unique:posts|max:255',
          'contenido' => 'required',
          'timestamp' => 'required'
        ]);

        $posts->fill($request->all());
        
        $updated = $posts->save();

        return response()->json($updated, 200);
    }


    public function destroy(post $posts)
    {
        $posts = post::find($id);
        $deleted = $posts->delete();
        return "se ha elimnado con exito";
    }
}
 
