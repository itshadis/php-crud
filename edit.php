<?php 

  include "connection.php";

  $id = $_GET["id"];
  $query = $db->query("SELECT * FROM pegawai WHERE id=$id");
  $data = $query->fetch();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD Edit Data</title>
</head>
<body>
  <form action="update.php" method="post">
    <input type="hidden" name="id" value="<?= $id ?>">

    <div>
      <label for="nama">Nama</label>
      <input type="text" name="nama" value="<?= $data["nama"] ?>">
    </div>

    <div>
      <label for="jenis_kelamin">Jenis Kelamin</label>
      <select name="jenis_kelamin">
        <option value="Laki-Laki" <?php if($data["jenis_kelamin"] === "Laki-laki") echo "selected" ?>>Laki-Laki</option>
        <option value="Perempuan" <?php if($data["jenis_kelamin"] === "Perempuan") echo "selected" ?>>Perempuan</option>
      </select>
    </div>
    
    <div>
      <label for="alamat">Alamat</label>
      <textarea name="alamat"><?= $data["alamat"] ?></textarea>
    </div>
    
    <div>
      <label for="tempat_lahir">Tempat Lahir</label>
      <input type="text" name="tempat_lahir" value="<?= $data["tempat_lahir"] ?>">
    </div>
    
    <div>
      <label for="tanggal_lahir">Tanggal Lahir</label>
      <input type="date" name="tanggal_lahir" value="<?= $data["tanggal_lahir"] ?>">
    </div>
    
    <div>
      <label for="nomor_seluler">Nomor Telepon</label>
      <input type="text" name="nomor_seluler" value="<?= $data["nomor_seluler"] ?>">
    </div>
    
    <div>
      <label for="status">Status</label>
      <select name="status">
        <option value="Lajang" <?php if($data["status"] === "Lajang") echo "selected" ?>>Lajang</option>
        <option value="Kawin" <?php if($data["status"] === "kawin") echo "selected" ?>>Kawin</option>
      </select>
    </div>
    
    <button type="submit">Ubah Data</button>
  </form>
  
  <a href="list.php"><button>Kembali</button></a>
</body>
</html>