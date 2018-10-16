<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meta extends Model
{    protected $table = "metas";
    
    protected $fillable = [
                            'id',
                            'author',
                            'keywords',
                            'description',
                            'created_at',
                            'updated_at'
                        ];
                        
}
