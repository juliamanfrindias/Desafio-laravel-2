@extends('frontend')

@section('content')

    <body>
        <h1>Tarefas</h1>
        <p>
        <a href="{{url('desafio/tarefas/create')}}"><button>Criar</button></a>
         <a href="{{url('desafio')}}"><button>Voltar</button></a>
        </p>

       

            <table class="table">
                @foreach($tarefas as $tasks)

                <tr>
                   <td><b> {{ $tasks->nome}}</b></td>
                   <td> <a href="/desafio/tarefas/{{$tasks->id}}"><button>Ver</button></a></td>
                   <td> <a href="/desafio/tarefas/{{$tasks->id}}/edit"><button>Editar</button></a></td>
                   <td>
                          <form action="/desafio/tarefas/{{$tasks->id }}" method="POST">
                            <input type="hidden" name="_method" value="delete">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="submit" name="name" value="Apagar" >
                        </form>
                  </td>
                </tr>
                @endforeach
            </table>

       
@stop

