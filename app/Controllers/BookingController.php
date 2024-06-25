<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class BookingController extends Controller
{
    public function index()
    {
        return view('userbooking');
    }

    public function saveBooking()
    {
        // Get input data
        $checkIn = $this->request->getPost('check_in');
        $checkOut = $this->request->getPost('check_out');

        // Insert data into database
        $db = db_connect();
        $builder = $db->table('user_datepicker');

        $data = [
            'check_in' => $checkIn,
            'check_out' => $checkOut,
        ];

        $builder->insert($data);
        
        return redirect()->to(base_url('user_rooms'));
    }
}
