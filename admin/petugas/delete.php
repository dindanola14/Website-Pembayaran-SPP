<?php
    $mysqli->query("DELETE FROM petugas WHERE id_petugas='$_GET[id_petugas]'");
        echo"<script>alert('Berhasil dihapus!')</script>";
        echo"<script>window.location.href='?petugas=read'</script>";
?>