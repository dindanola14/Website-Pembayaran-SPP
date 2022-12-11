<?php
    $mysqli->query("DELETE FROM spp WHERE id_spp='$_GET[id_spp]'");
        echo"<script>alert('Berhasil dihapus!')</script>";
        echo"<script>window.location.href='?spp=read'</script>";
?>