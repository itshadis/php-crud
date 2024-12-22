<?php 

  include "connection.php";
  
  $nama = $_POST["nama"];
  $jenis_kelamin = $_POST["jenis_kelamin"];
  $alamat = $_POST["alamat"];
  $tempat_lahir = $_POST["tempat_lahir"];
  $tanggal_lahir = $_POST["tanggal_lahir"];
  $nomor_seluler = $_POST["nomor_seluler"];
  $status = $_POST["status"];
  
  try {
    $query = "INSERT INTO pegawai (nama, jenis_kelamin, alamat, tempat_lahir, tanggal_lahir, nomor_seluler, status)
                  VALUES ('$nama', '$jenis_kelamin', '$alamat', '$tempat_lahir', '$tanggal_lahir', '$nomor_seluler', '$status')
                 ";

    mysqli_query($connection, $query);
    header("Location:list.php");

  } catch (Exception $e) {
    echo "Gagal simpan data" . $e->getMessage();
  }
?>