<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user_form';

    public function check_login($email, $password)
    {
        $user = $this->where('email', $email)->first();
        $admin = $this->where('email', $email)->first();
        if ($user && md5($password) === $user['password']) {
            return $user;
        }else  if ($admin && md5($password) === $admin['password']) {
            return $admin;
        }
        return false;
    }

    public function getUserByEmail($email)
    {
        return $this->where('email', $email)->first(); // Fetch user by email
    }
    
}


