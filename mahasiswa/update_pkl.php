<?php

require_once("db_login.php");

$nim = 24060111;
$status = $_POST["status"];
$nilai = $_POST["nilai"];

$ekstensi_diperbolehkan = array("svg", "png", "jpg", "pdf");
$nama = $_FILES['file']['name'];
$x = explode('.', $nama);
$ekstensi = strtolower(end($x));
$ukuran = $_FILES['file']['size'];
$file_tmp = $_FILES['file']['tmp_name'];

// Periksa apakah data udah ada di db
$query = "SELECT * FROM pkl WHERE nim = $nim";
$result = $db->query($query);

if (in_array($ekstensi, $ekstensi_diperbolehkan)) {
  if ($ukuran <= 1044070) {
    move_uploaded_file($file_tmp, "file/".$nama);
    
    if ($result->num_rows > 0) {
      // Data udah ada, berarti update
      $query = "UPDATE pkl SET status = '$status', nilai = '$nilai', upload_file = '$nama' WHERE nim = $nim";
      $result = $db->query($query);
    
      header("Location: inputpkl.php");
    } else {
      // Data blm ada, berarti insert
      $query = "INSERT INTO pkl (nim, status, nilai, upload_file) VALUES ($nim, '$status', '$nilai', '$nama')";
      $db->query($query);
    
      header("Location: inputpkl.php");
    }
  }
}
?>