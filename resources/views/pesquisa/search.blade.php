@extends('frontend')

@section('content')



        <h1>Resultado da pesquisa</h1>
        <p>
         <a href="{{url('desafio')}}"><button>Voltar</button></a>
        </p>

        
       <p>  
            @foreach($tags as $tag)

                   
            <a href="/desafio/pesquisar/{{$tag->id}}" > 
            {{ $tag->nome}} </a><br>

                    
                
            @endforeach
        
        </p>

     
@stop   

