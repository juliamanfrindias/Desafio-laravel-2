@extends('frontend')

@section('content')

        <h1>Tag pesquisada</h1>

 
        <p><h3>Tag: </h3>{{ $tagui->nome}}  <p>
  
        <p>
              
        @if (count($task) < 1)
		    <p><b>Nenhuma tarefa associada!</b></p>
	    @else       
            <h3>Tarefas associadas:</h3>  
            @foreach($task as $tar)

                  {{ $tar->nome}}<br>
                
            @endforeach
        @endif
        </p>

       <br>
        <a href="{{url('desafio/pesquisar')}}"><button>Voltar</button></a>
        
@stop
