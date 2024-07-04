<?php

require_once '../../admin/controller/db_connect.php';

if ($_POST['action'] == 'create') {

    $gambar = uniqid() . '_' . basename($_FILES["photo_url"]["name"]);

    if (!empty($gambar)) {
        $ekstensi_diperbolehkan    = array('png', 'jpg');
        $x = explode('.', $gambar);
        $ekstensi = strtolower(end($x));
        if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
            $targetFilePath = '../../admin/public/img/galeri/' . $gambar;
            move_uploaded_file($_FILES["photo_url"]["tmp_name"], $targetFilePath);
            $tanggal_upload = date('Y-m-d');
            $type = $_POST['type'];
            $sql = "insert into photos (photo_url,upload_date,type) values ('$gambar','$tanggal_upload','$type')";

            $simpan = $conn->query($sql);


            header("Location:../".$_POST['link']);
        }
    }
}

if ($_POST['action'] == 'delete') {
    $baseDir = '../public/img/galeri/';
    $fileName = basename($_POST['name']);
    $targetFilePath = $baseDir . $fileName;
    
    if (is_file($targetFilePath)) {
        if (unlink($targetFilePath)) {
            $conn->query("DELETE FROM photos WHERE photo_id = ".$_POST['id']);
            header("Location:../foto/crud_fotoDashboards.php");
        }
    }
    $conn->query("DELETE FROM photos WHERE photo_id = ".$_POST['id']);
    header("Location:../".$_POST['link']);
}

header("Location:../".$_POST['link']);
