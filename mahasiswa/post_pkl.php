<?php
require_once('../db_login.php');

$status_pkl = $_POST['status_pkl'];
$nilai_pkl = $_POST['nilai_pkl'];
$nim = $_POST['nim'];

$query = "SELECT * FROM pkl WHERE nim = $nim";
$result = $db->query($query);
if ($result->num_rows > 0) {
    $query = "UPDATE pkl SET status_pkl = '$status_pkl', nilai = '$nilai_pkl' WHERE nim = $nim";
    $result = $db->query($query);
    if (!$result) {
        die("Could not query the database: <br>" . $db->error . "<br>Query: " . $query);
    }
    echo '<script>alert("Data berhasil diupdate");</script>';
    echo '<script>window.location.href = "inputpkl.php";</script>';
} else {
    $query = "INSERT INTO pkl (nim, status_pkl, nilai) VALUES ('$nim', '$status_pkl', '$nilai_pkl')";
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