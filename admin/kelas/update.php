<?php
    $nama_kelas=$_POST['nama_kelas'];
    $kompetensi_keahlian=$_POST['kompetensi_keahlian'];

    $mysqli->query("UPDATE kelas set nama_kelas='$nama_kelas', kompetensi_keahlian='$kompetensi_keahlian' where id_kelas='$id_kelas'");
        echo"<script>alert('Berhasil diedit!')</script>";
        echo"<script language='javascript'>window.location.href='?kelas=read'</script>";
?>