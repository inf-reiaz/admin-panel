<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $table = "permissions";
    
    protected $fillable = ['id', 'name', 'created_at', 'updated_at'];
    
    public function roles()
    {
        
        return $this->belongsToMany('\App\Role');
        
    }
    
 
    public function scopeIsPermission($query,$routename,$roleid)
    {
        return $query->join('permission_role',"permissions.id","=","permission_role.permission_id")->where(["permissions.name"=>$routename,"permission_role.role_id"=>$roleid])->count()>0;
        
    }
    
}


