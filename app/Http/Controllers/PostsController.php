<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\Category;

use App\Tag;

use App\Post;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(10);
        
        return view('admin.pages.post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.post.create');
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
            'slug'              => 'required|unique:posts',
            'image'             => 'required'
          ]);
        
        $post_data              = $request->all();
        
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
                
                $post_data['image'] = $image_lg;
                
            }
                        
        }
        
        
        $post_data['user_id'] = Auth::user()->id;
        
        $data = $post_data;
        
        
        $new_post = Post::create($data);
        
        $new_post->categories()->sync($request->category_id, false);
        $new_post->tags()->sync($request->tag_id, false);
        

        if($data){
            return redirect(action('PostsController@index'))->withSuccess('Congrates! New Category is add successfully.');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $post = Post::findOrFail($id);
        return view('admin.pages.post.edit',compact('post'));
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

// return $request->all();


        $post     = Post::findOrFail($id);
        $oldImage = $post->image;
        
        
        $this->validate($request, [
            'title'             => 'required',
            'slug'              => 'required',
            
          ]);
      
        $post_data = $request->all();
        
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
                
                $post_data['image'] = $image_lg;
                
            }
                        
        }
        
        if ($oldImage !== $post->image) {
            $this->removeImage($oldImage);
        }
        
        $post_data['user_id'] = Auth::user()->id;
        
        $data = $post_data;
        
        
        $post = Post::findOrFail($id)->update($data);
        
        
            
        Post::find($id)->categories()->sync($request->category_id);
        Post::find($id)->tags()->sync($request->tag_id);
        
        if($data){
            return redirect(action('PostsController@index'))->withSuccess('Congrates! Post is updated successfully.');
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
        $post = Post::find($id);
        $post->categories()->detach();
        $post->tags()->detach();
        $post->delete();
        $this->removeImage($post->image);
        return redirect(action('PostsController@index'))->withSuccess('Congrates! Post was delete successfully.');
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
