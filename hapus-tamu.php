<?php
    //panggil file function.php
    require_once 'function.php';

    //jika ada id
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        if (hapus_tamu($id) > 0 ) {
            //jika data berhasil di hapus maka akan muncul alert
            echo "<script>alert('Data berhasil di hapus!')</script>";
        } else{
            //jika gagal dihapus
            echo "<script>alert('Data gagal di hapus!')</script>";
        }
    }

?>