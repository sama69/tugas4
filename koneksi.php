<?php
    // deve
    // $kon = mysqli_connect("localhost", "root",'',"sertifikasi");
    
    // production
    $kon=mysqli_connect("localhost","id7899380_sertifikasi","sertifikasi","id7899380_sertifikasi");
    if (mysqli_connect_errno()) {
        echo "Koneksi database gagal : " .mysqli_connect_error();
    }
?>