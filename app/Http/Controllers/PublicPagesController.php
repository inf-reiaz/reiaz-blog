<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use App\Category;

use App\Tag;

use App\Contact;

class PublicPagesController extends Controller
{
    
    public function getIndex()
    {
        
        $new_post = Post::latest()->first();
        $programing_one = Category::find(1)->posts()->where('is_home','=',1)->first();
        $programings = Category::find(1)->posts()->take(6)->latest()->get();
        
        $hobby_one = Category::find(29)->posts()->where('is_home','=',1)->first();
        $hobbys = Category::find(29)->posts()->take(6)->get();
        
        $seince = Category::find(41)->posts()->take(6)->get();
        $seince_one = Category::find(41)->posts()->latest()->first();
        // return $seince_one;
        
        return view('front.pages.index',compact('new_post','programings','programing_one','hobbys','hobby_one','seince','seince_one'));
    }
    
    public function getCategory($slug)
    {
        // return $slug;
        $category = Category::where('slug','=',$slug)->first();
        // return $category;
        $ctgposts = Category::find($category->id)->posts()->orderBy('id', 'ASC')->paginate(10);
        return view('front.pages.category',compact('ctgposts','category'));
    }
    
    public function getTag($slug)
    {
        // return $slug;
        $tag = Tag::where('slug','=',$slug)->first();
        $tagposts = Tag::find($tag->id)->posts()->paginate(10);
        return view('front.pages.tagpost',compact('tag','tagposts'));
    }
    
    public function getSinglePost($slug)
    {
        
        $post = Post::where('slug','=',$slug)->first();
        // return $post;
        
			foreach($post->categories->take(1) as $ctg){
			    
			}
// 		$seince = Category::find($ctg->id);
		
        $randmon = Category::find($ctg->id)->posts()->inRandomOrder()->first();
        
        $relatedpost = Category::find($ctg->id)->posts()->take(6)->get();
// 		return $randmon;
		
        $post->increment('view_count');
        
        return view('front.pages.single',compact('post','relatedpost','randmon'));
    }
    
    
    
    public function getContact()
    {
        return view('front.pages.contact');
    }
    
    public function postContact(Request $request)
    {
            $this->validate($request, [
                'name' => 'required',
                'organization' => 'required',
                'email' => 'required',
                'phone' => 'required'
            ]);
    
            $contact = Contact::create($request->all());
            // $this->sendEmail($contact);
            
    }
    
    
    
    private function sendEmail($contact){
        Mail::send('front.pages.confirmation',['user'=>$contact],function($m) use ($contact){
            $m->to($contact->email);
            $m->subject('From Confirmation');
        });
    }
    
}
