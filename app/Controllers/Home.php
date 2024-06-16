<?php

namespace App\Controllers;

use CodeIgniter\Controller;


class Home extends BaseController
{
    public function loginform(): string
    {
        return view('Home/loginform');
    }
    public function user(): string
    {
        return view('Home/user');
    }
    public function indexs(): string
    {
        return view('Home/indexs');
    }
    public function register_form(): string
    {
        return view('Home/register_form');
    }
    public function no(): string
    {
        return view('Home/no');
    }
    public function editcott(): string
    {
        return view('Home/editcott');
    }
    public function edituser(): string
    {
        return view('Home/edituser');
    }
    public function logout(): string
    {
        return view('Home/logout');
    }
    public function verify(): string
    {
        return view('Home/verify');
    }
    



    
    
}



