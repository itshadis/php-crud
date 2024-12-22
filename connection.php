<?php

  try {
    $db = new PDO("mysql:host=localhost;dbname=kepegawaian", "root", "root");
  } catch (Exception $e) {
    echo "Gagal : " . $e->getMessage();
  }

?>