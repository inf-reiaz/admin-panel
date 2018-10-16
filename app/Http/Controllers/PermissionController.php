<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Permission;
class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permissions = Permission::all();
        return view('admin.pages.permissions.index',compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.permissions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request, [
            'name'            => 'required'
        ]);
        
        
        $role_data = $request->all();
        
        $new_role = Permission::create($role_data);

        if($new_role){
            return redirect(route('permissions.index'))->withSuccess('Congrates! New Permissions is add successfully.');
        } else{
            return back()->withErrors('Please check the required data.')->withInput();
        }
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $permission = Permission::findOrFail($id);
        return view('admin.pages.permissions.show',compact('permission'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $permission = Permission::findOrFail($id);
        return view('admin.pages.permissions.edit',compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * 
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->validate($request, [
        'name'            => 'required'
      ]);
      
        $role_data = $request->all();
        
        $current_role = Permission::findOrFail($id)->update($role_data);
    
        if($current_role){
            return redirect(route('permissions.index'))->withSuccess('Congrates! Role is Update Successfully.');
        } else{
            return back()->withErrors('Please check the required data.')->withInput();
        }
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
