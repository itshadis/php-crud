<?php

  try {
    $connection = mysqli_connect("localhost", "root", "root", "kepegawaian");
  } catch (Exception $e) {
    echo "Gagal : " . $e->getMessage();
  }

?>