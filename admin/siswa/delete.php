<?php
    $mysqli->query("DELETE FROM siswa WHERE nisn='$_GET[nisn]'");
        echo"<script>alert('Berhasil dihapus!')</script>";
        echo"<script>window.location.href='?siswa=read'</script>";
?>