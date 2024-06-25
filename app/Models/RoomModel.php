<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class RoomModel extends Model {

    protected $table = 'tbl_room'; // Name of your database table
    protected $primaryKey = 'id'; // Primary key of your table
    protected $allowedFields = ['ROOMNUM', 'CAPACITY', 'DESCRIPTION', 'IMAGE']; // Fields that can be filled

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
