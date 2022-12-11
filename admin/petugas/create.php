<?php
    $username=$_POST['username'];
    $password=$_POST['password'];
    $nama_petugas=$_POST['nama_petugas'];
    $level=$_POST['level'];

    $mysqli->query("INSERT INTO petugas (username, password, nama_petugas, level) VALUES ('$username','$password','$nama_petugas','$level')" );
        echo"<script>alert('Berhasil disimpan!')</script>";
        echo"<script language='javascript'>window.location.href='?petugas=read'</script>";
?>