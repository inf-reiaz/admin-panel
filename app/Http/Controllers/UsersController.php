<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Mails;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;
use Mail;
use Socialite;
use App\User;
use App\Role;

class UsersController extends Controller
{
    protected $limit = 30;
    
    public function getAllUser()
    {
        $counter = 1;
        $users = User::latestFirst()
                    ->simplePaginate($this->limit);
        return view('admin.pages.users.all-user',compact('users','counter'));
    }

    
    public function getBlockUsers($id)
    {
        // $user = User::find($id)->update(['active'=>0]);
        $user = User::find($id);
        
        if($user->active == 1){
            $user->update(['active'=>0]);
        }else{
            $user->update(['active'=>1]);
        }
        
        return back()->withSuccess('Successfully Block The User.');;
    }
    
    public function getBlockUser()
    {
        $blockuser = User::where('active', '=', 0)->get();
        return view('admin.pages.users.block-user',compact('blockuser'));
    }
    
    public function getSubscriber()
    {
        return view('admin.pages.users.subscriber');
    }
    public function getUserCreate()
    {
        return view('admin.pages.users.admin_user_create');
    }

    public function storeuser(Request $request)
    {
      
      $this->validate($request, [
        'firstname'                 => 'required',
        'lastname'                  => 'required',
        'username'                  => 'required',
        'email'                     => 'required|email',
        'country_id'                => 'required',
        'city_id'                   => 'required',
        'postcode'                  => 'required',
        'address'                   => 'required',
        'contact'                   => 'required',
        'about_me'                  => 'required',
      ]);
      
      
        $user_data              = $request->all();
        
                    
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
      
        
        
        
        $user = User::create($user_data);
    

        return redirect()->route('alluser')->with('success', 'New  User Is Created successfully!');
      
    }



    public function roleToPremissions($id)
    {
        $role = Role::find($id);
        return view('admin.pages.permissions.set_permissions',compact('role'));
    }


    public function postSetPremissions(Request $request)
    {
        
        Role::find($request->role_id)->permissions()->detach();
        
        Role::find($request->role_id)->permissions()->attach($request->permissions);


        return back()->withSuccess('Request processed successfully');
        
    }
    
    
}
