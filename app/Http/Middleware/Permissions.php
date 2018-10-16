<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\Role;
use App\Permission;
use Session;
class Permissions

{
    /**
    * Handle an incoming request.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \Closure  $next
    * @return mixed
    */
    public function handle($request, Closure $next)
    {

        $currentUser = $request->user();

        // $userRoleId = $currentUser->roles->name;
        
        $routename = $request->route()->getActionName();
        
        $roleid = $currentUser->roles->id;
        
        $permission = Permission::IsPermission($routename,$roleid);
        
        // dd($currentActionName);
        
        if($permission == true){
          return $next($request);
        }else{
          return redirect()->route('logout')->withErrors('authentication failed');
        }
        
    }
}
