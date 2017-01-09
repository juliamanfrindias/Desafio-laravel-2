@extends('frontend')

@section('content')

        <h1>Pesquisar</h1>
        <p>
         <a href="{{url('desafio')}}"><button>Voltar</button></a>
        </p>

       <p>Pesquise tags...</p>

            {!! Form::open(['url'=>'desafio/pesquisar/search', 'class'=>'navbar-form']) !!}
            {!! Form::text('nome1',null,['class'=>'form-control','placeholder'=>'nome da tag']) !!}
            <button type="submit">Pesquisar</button>
            {!! Form::close() !!}
 

        
        
@stop
