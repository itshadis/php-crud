<?php

  include "connection.php";

  $id = $_GET["id"];
  try {
    $query = "DELETE FROM pegawai WHERE id=$id";
    mysqli_query($connection, $query);

    header("Location:list.php");

  } catch (Exception $e) {
    echo "Gagal hapus data : " . $e->getMessage();
  }

?>