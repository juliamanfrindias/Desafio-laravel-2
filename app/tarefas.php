<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tarefas extends Model
{
    //protected $table = 'tarefas';

    public function tags()
    {
        return $this->belongsToMany('App\tags', 'tarefas_tags', 'tarefa_id', 'tag_id')->withTimestamps();        
    }
    
}
