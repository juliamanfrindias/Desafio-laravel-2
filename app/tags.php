<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tags extends Model
{
    //protected $table = 'tags';

    public function tarefas()
    {
        return $this->belongsToMany('App\tarefas', 'tarefas_tags', 'tag_id', 'tarefa_id')->withTimestamps();
    }
}
