<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactForm;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{
    public function index(){
        $posts = Post::query()->orderBy('created_at', 'DESC')->limit(3)->get();

        return view('welcome', [
            'posts'=> $posts
        ]);
    }

    public function contactForm (ContactFormRequest $request){
        Mail::to('fantasydarth031@gmail.com')->send(new ContactForm([
            'email'=>$request->email,
            'message'=>$request->message,
        ]));

        return redirect(route('contacts'));
    }

    public function showContactForm (){
        return view('contact_form');
    }
}
