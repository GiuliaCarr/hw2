<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Session;
use App\Models\User;

class HomeController extends BaseController
{
    public function home()
    {
        
        if (!Session::get('user_id')) {
            return redirect('login');
        }
        return view('home');
    }
    public function characters()
    {
       
        if (!Session::get('user_id')) {
            return redirect('login');
        }
        return view('characters');
    }
    public function twitch()
    {
        
        if (!Session::get('user_id')) {
            return redirect('login');
        }
        return view('twitch');
    }

    public function profile()
    {
        
        if (!Session::get('user_id')) {
            return redirect('login');
        }
        $user = User::find(Session::get('user_id'));
        return view('profile')->with('username',$user->username);
    }
    public function visions()
    {
       
        if (!Session::get('user_id')) {
            return redirect('login');
        }
        return view('visions');
    }

    public function about()
    {
        
        if (!Session::get('user_id')) {
            return redirect('login');
        }
        return view('about');
    }
}