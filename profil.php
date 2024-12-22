<?php 

  include "connection.php";

  $id = $_GET["id"];
  $query = mysqli_query($connection, "SELECT * FROM pegawai WHERE id=$id");
  $data = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD Detail</title>
</head>
<body>
  <table>
    <tr>
      <td style="font-weight: bold;">Nama</td>
      <td>:</td>
      <td><?= $data["nama"] ?>
    </tr>
    <tr>
      <td style="font-weight: bold;">Jenis Kelamin</td>
      <td>:</td>
      <td><?= $data["jenis_kelamin"] ?>
    </tr>
    <tr>
      <td style="font-weight: bold;">Alamat</td>
      <td>:</td>
      <td><?= $data["alamat"] ?>
    </tr>
    <tr>
      <td style="font-weight: bold;">Tempat & Tanggal Lahir</td>
      <td>:</td>
      <td><?= $data["tempat_lahir"] .", ". date("d M Y", strtotime($data["tanggal_lahir"])) ?>
    </tr>
    <tr>
      <td style="font-weight: bold;">Nomor Telepon</td>
      <td>:</td>
      <td><?= $data["nomor_seluler"] ?>
    </tr>
    <tr>
      <td style="font-weight: bold;">Status</td>
      <td>:</td>
      <td><?= $data["status"] ?>
    </tr>
  </table>
  <a href="list.php">
    <button>Kembali</button>
  </a>
</body>
</html>