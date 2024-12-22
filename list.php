<?php 
  include "connection.php";

  $query = mysqli_query($connection, "SELECT * FROM pegawai");
  $data = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD</title>
</head>
<body>
  <a href="add.php"><button>Tambah Data</button></a>
  <form action="search.php" method="get">
    <input type="text" name="search" placeholder="Ketikkan pencarian">
    <button type="submit">Cari</button>
  </form>
  <br>
  <table border="1">
    <thead>
      <tr>
        <td>No</td>
        <td>Nama</td>
        <td>Jenis Kelamin</td>
        <td>Alamat</td>
        <td>Akski</td>
      </tr>
    </thead>
    <?php foreach($data as $index => $pegawai) : ?>
      <tr>
        <td><?= $index+1; ?></td>
        <td><?= $pegawai["nama"]; ?></td>
        <td><?= $pegawai["jenis_kelamin"]; ?></td>
        <td><?= $pegawai["alamat"]; ?></td>
        <td>
          <a href="profil.php?id=<?= $pegawai["id"] ?>">
            <button>Detail</button>
          </a>
          <a href="edit.php?id=<?= $pegawai["id"] ?>">
            <button>Edit</button>
          </a>
          <a href="delete.php?id=<?= $pegawai["id"] ?>">
            <button>Hapus</button>
          </a>
        </td>
      </tr>
    <?php endforeach ?>
  </table>
</body>
</html>