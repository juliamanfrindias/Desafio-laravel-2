<!DOCTYPE html>
<html lang="en">
    <head>

        <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <link href="http://ivaynberg.github.com/select2/select2-3.3.2/select2.css" rel="stylesheet" type="text/css" />
        <script src="http://ivaynberg.github.com/select2/select2-3.3.2/select2.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       
        <style>

        #tag_list{ width:500px;}
        #nome{ width:500px;}

        </style> 
        

        <title>Desafio Vitta</title>

        <link href="/css/app.css" rel="stylesheet">

        
    </head>
    <body>

        <div class="container">
                <h1>Criar novas tarefas</h1>

              
                {!! Form::model($task = new \App\tarefas, ['url' => '/desafio/tarefas']) !!}
	
			        <div class="form-group">
			            {!! Form::label('nome', 'Nome da tarefa:') !!}
			            {!! Form::text('nome', null, ['class' => 'form-control']) !!}

                        <br>

                        {!! Form::label('tag_list', 'Tags:') !!}
			            <br>
                        {!! Form::select('tag_list[]', $tags, null, ['id' => 'tag_list', 'class' => 'form-control',  'multiple' => 'multiple']) !!}
		
                        <br><br>
			            {!! Form::submit('Salvar') !!}
                       
	
		            </div>
                    <script type="text/javascript">
			            $('select#tag_list.form-control').select2({
				            placeholder: 'Escolha uma Tag'
			            });
		            </script>
                    
	
	            {!! Form::close() !!}

                
               
                <!-- <script src="//code.jquery.com/jquery.js"></script>
	            <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	            <script src="//cdn.ckeditor.com/4.6.0/standard/ckeditor.js"></script>
	            <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/js/select2.min.js"></script>  -->
	

        </div>
    </body>
</html>
