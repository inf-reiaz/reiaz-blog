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
        $setting = Setting::find(1);
        
        return view('admin.pages.settings.index',compact('setting'));
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
        $setting = Setting::find(1);
        
        return view('admin.pages.settings.index',compact('setting'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $setting = Setting::find(1);
        
        return view('admin.pages.settings.edit',compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

// return $request->all();

        $oldlogo = Setting::findOrFail($id);
        $oldImage = $oldlogo->image;
        
      
        $this->validate($request, [
            'website_name'          => 'required',
            'website_author'        => 'required',
            'website_description'   => 'required',
            'website_keywords'      => 'required',
            'facebook'              => 'required',
            'twitter'               => 'required',
            'google_plus'           => 'required',
            'linkedin'              => 'required',
            'github'                => 'required',
            'instagram'             => 'required',
            'youtube'               => 'required',
          ]);
          
        $settings_data = $request->all();
        
        if($request->hasFile('website_logo'))
        {
            if($request->file('website_logo')->isValid())
            {
                $location   = public_path().'/front/img/';
                if(!is_dir($location))
                {
                    mkdir($location, 0777, true);
                }
                $image_lg  = date('Ymdhis').'_settings.'.$request->file('website_logo')->getClientOriginalExtension();

                // Instantiate SimpleImage class
                $image = new \App\Http\Controllers\SimpleImage($request->file('website_logo'));
                
                
                // Size:lg
                $image->best_fit(1200,600);
                $image->save($location.$image_lg);
                
                $settings_data['website_logo'] = $image_lg;
                
            }
                        
        }
        
        
        $data = $settings_data;
        
        $setting = Setting::findOrFail($id)->update($data);
        
        if($setting){
            return redirect(action('SettingsController@index'))->withSuccess('Data is updated successfully.');
        } else{
            return back()->withErrors('Please check the required data.')->withInput();
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
            $imagePath     = '/public/front/images/' . $image;
            $ext           = substr(strrchr($image, '.'), 1);

            if ( file_exists($imagePath) ) unlink($imagePath);
        }
    }
    
}
