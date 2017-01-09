@extends('frontend')

@section('content')

        <h1>Desafio Vitta</h1>
        <br>

                     


        <h2>
            <a href="{{url('desafio/tarefas')}}">Tarefas</a>
            |
            <a href="{{url('desafio/tags')}}">Tags</a>
            |
            <a href="{{url('desafio/pesquisar')}}">Pesquisar</a>
        </h2>

@stop
