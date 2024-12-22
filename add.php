<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD Tambah Data</title>
</head>
<body>
  <form action="insert.php" method="post">
    <div>
      <label for="nama">Nama</label>
      <input type="text" name="nama">
    </div>

    <div>
      <label for="jenis_kelamin">Jenis Kelamin</label>
      <select name="jenis_kelamin">
        <option value="Laki-Laki">Laki-Laki</option>
        <option value="Perempuan">Perempuan</option>
      </select>
    </div>
    
    <div>
      <label for="alamat">Alamat</label>
      <textarea name="alamat"> </textarea>
    </div>
    
    <div>
      <label for="tempat_lahir">Tempat Lahir</label>
      <input type="text" name="tempat_lahir">
    </div>
    
    <div>
      <label for="tanggal_lahir">Tanggal Lahir</label>
      <input type="date" name="tanggal_lahir">
    </div>
    
    <div>
      <label for="nomor_seluler">Nomor Telepon</label>
      <input type="text" name="nomor_seluler">
    </div>
    
    <div>
      <label for="status">Status</label>
      <select name="status">
        <option value="Lajang">Lajang</option>
        <option value="Kawin">Kawin</option>
      </select>
    </div>
    
    <button type="submit">Simpan</button>
  </form>
  
  <a href="list.php"><button>Kembali</button></a>
</body>
</html>