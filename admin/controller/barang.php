<?php
include "db_connect.php";
// Create
if (isset($_POST['create'])) {
    $nama_barang = $_POST['nama_barang'];
    $tipe = $_POST['tipe'];
    $quantity = $_POST['quantity'];
    $harga = $_POST['harga'];
    $tanggal_masuk = $_POST['tanggal_masuk'];
    $tanggal_keluar = $_POST['tanggal_keluar'];
    $entry_by = $_POST['entry_by'];
    $exit_by = $_POST['exit_by'];
    $total_cost = $_POST['total_cost'];

    $sql = "INSERT INTO inventory (nama_barang, tipe, quantity, harga, tanggal_masuk, tanggal_keluar, entry_by, exit_by, total_cost) 
            VALUES ('$nama_barang', '$tipe', $quantity, $harga, '$tanggal_masuk', '$tanggal_keluar', '$entry_by', '$exit_by', $total_cost)";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../barang/crud_barang.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Read
$sql = "SELECT * FROM inventory";
$result = $conn->query($sql);

// Update
if (isset($_POST['update'])) {
    $inventory_id = $_POST['inventory_id'];
    $nama_barang = $_POST['nama_barang'];
    $tipe = $_POST['tipe'];
    $quantity = $_POST['quantity'];
    $harga = $_POST['harga'];
    $tanggal_masuk = $_POST['tanggal_masuk'];
    $tanggal_keluar = $_POST['tanggal_keluar'];
    $entry_by = $_POST['entry_by'];
    $exit_by = $_POST['exit_by'];
    $total_cost = $_POST['total_cost'];

    $sql = "UPDATE inventory SET 
            nama_barang='$nama_barang', tipe='$tipe', quantity=$quantity, harga=$harga, tanggal_masuk='$tanggal_masuk', 
            tanggal_keluar='$tanggal_keluar', entry_by='$entry_by', exit_by='$exit_by', total_cost=$total_cost 
            WHERE inventory_id=$inventory_id";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../barang/crud_barang.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Delete
if (isset($_POST['delete'])) {
    $inventory_id = $_POST['inventory_id'];

    $sql = "DELETE FROM inventory WHERE inventory_id=$inventory_id";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../barang/crud_barang.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

function getInventory()
{
    global $conn;
    $sql = "select * from inventory";
    return $conn->query($sql);
}
// Nilai enum
function getEnum($table, $column)
{
    global $conn;
    $query = "SHOW COLUMNS FROM $table LIKE '$column'";
    $result = $conn->query($query);
    $row = $result->fetch_assoc();
    $enumValues = substr($row['Type'], 5, -1);
    $enumValues = str_replace("'", "", $enumValues);
    return explode(",", $enumValues);
}
