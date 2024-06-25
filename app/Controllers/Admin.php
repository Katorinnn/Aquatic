<?php

namespace App\Controllers;

use CodeIgniter\Controller;


class Admin extends BaseController
{ 
    public function index(): string
    {
        return view('header'). view('Admin/index');
    }
    public function bookings(): string
    {
        return view('header'). view('Admin/bookings');
    }
    public function bookingstaff(): string
    {
        return view('header'). view('Admin/bookingstaff');
    }
    public function cottages(): string
    {
        return view('header'). view('Admin/cottages');
    }
    public function rooms(): string
    {
        return view('header'). view('Admin/rooms');
    }
    public function yes(): string
    {
        return view('Admin/yes');
    }
    public function no(): string
    {
        return view('Admin/no');
    }
    public function function(): string
    {
        return view('Admin/function');
    }
    public function fumction(): string
    {
        return view('Admin/fumction');
    }
    public function loginform_view(): string
    {
        return view('Admin/loginform_view');
    }
    public function register_form(): string
    {
        return view('Admin/register_form');
    }
    public function conf(): string
    {
        return view('Admin/conf');
    }

}