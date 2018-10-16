<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Mails;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;
use Mail;
use Socialite;
use App\User;

class AccessController extends Controller
{
    // signup functions 
    public function signup()
    {
        return view('admin.pages.users.registration');
    }
    
    
    public function postSignup(Request $request)
    {
        $this->validate($request, [
            'user_image_input'        => 'required',
            'firstname'              => 'required',
            'lastname'               => 'required',
            'username'               => 'required',
            'email'                   => 'required|email|unique:users',
            'password'                => 'required|min:4',
            'contact'            => 'required|min:4'
          ]);
        
        $user_data              = $request->all();
        
        
        if($request->hasFile('user_image_input'))
        {
            if($request->file('user_image_input')->isValid())
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
                $image_lg  = date('Ymdhis').'_lg.'.$request->file('user_image_input')->getClientOriginalExtension();
                $image_md  = date('Ymdhis').'_md.'.$request->file('user_image_input')->getClientOriginalExtension();
                $image_sm  = date('Ymdhis').'_sm.'.$request->file('user_image_input')->getClientOriginalExtension();
                $image_xs  = date('Ymdhis').'_xs.'.$request->file('user_image_input')->getClientOriginalExtension();
                
                // Instantiate SimpleImage class
                $image = new \App\Http\Controllers\SimpleImage($request->file('user_image_input'));
                
                
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
        
        if(User::create($user_data))
        {
            
            return redirect(route('login'))->withMessage('Congrates! Signup has been sucessful. Please login.');
                
            
        } else{
            
            return back()->withErrors('Failed to signup. Please check the required data.')->withInput();
            
        }
        
        
    }
    // end signup functions 
    
        // login functions 
    public function login()
    {
        return view('admin.pages.users.login');
    }
    
    
    public function postLogin(Request $request)
    {
        $user   = User::where('email',$request->input('email'))->first();
        
        
        if($user)
        {
            
            if($user->active == 0)
            {
                return back()->withErrors('Your account is de-active. Please contact admin for help.');
            }
            
        }
        
        if(Auth::attempt(['email'=>$request->input('email'),'password'=>$request->input('password')]))
        {
            return redirect()->route('dashboard');
        } else{
            
            return back()->withErrors('authentication failed')->withInput();
            
        }

    }
    
    // end login functions 
    
    
    public function forgotPassword()
    {
        return view('admin.pages.users.forgot-password');
    }
    
    
    public function PasswordRecovery()
    {
        return view('admin.pages.users.forgot-recover');
    }
    
    
    
    public function logout()
    {
        
        Auth::logout();
        
        return redirect()->route('login');
    }
    
    
    
}
