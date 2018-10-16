<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.pages.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.category.create');
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
            'name'            => 'required',
            'slug'            => 'required'
        ]);
        
        
        $data = $request->all();
        
        $new_ctg = Category::create($data);

        if($new_ctg){
            return redirect(route('category.index'))->withSuccess('Congrates! New Category is add successfully.');
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
        $ctg = Category::findOrFail($id);
        return view('admin.pages.category.edit',compact('ctg'));
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
      
        $data = $request->all();
        
        $category = Category::findOrFail($id)->update($data);
    
        if($category){
            return redirect(route('category.index'))->withSuccess('Congrates! Category name is Successfully Update .');
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
