<?php
    $nisn=$_POST['nisn'];
    $nis=$_POST['nis'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $no_telp=$_POST['no_telp'];

    $mysqli->query("UPDATE siswa set nisn='$nisn', nis='$nis', nama='$nama', alamat='$alamat', no_telp='$no_telp'");
        echo"<script>alert('Berhasil diedit!')</script>";
        echo"<script language='javascript'>window.location.href='?siswa=read'</script>";
?>