<?php
require"../koneksi.php";
$id_pos = $_GET["id_lahir"];

if (hapuslahir($id_pos) > 0) {
  echo "
  <script>
    document.location.href = 'admin.php?page=dataibulahirkan'; 
  </script>
  ";
} else {
  echo "
  <script>
    alert('Data Gagal Dihapus');
    document.location.href = 'admin.php?page=dataibulahirkan'; 
  </script>
  ";
}
?>