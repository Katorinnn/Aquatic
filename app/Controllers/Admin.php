<?php

namespace App\Controllers;

use CodeIgniter\Controller;


class Admin extends BaseController
{ 
    public function index(): string
    {
        return view('Admin/index');
    }
    public function bookings(): string
    {
        return view('Admin/bookings');
    }
    public function bookingstaff(): string
    {
        return view('Admin/bookingstaff');
    }
    public function cottages(): string
    {
        return view('Admin/cottages');
    }
    public function rooms(): string
    {
        return view('Admin/rooms');
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

}