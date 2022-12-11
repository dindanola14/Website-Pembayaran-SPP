<?php
    $mysqli->query("DELETE FROM pembayaran WHERE id_pembayaran='$_GET[id_pembayaran]'");
        echo"<script>alert('Berhasil dihapus!')</script>";
        echo"<script>window.location.href='?pembayaran=read'</script>";
?>