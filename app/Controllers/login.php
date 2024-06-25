<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Login extends Controller
{
    public function index()
    {
        $data['error'] = ''; // Initialize error variable

        // Load login form view
        return view('Home/loginform_view', $data);
    }

    public function process_login()
    {
        // Load necessary helpers and model
        helper(['form']); // Load the form helper here
        $model = new UserModel(); // Replace with your actual model name

        // Form validation rules
        $rules = [
            'email'    => 'required|valid_email',
            'password' => 'required'
        ];

        if ($this->validate($rules)) {
            // Validation successful, proceed with login check
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');

            // Check login credentials
            $user = $model->check_login($email, $password);
            $admin = $model->check_login($email, $password);

            if ($admin) {
                // Login successful, redirect based on user type
                if ($admin['user_type'] == 'admin') {
                    $this->setUserSession($admin); 
                    return redirect()->to(base_url('index')); // Redirect to admin dashboard
                }
                if($user){
                    
                } if ($user['user_type'] == 'user') {
                    $this->setUserSessions($user); 
                    return redirect()->to(base_url('user')); // Redirect to user dashboard
                }
            } else {
                // Login failed, show error message
                $data['error'] = 'Incorrect email or password!';
                return view('Home/loginform_view', $data);
            }
        } else {
            // Validation failed, reload login form with errors
            return view('Home/loginform_view', ['validation' => $this->validator]);
        }
    }


private function setUserSessions($user)
    {
        $data = [
            'user_id' => $user['id'],
            'user_email' => $user['email'],
            'user_name' => $user['name'], // Assuming 'name' field exists in your users table
            // Add other relevant user data as needed
            'logged_in' => true
        ];

        session()->set($data); // Store user data in session
    }

    private function setUserSession($admin)
    {
        $data = [
            'user_id' => $admin['id'],
            'user_email' => $admin['email'],
            'user_name' => $admin['name'], // Assuming 'name' field exists in your users table
            // Add other relevant user data as needed
            'logged_in' => true
        ];

        session()->set($data); // Store user data in session
    }
}
