<?php

namespace App\Controllers;

class Articles extends BaseController
{
    public function loginform(): string
    {
        return view('Articles/loginform');
    }
}
