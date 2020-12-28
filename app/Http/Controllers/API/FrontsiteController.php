<?php

namespace App\Http\Controllers\Api;

use App\Contact;
use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;


class FrontsiteController extends Controller
{
    public function home(){
        return view('frontsite.home',[
            'posts' => Post::all(),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post $post
     * @return \Illuminate\Http\Response
     */

    public function single(Post $post){
        $posts = Post::all();
        return view('frontsite.single',compact('posts'))->with('post',$post);
    }

    public function contact(){
        return view('frontsite.contact');
    }

    public function create() {

        return view('frontsite.contact');
    }

    public function senddetils($id){
        $posts = Post::all();
        $post = Post::find($id);
        return view('frontsite.detils', compact('post','posts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request){
        $request->validate([
            'name' => 'required|max:30',
            'email' => 'required|email',
            'subject' =>'required',
            'message' =>'required',

        ]);

        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->ip = 'Gaza';

        $contact->save();

        return  back()->with('success', 'Send The Message');
    }

}
