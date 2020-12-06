<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use illuminate\Support\Facades\Auth;

use App\Category;
use App\Post;

class HomeController extends Controller {
   
    public function index() {
        $posts = Post::where('active', 1)->orderBy('post_date', 'desc')->limit(3)->get();

        return view('home', [
            'posts' => $posts
        ]);
    }
    
	public function logout() {
		Auth::logout();
		return redirect()->route('home');
	}
}
