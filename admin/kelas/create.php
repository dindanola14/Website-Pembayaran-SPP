<?php
    $nama_kelas=$_POST['nama_kelas'];
    $kompetensi_keahlian=$_POST['kompetensi_keahlian'];

    $mysqli->query("INSERT INTO kelas (nama_kelas, kompetensi_keahlian) VALUES ('$nama_kelas','$kompetensi_keahlian')" );
        echo"<script>alert('Berhasil disimpan!')</script>";
        echo"<script language='javascript'>window.location.href='?kelas=read'</script>";
?>