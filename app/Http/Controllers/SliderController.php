<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::orderBy('id', 'desc')->paginate(10);
        
        return view('admin.pages.slider.index',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.slider.create');
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
            'title'             => 'required',
            'image'             => 'required'
          ]);
          
        
        $slider_data              = $request->all();
        
        if($request->hasFile('image'))
        {
            if($request->file('image')->isValid())
            {
                $location   = public_path().'/front/img/';
                if(!is_dir($location))
                {
                    mkdir($location, 0777, true);
                }
                
                $image_lg  = date('Ymdhis').'_lg.'.$request->file('image')->getClientOriginalExtension();

                // Instantiate SimpleImage class
                $image = new \App\Http\Controllers\SimpleImage($request->file('image'));
                
                
                // Size:lg
                $image->best_fit(1200,600);
                $image->save($location.$image_lg);
                
                $slider_data['image'] = $image_lg;
                
            }
                        
        }
        
        $data = $slider_data;
        
        
        $new_slider = Slider::create($data);
        

        if($new_slider){
            return redirect(action('SliderController@index'))->withSuccess('Congrates! New Slider is add successfully.');
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
        
        $slider = Slider::findOrFail($id);
        return view('admin.pages.slider.edit',compact('slider'));
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

        $slider     = Slider::findOrFail($id);
        $oldImage = $slider->image;
        
      
        $this->validate($request, [
            'title'             => 'required'
          ]);
          
        $slider_data = $request->all();
        
        if($request->hasFile('image'))
        {
            if($request->file('image')->isValid())
            {
                $location   = public_path().'/front/img/';
                if(!is_dir($location))
                {
                    mkdir($location, 0777, true);
                }
                $image_lg  = date('Ymdhis').'_lg.'.$request->file('image')->getClientOriginalExtension();

                // Instantiate SimpleImage class
                $image = new \App\Http\Controllers\SimpleImage($request->file('image'));
                
                
                // Size:lg
                $image->best_fit(1200,600);
                $image->save($location.$image_lg);
                
                $slider_data['image'] = $image_lg;
                
            }
                        
        }
        
        if ($oldImage !== $slider->image) {
            $this->removeImage($oldImage);
        }
        
        
        $data = $slider_data;
        $post = Slider::findOrFail($id)->update($data);
        
        if($data){
            return redirect(action('SliderController@index'))->withSuccess('Slide is updated successfully.');
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
        $slider = Slider::find($id);
        $slider->delete();
        $this->removeImage($slider->image);
        return redirect(action('SliderController@index'))->withSuccess('Slider was delete successfully.');
    }
    
    
    private function removeImage($image)
    {
        if ( ! empty($image) )
        {
            $imagePath     = '/public/front/img/' . $image;
            $ext           = substr(strrchr($image, '.'), 1);

            if ( file_exists($imagePath) ) unlink($imagePath);
        }
    }
    
}
