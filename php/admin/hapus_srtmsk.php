<?php
require '../functions.php';

if (!isset($_GET["id"]) && !isset($_GET['file'])) {
    header("Location: surat_masuk.php");
}

$id = $_GET["id"];
$file = $_GET['file'];

if (hapus_srtmsk($id, $file) > 0) {
    echo "<script>
                // alert('Surat berhasil dihapus!')
                // redirect versi javascript
                document.location.href = 'surat_masuk.php';
          </script>";
}
echo "<script>
        alert('Surat berhasil dihapus!')
        // redirect versi javascript
        document.location.href = 'surat_masuk.php';
      </script>";
