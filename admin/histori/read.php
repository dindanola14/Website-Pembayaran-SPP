<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>History Pembayaran</title>
</head>
<body>
    <!-- Konten -->        
    <h4 class="card-title">Histori Pembayaran</h4>
    <p class="card-description">Cari Siswa berdasarkan NISN</p>
    <form action="" method="POST" autocomplete="off">
        <input type="text" name="nisn" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Masukkan NISN">
        <button type="submit" name="cari" class="btn btn-primary mb-2">Cari</button>
    </form>

<?php
// Kita lakukan proses pencariannya disini
if(isset($_POST['cari'])){
    $nisn = $_POST['nisn'];
    // Kita panggil table siswa
    $siswa=$mysqli->query("SELECT *FROM siswa join kelas on siswa.id_kelas=kelas.id_kelas where nisn='$nisn'");
    // Table pembayaran wajib kita panggil
    $pembayaran=$mysqli->query("SELECT *FROM pembayaran join petugas on pembayaran.id_petugas=petugas.id_petugas join spp on pembayaran.id_spp=spp.id_spp where nisn='$nisn'");
    $r_siswa = mysqli_fetch_assoc($siswa);
?>
    <hr />
    <!-- Kita tampilkan Biodata Siswa -->
    <h4 class="card-title">Biodata Siswa</h4>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive pt-3">
            <table class="table table-striped">
            <tr>
                <td>NISN</td>
                <td><?= $r_siswa['nisn']; ?></td>
            </tr>
            <tr>
                <td>NIS</td>
                <td><?= $r_siswa['nis']; ?></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><?= $r_siswa['nama']; ?></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td><?= $r_siswa['nama_kelas'] . " | " . $r_siswa['kompetensi_keahlian']; ?></td>
            </tr>
            </table>
        <hr />
        <!-- Sekarang kita tampilkan history pembayarannya -->
        <div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                    <tr>
                        <td>No. </td>
                        <td>Tanggal Pembayaran</td>
                        <td>Pembayaran Melalui</td>
                        <td>Tahun SPP | Nominal yang harus dibayar</td>
                        <td>Bulan Yang Dibayar</td>
                        <td>Jumlah yang sudah dibayar</td>
                        <td>Status</td>
                    </tr>
<?php 
    $no=1;
    while($r_trx = mysqli_fetch_assoc($pembayaran)){ 
?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $r_trx['tgl_bayar']; ?></td>
                        <td><?= $r_trx['nama_petugas']; ?></td>
                        <td><?= $r_trx['tahun'] . " | Rp. " . $r_trx['nominal']; ?></td>
                        <td><?= $r_trx['bulan_dibayar']; ?></td>
                        <td><?= "Rp. " . $r_trx['jumlah_bayar']; ?></td>
<?php
    if($r_trx['jumlah_bayar'] == $r_trx['nominal']){ 
?>
                <td><font style="color: darkgreen; font-weight: bold;">LUNAS</font></td>
                <td>-</td>
<?php }else{ ?> 
                <td>BELUM LUNAS</td>
<?php } ?>
                    </tr>
<?php $no++; }?>
                    </table>
<?php } ?>
        <hr />
</body>
</html>
