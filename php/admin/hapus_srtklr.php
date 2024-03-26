<?php
require '../functions.php';

if (!isset($_GET["id"]) && !isset($_GET['file'])) {
    header("Location: surat_masuk.php");
}

$id = $_GET["id"];
$file = $_GET['file'];


if (hapus_srtklr($id, $file) > 0) {
    echo "<script>
                // alert('Surat berhasil dihapus!')
                // redirect versi javascript
                document.location.href = 'surat_keluar.php';
          </script>";
}
echo "<script>
        alert('Surat Gagal dihapus!')
        // redirect versi javascript
        document.location.href = 'surat_keluar.php';
      </script>";
