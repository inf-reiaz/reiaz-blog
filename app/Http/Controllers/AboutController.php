<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\About;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $me = About::find(1);
        return view('admin.pages.me.index',compact('me'));
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
        $me = About::findOrFail($id);
        return view('admin.pages.me.edit',compact('me'));
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

// return $request->all();

        $me = About::findOrFail($id);
        $oldImage = $me->image;
        
      
        $this->validate($request, [
            'about'             => 'required'
          ]);
          
        $me_data = $request->all();
        
        if($request->hasFile('image'))
        {
            if($request->file('image')->isValid())
            {
                $location   = public_path().'/front/img/';
                if(!is_dir($location))
                {
                    mkdir($location, 0777, true);
                }
                $image_lg  = date('Ymdhis').'_me.'.$request->file('image')->getClientOriginalExtension();

                // Instantiate SimpleImage class
                $image = new \App\Http\Controllers\SimpleImage($request->file('image'));
                
                
                // Size:lg
                $image->best_fit(1200,600);
                $image->save($location.$image_lg);
                
                $me_data['image'] = $image_lg;
                
            }
                        
        }
        
        if ($oldImage !== $me->image) {
            $this->removeImage($oldImage);
        }
        
        
        $data = $me_data;
        $me = About::findOrFail($id)->update($data);
        
        if($me){
            return redirect(action('AboutController@index'))->withSuccess('Data is updated successfully.');
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
}
