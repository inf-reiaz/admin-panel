<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    
    protected $table = "settings";
    
    protected $fillable = [
                            'id',
                            'app_name',
                            'app_author',
                            'app_type',
                            'app_vishon',
                            'address',
                            'postcode',
                            'city',
                            'country',
                            'contact',
                            'mail',
                            'logo',
                            'created_at',
                            'updated_at'
                        ];
    
    
}
