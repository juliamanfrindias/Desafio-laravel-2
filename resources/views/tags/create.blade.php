@extends('frontend')

@section('content')

        <h1>Criar novas tags</h1>

      
        <form class="" action="/desafio/tags" method="POST">
        <input type="text" name="nome" value="" placeholder="Nome">
        {{ ($errors->has('nome')) ? $errors->first('nome') : '' }}<br>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="submit" name="name" value="Salvar">
         </form>
         


@stop
