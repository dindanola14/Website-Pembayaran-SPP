<div class="col-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Form Data Pembayaran</h4>
        <p class="card-description">
          Masukkan data dengan benar!
        </p>
        <form class="forms-sample" method="post" action="?pembayaran=create">
          <div class="form-group">
            <label for="exampleSelectNamaPetugas">Nama Petugas</label>
              <select class="form-control" id="exampleSelectNamaPetugas" name="id_petugas">
              <option>Pilih Nama Petugas</option>
                <?php
                  $petugas=$mysqli->query("SELECT *FROM petugas ORDER BY id_petugas");
                  $no=0;
                    while($data=mysqli_fetch_array($petugas)){
                      $no++;
                ?>  
                <option value="<?php echo $data['id_petugas'];?>"><?php echo $data['nama_petugas'];?></option>
                <?php } ?>
                </select>
                  <div class="form-group">
                    <label for="exampleInputnisn">NISN</label>
                    <input type="text" class="form-control" id="exampleInputnisn" placeholder="NISN" name="nisn">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputnnama">Nama Siswa</label>
                    <input type="text" class="form-control" id="exampleInputnama" placeholder="Nama Siswa" name="nama">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputtglbayar">Tanggal Bayar</label>
                    <input type="date" class="form-control" id="exampleInputtglbayar" placeholder="Tanggal Bayar" name="tgl_bayar">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputblnbayar">Bulan Bayar</label>
                    <input type="text" class="form-control" id="exampleInputblnbayar" placeholder="Bulan Bayar" name="bulan_dibayar">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputthnbayar">Tahun Bayar</label>
                      <input type="text" class="form-control" id="exampleInputthnbayar" placeholder="Tahun Bayar" name="tahun_dibayar">
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
                      <option value="<?php echo $data['id_spp'];?>"><?php echo $data['tahun'];?> | <?php echo $data['nominal'];?></option>
                        <?php } ?>
                      </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputjmlbayar">Jumlah Bayar</label>
                    <input type="text" class="form-control" id="exampleInputjmlbayar" placeholder="Jumlah Bayar" name="jumlah_bayar">
                  </div>
                    <input type="submit" class="btn btn-primary mr-2" value="Submit">
        </form>
    </div>
  </div>
</div>