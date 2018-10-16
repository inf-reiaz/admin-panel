<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Setting;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings = Setting::find(1);
        return view('admin.pages.settings.index',compact('settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $settings = Setting::find(1);
        return view('admin.pages.settings.edit',compact('settings'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $setting = Setting::find($id);
        
        $oldlogo = $setting->logo;
        
        $this->validate($request, [
            'app_name'         => 'required',
            'app_author'       => 'required',
            'app_type'         => 'required',
            'app_vishon'       => 'required',
            'address'          => 'required',
            'postcode'         => 'required',
            'city'             => 'required',
            'country'          => 'required',
            'contact'          => 'required'
         ]);
          
        $data = $request->all();
        
        if($request->hasFile('logo_input'))
        {
            if($request->file('logo_input')->isValid())
            {
                $location   = public_path().'/img/settings/';
                if(!is_dir($location))
                {
                    mkdir($location, 0777, true);
                }
                $image_lg  = date('Ymdhis').'_logo.'.$request->file('logo_input')->getClientOriginalExtension();
                // Instantiate SimpleImage class
                $image = new \App\Http\Controllers\SimpleImage($request->file('logo_input'));
                // Size:lg
                $image->best_fit(1200,600);
                $image->save($location.$image_lg);
                $request['logo'] = '/public/img/settings/'.$image_lg;
            }
        }
          
        
        $setting->update($request->all());
        
        if ($oldlogo !== $setting->logo) {
            $this->removeImage($oldlogo);
        }
        
        if($setting->update($data))
        {
            return redirect()->action('SettingsController@index')->withSuccess('Data has been updated successfully.');
        } else{
            return back()->withInput()->withErrors('Failed to store data. Please check data and retry.');
        }
        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    

    private function removeImage($image)
    {
        if ( ! empty($image) )
        {
            if ( file_exists($image) ) unlink($image);
        }
    }
    
}
