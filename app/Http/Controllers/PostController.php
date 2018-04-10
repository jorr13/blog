<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;

class PostController extends Controller
{
     

     
    public function index()
    {
        $posts = post::all();
	return $posts;
 
    }

    public function create()
    {
        //return view('create');
    }

    public function store(Request $request)
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
    }


    public function show(post $posts)
    {
        return $posts;
    }

    public function edit(post $posts)
    {
        //return view('edit');
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
    }


    public function destroy(post $posts)
    {
        $deleted = $posts->delete();
    }
}
 
