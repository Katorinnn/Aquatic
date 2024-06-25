<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\Files\UploadedFile;
use App\Models\CottageModel;

class Add extends Controller {

    public function index() {
        $data = [];
        helper(['form']); // Load form helper

        echo view('no', $data); // Pass $data to the view 'no'
    }

    public function add_data() {
        helper(['form']); // Load form and url helpers

        // Validate form input
        $rules = [
            'COTTAGENUM' => 'required',
            'CAPACITY' => 'required',
            'DESCRIPTION' => 'required',
            'file' => 'uploaded[file]|max_size[file,2048]|is_image[file]'
        ];

        if ($this->validate($rules)) {
            // Get form data
            $data['COTTAGENUM'] = $this->request->getPost('COTTAGENUM');
            $data['CAPACITY'] = $this->request->getPost('CAPACITY');
            $data['DESCRIPTION'] = $this->request->getPost('DESCRIPTION');

            // Handle file upload
            $file = $this->request->getFile('file');

            if ($file->isValid() && !$file->hasMoved()) {
                // Move uploaded file to desired directory
                $newName = $file->getRandomName();
                $file->move('C:/Users/Acer/Documents/Aquatic-Resort BBBBBBBBBUP/public', $newName);

                $data['IMAGE'] = $newName; // Store filename in $data array for database insertion

                // Insert data into database using CottageModel
                $model = new CottageModel(); // Create an instance of CottageModel
                $model->insertData($data); // Call insertData method to insert data

                // Optionally, you can redirect with a success message
                return redirect()->to(base_url('cottages'))->with('success', 'Data added successfully.');

            } else {
                $data['error'] = $file->getErrorString(); // Store error message in $data array
            }
        } else {
            $data['validation'] = $this->validator; // Store validation errors in $data array
        }

        // If validation or upload fails, load view with errors
        echo view('no', $data);
    }
}
