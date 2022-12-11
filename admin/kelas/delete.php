<?php
    $mysqli->query("DELETE FROM kelas WHERE id_kelas='$_GET[id_kelas]'");
        echo"<script>alert('Berhasil dihapus!')</script>";
        echo"<script>window.location.href='?kelas=read'</script>";
?>