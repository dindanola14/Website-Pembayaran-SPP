<?php
    $nisn=$_POST['nisn'];
    $nis=$_POST['nis'];
    $nama=$_POST['nama'];
    $id_kelas=$_POST['id_kelas'];
    $alamat=$_POST['alamat'];
    $no_telp=$_POST['no_telp'];
    $id_spp=$_POST['id_spp'];

    $mysqli->query("INSERT INTO siswa (nisn, nis, nama, id_kelas, alamat, no_telp, id_spp) VALUES ('$nisn', '$nis', '$nama', $id_kelas, '$alamat', '$no_telp', '$id_spp')" );
        echo"<script>alert('Berhasil disimpan!')</script>";
        echo"<script language='javascript'>window.location.href='?siswa=read'</script>";
?>