<?php
    $tahun=$_POST['tahun'];
    $nominal=$_POST['nominal'];

    $mysqli->query("INSERT INTO spp (tahun, nominal) VALUES ('$tahun','$nominal')" );
        echo"<script>alert('Berhasil disimpan!')</script>";
        echo"<script language='javascript'>window.location.href='?spp=read'</script>";
?>