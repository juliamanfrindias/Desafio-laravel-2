<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

use App\tarefas;
use App\tags;

class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = tags::all();
        return view('tags.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tags.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nome' => 'required',
           
        ]);
        
        $tag = new tags;
        $tag->nome = $request->nome;
        $tag->save();
        return redirect('desafio/tags')->with('message', 'Tag salvada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tagui = tags::find($id);

        $task = $tagui->tarefas;
        return view('tags.show', compact('tagui', 'task')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tagui = tags::find($id);
        return view('tags.edit', compact('tagui'));

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
         $this->validate($request, [
            'nome' => 'required',
            
        ]);
        
        $tagui = tags::find($id);
        $tagui->nome = $request->nome;
        $tagui->save();
        return redirect('desafio/tags')->with('message', 'Tag editada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tagui = tags::find($id);
        $tagui->delete();
        return redirect('desafio/tags')->with('message', 'Tag excluída com sucesso!');
    }
}
