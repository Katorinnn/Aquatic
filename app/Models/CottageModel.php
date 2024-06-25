<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class CottageModel extends Model {

    protected $table = 'tbl_cottage'; // Name of your database table
    protected $primaryKey = 'id'; // Primary key of your table
    protected $allowedFields = ['COTTAGENUM', 'CAPACITY', 'DESCRIPTION', 'IMAGE']; // Fields that can be filled

    // Database connection instance
    public function __construct()
    {
        parent::__construct();
        $this->db = db_connect(); // Default database connection
    }

    // Insert data into database
    public function insertData($data) {
        $this->db->table($this->table)->insert($data);
    }

    // Optionally, define other methods for querying or manipulating data
}
