<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Role;
use Alert;
class DashboardController extends Controller
{
    public function getDashboard()
    {
        
        notify()->flash('ok','success',[
        
            'timer' => 2000,
            
        ]);

        $user = User::all()->count();
        
        $role = Role::where('name','=','admin')->count();
        $subscriber = Role::where('name','=','subscriber')->count();
        
        return view('admin.pages.dashboard',compact('user','role','subscriber'));
    }

    
    
}
