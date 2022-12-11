<?php
     $id_petugas=$_POST['id_petugas'];
     $nisn=$_POST['nisn'];
     $nama=$_POST['nama'];
     $tgl_bayar=$_POST['tgl_bayar'];
     $bulan_dibayar=$_POST['bulan_dibayar'];
     $tahun_dibayar=$_POST['tahun_dibayar'];
     $id_spp=$_POST['id_spp'];
     $jumlah_bayar=$_POST['jumlah_bayar'];
     $id_pembayaran = $_POST['id_pembayaran'];
    
     $mysqli->query("UPDATE pembayaran set id_petugas='$id_petugas', nisn='$nisn', nama='$nama', tgl_bayar='$tgl_bayar', bulan_dibayar='$bulan_dibayar', tahun_dibayar='$tahun_dibayar', id_spp='$id_spp', jumlah_bayar='$jumlah_bayar' where id_pembayaran='$id_pembayaran'");
        echo"<script>alert('Berhasil diedit!')</script>";
        echo"<script language='javascript'>window.location.href='?pembayaran=read'</script>";
?>