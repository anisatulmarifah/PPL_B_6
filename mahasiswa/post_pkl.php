<?php
require_once('../db_login.php');

$status = $_POST['status'];
$nilai_pkl = $_POST['nilai_pkl'];
$nim = $_POST['nim'];

$query = "SELECT * FROM pkl WHERE nim = $nim";
$result = $db->query($query);
if ($result->num_rows > 0) {
    $query = "UPDATE pkl SET status = '$status', nilai = '$nilai_pkl' WHERE nim = $nim";
    $result = $db->query($query);
    if (!$result) {
        die("Could not query the database: <br>" . $db->error . "<br>Query: " . $query);
    }
    echo '<script>alert("Data berhasil diupdate");</script>';
    echo '<script>window.location.href = "inputpkl.php";</script>';
} else {
    $query = "INSERT INTO pkl (nim, status, nilai) VALUES ('$nim', '$status', '$nilai_pkl')";
    $result = $db->query($query);
    if (!$result) {
        die("Could not query the database: <br>" . $db->error . "<br>Query: " . $query);
    }
    echo '<script>alert("Data berhasil ditambahkan");</script>';
    echo '<script>window.location.href = "inputpkl.php";</script>';
}

if (!$result) {
    die("Could not query the database: <br>" . $db->error . "<br>Query: " . $query);
}
?>