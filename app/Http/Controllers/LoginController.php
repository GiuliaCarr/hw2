<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use Session;

class LoginController extends BaseController
{
    public function register()
    {
        if (Session::get('user_id')) {
            return redirect('home');
        }
        return view('register');
    }

    public function login()
    {
        if (Session::get('user_id')) {
            return redirect('home');
        }
        return view('login');
    }

    public function do_login()
    {
        if (request('username') == 0 || request('password') == 0) {
            $errors[] = 'Please fill out all fields';
            return redirect('login')
                ->withInput()
                ->withErrors($errors);
        }
        $user = User::where('username', request('username'))->first();
        if (!$user || !password_verify(request('password'), $user->password)) {
            $errors = ['Wrong username &/or password '];
            return redirect('login')
                ->withInput()
                ->withErrors($errors);
        }

       
        Session::put('user_id', $user->id);
        return redirect('home');
    }

    public function checkuser($username)
    {
        return ['exists' => User::where('username', $username)->first() !== null];
    }
    public function checkemail($email)
    {
        return ['exists' => User::where('email', $email)->first() !== null];
    }
    public function do_register()
    {
        $errors = [];
        if (request('username') == 0 && request('password') == 0 && request('name') == 0 && request('surname') == 0 && request('email') == 0) {
            $errors[] = 'Please fill out all fields';
            return redirect('register')
                ->withErrors($errors);
        }
       
        if (empty(request('name'))) {
            $errors['name'] = 'Please insert your name';
        }
        if (empty(request('surname'))) {
            $errors['surname'] = 'Please insert your surname';
        }


        if (empty(request('username'))) {
            $errors['username'] = 'Please insert your username';
        } else if (strlen(request('username')) >= 16) {
            $errors['username'] = 'Username is too long. Max 15 letters.';
        } else if (User::where('username', request('username'))->first() !== null) {
            $errors['username'] = 'This username is already used';
        }else if (!preg_match('/^[a-zA-Z0-9_]{1,15}$/', request('username'))){
            $errors['username'] = 'Username is not valid. Use letters, numbers & underscore only.';

        }



        if (empty(request('email'))) {
            $errors['email'] = 'Please insert your email';
        } else if (User::where('email', request('email'))->first() !== null) {
            $errors['email'] = 'This email is already used';
        } else if (!filter_var(request('email'), FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'This email is not valid. Make sure to write something like example@example.com';
        }

        
        if (strlen(request('password')) < 8) {
            $errors['password'] = 'Password is too short';
        }
       
        if (request('password') != request('confirm_password')) {
            $errors['password'] = 'Passwords do not match';
        }

        
        if (empty(request('allow'))) {
            $errors['allow'] = 'Please accept our terms and conditions.';
        }
       
        if (count($errors) > 0) {
            return redirect('register')
                ->withInput()
                ->withErrors($errors);
        }
       
        $user = new User;
        $user->name = request('name');
        $user->surname = request('surname');
        $user->username = request('username');
        $user->email = request('email');
        $user->password = password_hash(request('password'), PASSWORD_BCRYPT);


        $user->save();
       
        Session::put('user_id', $user->id);
       
        return redirect('home');
    }

    public function logout()
    {
        Session::flush();
        return redirect('login');
    }
}