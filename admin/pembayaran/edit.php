<?php
    $edit=$mysqli->query("SELECT *FROM pembayaran where id_pembayaran='$_GET[id_pembayaran]'");
    $e=mysqli_fetch_array($edit);
?>
<div class="col-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Form Edit Data Pembayaran</h4>
      <p class="card-description">
        Masukkan data baru dengan benar!
      </p>
        <form class="forms-sample" method="post" action="?pembayaran=update">
          <div class="form-group">
            <label for="exampleSelectNamaPetugas">Nama Petugas</label>
              <select class="form-control" id="exampleSelectNamaPetugas" name="id_petugas">
              <option>Pilih Kelas</option>
                  <?php
                    $petugas=$mysqli->query("SELECT *FROM petugas ORDER BY id_petugas");
                    $no=0;
                      while($data=mysqli_fetch_array($petugas)){
                        $no++;
                  ?> 
                  <option value="<?php echo $data['id_petugas'];?>" <?php if($data['id_petugas'] == $e['id_petugas']) { echo 'selected'; } ?>><?php echo $data['nama_petugas'];?></option>
                  <?php } ?>
              </select>
          </div>
          <div class="form-group">
            <label for="exampleInputnisn">NISN</label>
            <input type="hidden" class="form-control" name="id_pembayaran" value="<?php echo $e['id_pembayaran'];?>">
            <input type="text" class="form-control" id="exampleInputnisn" placeholder="NISN" name="nisn" value="<?php echo $e['nisn'];?>">
          </div>
          <div class="form-group">
            <label for="exampleInputnnama">Nama Siswa</label>
            <input type="text" class="form-control" id="exampleInputnama" placeholder="Nama Siswa" name="nama" value="<?php echo $e['nama'];?>">
          </div>
          <div class="form-group">
            <label for="exampleInputtglbayar">Tanggal Bayar</label>
            <input type="date" class="form-control" id="exampleInputtglbayar" placeholder="Tanggal Bayar" name="tgl_bayar" value="<?php echo $e['tgl_bayar'];?>">
          </div>
          <div class="form-group">
            <label for="exampleInputblnbayar">Bulan Bayar</label>
            <input type="text" class="form-control" id="exampleInputblnbayar" placeholder="Bulan Bayar" name="bulan_dibayar" value="<?php echo $e['bulan_dibayar'];?>">
          </div>
          <div class="form-group">
            <label for="exampleInputthnbayar">Tahun Bayar</label>
            <input type="text" class="form-control" id="exampleInputthnbayar" placeholder="Tahun Bayar" name="tahun_dibayar" value="<?php echo $e['tahun_dibayar'];?>">
          </div>
          <div class="form-group">
            <label for="exampleSelectspp">SPP</label>
            <select class="form-control" id="exampleSelectspp" name="id_spp">
            <option>Pilih SPP</option>
              <?php
                $spp=$mysqli->query("SELECT *FROM spp ORDER BY id_spp");
                $no=0;
                  while($data=mysqli_fetch_array($spp)){
                    $no++;
              ?>  
              <option value="<?php echo $data['id_spp'];?>" <?php if($data['id_spp'] == $e['id_spp']) { echo 'selected'; } ?>><?php echo $data['tahun'];?> | <?php echo $data['nominal'];?></option>
              <?php } ?>
              </select>
          </div>
          <div class="form-group">
            <label for="exampleInputjmlbayar">Jumlah Bayar</label>
            <input type="text" class="form-control" id="exampleInputjmlbayar" placeholder="Jumlah Bayar" name="jumlah_bayar" value="<?php echo $e['jumlah_bayar'];?>">
          </div>
          <input type="submit" class="btn btn-primary mr-2" value="Edit">
        </form>
    </div>
  </div>
</div>