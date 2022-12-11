<?php
  $nisn = $_SESSION['nisn'];
  $pembayaran=$mysqli->query("SELECT *FROM pembayaran join petugas on pembayaran.id_petugas=petugas.id_petugas join spp on pembayaran.id_spp=spp.id_spp where nisn='$nisn'");
?>
<h4 class="card-title">Histori Pembayaran</h4>
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