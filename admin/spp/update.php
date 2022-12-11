<?php
    $tahun=$_POST['tahun'];
    $nominal=$_POST['nominal'];

    $mysqli->query("UPDATE spp set tahun='$tahun', nominal='$nominal' where id_spp='$id_spp'");
        echo"<script>alert('Berhasil diedit!')</script>";
        echo"<script language='javascript'>window.location.href='?spp=read'</script>";
?>