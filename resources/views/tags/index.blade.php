@extends('frontend')

@section('content')


        <h1>Tags</h1>

        <p>
        <a href="{{url('desafio/tags/create')}}"><button>Criar</button></a>
        <a href="{{url('desafio')}}"><button>Voltar</button></a>
        </p>
        
       
    <table class="table">
             @foreach($tags as $tag)
             <tr>

                <td><b> {{ $tag->nome}} </b> </td>
                <td><a href="/desafio/tags/{{$tag->id}}"><button>Ver</button></a></td>
                <td><a href="/desafio/tags/{{$tag->id}}/edit"><button>Editar</button></a></td>

    
                <td>
                <form action="/desafio/tags/{{$tag->id }}" method="POST">
                    <input type="hidden" name="_method" value="delete">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" name="name" value="Apagar" >
                </form>
                </td>
               </tr>
              
                    
            @endforeach
    </table>


@stop

