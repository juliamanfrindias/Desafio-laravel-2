<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Desafio Vitta</title>
         <style>

       
         #comp{ width:500px;}

        </style> 

        <link href="/css/app.css" rel="stylesheet">

    </head>
    <body>

        <div class="container">
            <h1>Editar esta tarefa</h1>

            <p><h3>Tarefa: </h3>{{$task->nome}}  <p>

        
            <form action="/desafio/tarefas/{{$task->id}}" method="POST">
                <input id="comp" type="text" name="nome" value="{{ $task->nome}}" placeholder="Nome">
                {{ ($errors->has('nome')) ? $errors->first('nome') : '' }}<br>
                <input type="hidden" name="_method" value="put">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" name="name" value="Salvar">
            </form>
            
            <br>
            <a href="{{url('desafio/tarefas')}}"><button>Voltar</button></a>
         

        </div>
    </body>
</html>
