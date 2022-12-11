<?php
    $id_petugas=$_POST['id_petugas'];
    $nisn=$_POST['nisn'];
    $nama=$_POST['nama'];
    $tgl_bayar=$_POST['tgl_bayar'];
    $bulan_dibayar=$_POST['bulan_dibayar'];
    $tahun_dibayar=$_POST['tahun_dibayar'];
    $id_spp=$_POST['id_spp'];
    $jumlah_bayar=$_POST['jumlah_bayar'];

    $mysqli->query("INSERT INTO pembayaran (id_petugas, nisn, nama, tgl_bayar, bulan_dibayar, tahun_dibayar, id_spp, jumlah_bayar) VALUES ('$id_petugas', '$nisn', '$nama', '$tgl_bayar', '$bulan_dibayar', '$tahun_dibayar', '$id_spp', '$jumlah_bayar')" );
        echo"<script>alert('Berhasil disimpan!')</script>";
        echo"<script language='javascript'>window.location.href='?pembayaran=read'</script>";
?>