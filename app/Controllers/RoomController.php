<?php

namespace App\Controllers;

use App\Models\RoomModel;
use CodeIgniter\Controller;

class RoomController extends Controller
{
    public function index()
    {
        $model = new RoomModel();
        $rooms = $model->findAll();


        return view('rooms', ['rooms' => $rooms]);
    }
}
