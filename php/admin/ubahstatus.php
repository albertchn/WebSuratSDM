<?php
$id = $_GET["id"];
$status = $_GET["status"];

if (!$id && !$status) {
      header("Location: anggota.php");
}

require '../functions.php';

if (ubah_status($id, $status) > 0) {
      echo "<script>
                alert('Status berhasil diubah!')
                // redirect versi javascript
                document.location.href = 'anggota.php';
          </script>";
} else {
      echo "<script>
                alert('Status gagal diubah!')
                // redirect versi javascript
                document.location.href = 'anggota.php';
          </script>";
      echo mysqli_error($conn);
}
