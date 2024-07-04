<?php

// Include file koneksi ke database
include "db_connect.php";

// Create - Tambahkan reservasi baru
if (isset($_POST['submit'])) {
    $customer_name = $_POST['customer_name'];
    $customer_contact = $_POST['customer_contact'];
    $reservation_date = $_POST['reservation_date'];
    $reservation_time = $_POST['reservation_time'];
    $num_of_people = $_POST['num_of_people'];

    $sql = "INSERT INTO reservations (customer_name, customer_contact, reservation_date, reservation_time, num_of_people,reservation_status) 
            VALUES ('$customer_name', '$customer_contact', '$reservation_date', '$reservation_time', '$num_of_people','pending')";
    var_dump($sql);
    if ($conn->query($sql) === TRUE) {
        header("Location: ../../index.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Read - Baca data reservasi 
function getReservations()
{
    global $conn;
    $sql = "SELECT * FROM reservations";
    return $conn->query($sql);
}

// Update - Ubah data reservasi 
if (isset($_POST['update'])) {
}

// Delete - Hapus data reservasi 
if (isset($_POST['delete'])) {
}
