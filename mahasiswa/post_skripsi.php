<?php
require_once('../db_login.php');

$status_skripsi = $_POST['status_skripsi'];
$nilai_skripsi = $_POST['nilai_skripsi'];
$lama_studi = $_POST['lama_studi'];
$tanggal_sidang = $_POST['tanggal_sidang'];
$nim = $_POST['nim'];

$query = "SELECT * FROM pkl WHERE nim = $nim";
$result = $db->query($query);
if ($result->num_rows > 0) {
    $query = "UPDATE skripsi SET status_skripsi = '$status_skripsi', nilai = '$nilai_skripsi', lama_studi = '$lama_studi', tanggal_sidang = '$tanggal_sidang' WHERE nim = $nim";
    $result = $db->query($query);
    if (!$result) {
        die("Could not query the database: <br>" . $db->error . "<br>Query: " . $query);
    }
    echo '<script>alert("Data berhasil diupdate");</script>';
    echo '<script>window.location.href = "input_skripsi.php";</script>';
} else {
    $query = "INSERT INTO skripsi (nim, status_skripsi, nilai, lama_studi, tanggal_sidang) VALUES ('$nim', '$status_skripsi', '$nilai_skripsi', '$lama_studi', '$tanggal_sidang')";
    $result = $db->query($query);
    if (!$result) {
        die("Could not query the database: <br>" . $db->error . "<br>Query: " . $query);
    }
    echo '<script>alert("Data berhasil ditambahkan");</script>';
    echo '<script>window.location.href = "input_skripsi.php";</script>';
}

if (!$result) {
    die("Could not query the database: <br>" . $db->error . "<br>Query: " . $query);
}
?>