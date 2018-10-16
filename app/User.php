<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = "users";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     

    protected $fillable = [
        'firstname',
        'lastname',
        'username',
        'email',
        'password',
        'role',
        'country_id',
        'city_id',
        'postcode',
        'address',
        'gender',
        'parmanent_address',
        'active',
        'contact',
        'user_photo',
        'about_me',
        'created_by',
        'updated_by'
    ];
    
    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function setPasswordAttribute($value)
    {
        
        $this->attributes['password'] = bcrypt($value);
        
    }
    
    
    public function scopeLatestFirst($query)
    {
        return $query->orderBy('created_at', 'desc');
    }


    
    public function roles()
    {
        
        return $this->belongsTo('\App\Role','role');
        
    }
        
    
    public function contry()
    {
        
        return $this->belongsTo('\App\Country', 'country_id');
        
    }
    
    public function city()
    {
        
        return $this->belongsTo('\App\City', 'city_id');
        
    }



    
}
