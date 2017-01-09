<?php



namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

use App\tarefas;
use App\tags;

class TarefasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tarefas = tarefas::all();
        $tags = tags::all();
        return view('tarefas.index', compact('tarefas'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = tags::pluck('nome', 'id');
       
		
        return view('tarefas.create', compact('tags'));
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
        
        $tarefa = new tarefas;
        $tarefa->nome = $request->nome;
        
        $tarefa->save();
        $tarefa->tags()->attach($request->input('tag_list'));
        return redirect('desafio/tarefas')->with('message', 'Tarefa salvada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tarefa = tarefas::find($id);
        $tag = $tarefa->tags;
         
        return view('tarefas.show', compact('tarefa', 'tag'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task = tarefas::find($id);
        $tags = tags::all();
        return view('tarefas.edit', compact('task', 'tags'));
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
        
        $task = tarefas::find($id);
        $task->nome = $request->nome;
        $task->save();
        return redirect('desafio/tarefas')->with('message', 'Tarefa editada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = tarefas::find($id);
        $task->delete();
        return redirect('desafio/tarefas')->with('message', 'Tarefa excluída com sucesso!');
    }
}
