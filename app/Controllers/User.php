<?php

namespace App\Controllers;

use CodeIgniter\Controller;


class User extends BaseController
{
    public function carousel(): string
    {
        return view('User/carousel');
    }
    public function front(): string
    {
        return view('User/front');
    }
    public function userlogin(): string
    {   
        return view('User/userlogin');
    }
    public function userbooking(): string
    {   
        return view('User/userbooking');
    }
    public function userfpage(): string
    {   
        return view('User/userfpage');
    }
    public function user_rooms(): string
    {   
        return view('User/user_rooms');
    }


}

