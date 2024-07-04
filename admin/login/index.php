<?php
session_start();
require_once '../controller/db_connect.php';

if(isset($_POST)){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
    
    if ($stmt) {
        // Bind parameters
        $stmt->bind_param("ss", $username, $password);

    
        $stmt->execute();

       
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $data = $result->fetch_assoc();
            $_SESSION['data'] = $data;

        
            header('location: ../index.php');
            exit;
        }
    }
}
header('location: ../../index.php');

