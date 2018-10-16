<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use DB;
class MyProfile extends Controller
{
    public function getProfile($id)
    {
        $user = User::findOrFail($id);
        return view('admin.pages.users.show',compact('user'));
    }
    
    public function getEditProfile($id)
    {
        $user = User::findOrFail($id);
        return view('admin.pages.users.edit',compact('user'));
    }
    
    public function postProfileUpdate(Request $request,$id)
    {
        // return $request->roles;
      $this->validate($request, [
        'firstname'            => 'required',
        'lastname'             => 'required',
        'username'              => 'required',
        'email'                 => 'required|email',
        'contact'          => 'required'
      ]);
      
              
        if($request->hasFile('user_photo_input'))
        {
            if($request->file('user_photo_input')->isValid())
            {
                
                
                /**
                 * SimpleImage can't make dir. It returns error if directory does not exist.
                 * Make directory (if it dows not exists) before putting file in it
                 */
                $location   = public_path().'/admin/users/';
                if(!is_dir($location))
                {
                    
                    mkdir($location, 0777, true);
                                    
                }
                
                
                /**
                *
                * Prepare names for file at different sizes
                * 
                */
                $image_lg  = date('Ymdhis').'_lg.'.$request->file('user_photo_input')->getClientOriginalExtension();
                $image_md  = date('Ymdhis').'_md.'.$request->file('user_photo_input')->getClientOriginalExtension();
                $image_sm  = date('Ymdhis').'_sm.'.$request->file('user_photo_input')->getClientOriginalExtension();
                $image_xs  = date('Ymdhis').'_xs.'.$request->file('user_photo_input')->getClientOriginalExtension();
                
                // Instantiate SimpleImage class
                $image = new \App\Http\Controllers\SimpleImage($request->file('user_photo_input'));
                
                
                // Size:lg
                $image->best_fit(1200,600);
                $image->save($location.$image_lg);
                
                // Size:md
                $image->best_fit(640,400);
                $image->save($location.$image_md);
                
                // Size:sm
                $image->best_fit(320,225);
                $image->save($location.$image_sm);
                
                // Size:xs
                $image->best_fit(100,75);
                $image->save($location.$image_xs);
                
                $user_data['user_photo'] = '/public/admin/users/'.$image_lg;
                
            }
                        
        }
      
        $user_data = $request->all();
        
        
        
        $current_user = User::findOrFail($id)->update($user_data);
    

        return redirect()->route('myprofile',$id)->with('success', 'Your user was Updated successfully!');
    }
    
    
    public function changePassword()
    {
        return view('admin.pages.users.change-password');
    }
    
    
    public function updatePassword(Request $request)
    {
        
            
        if($request->input('newpass') == $request->input('repeatpass'))
        {
            
            if( Auth::attempt([ 'email'=> auth()->user()->email, 'password'=>$request->input('oldpass') ]))
            {
                
                if(\DB::table('users')->where('id',auth()->user()->id)->update(['password'=>bcrypt($request->input('newpass'))]))
                {

                    return redirect()->route('myprofile',Auth::user()->id)->withSuccess('Password updated successfully.');
                    
                } else{
                    
                    return back()->withErrors('Failed to update password.')->withInput();
                    
                }
                
            } else{
                
                return back()->withErrors('Current password did not match.');
                
            }
            
        } else{
                
            return back()->withErrors('New Password and Repeat Password did not match.');
            
        }
            
        
        
    }
    
    
    
}
