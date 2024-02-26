<?php

include 'koneksi.php';

$id = $_GET['id'];

$query = $conn->query("DELETE FROM kriteria WHERE id='$id'");

if(!$query) {
      echo 
      "<script>
      alert('Data gagal dihapus');
      window.location.href = 'kriteria.php';
      </script>";
} else {
      echo "<script>
      alert('Data berhasil dihapus');
      window.location.href = 'kriteria.php';
      </script>";
}