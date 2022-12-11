<?php
    $nisn = $_SESSION['nisn'];
    $siswa=$mysqli->query("SELECT *FROM siswa join kelas on siswa.id_kelas=kelas.id_kelas where nisn='$nisn'");
    $result = mysqli_fetch_assoc($siswa);
?>
<h4 class="card-title">Biodata Siswa</h4>
<div class="col-lg-12 stretch-card">
    <div class="card">
        <div class="card-body">
            <div class="table-responsive pt-3">
            <table class="table table-striped">
            <tr>
                <td>NISN</td>
                <td><?= $result['nisn']; ?></td>
            </tr>
            <tr>
                <td>NIS</td>
                <td><?= $result['nis']; ?></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><?= $result['nama']; ?></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td><?= $result['nama_kelas'] . " | " . $result['kompetensi_keahlian']; ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><?= $result['alamat']; ?></td>
            </tr>
            </table>