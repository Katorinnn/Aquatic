<?php
// delete_guest.php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Handle delete operation
    $inputJSON = file_get_contents('php://input');
    $input = json_decode($inputJSON, true);

    if (isset($input['id'])) {
        $id = $input['id'];

        // Perform delete operation in your database
        // Example using MySQLi:
        // $query = "DELETE FROM guests WHERE id = $id";
        // mysqli_query($conn, $query);

        // Example response for AJAX handling
        $response = array('message' => 'Guest deleted successfully');
        echo json_encode($response);
        exit;
    } else {
        $response = array('message' => 'Invalid request');
        echo json_encode($response);
        exit;
    }
} else {
    $response = array('message' => 'Method not allowed');
    echo json_encode($response);
    exit;
}
?>
