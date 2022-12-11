<?php
    $edit=$mysqli->query("SELECT *FROM siswa where nisn='".$_GET['nisn']."'");
    $e=mysqli_fetch_array($edit);
?>
<div class="col-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Form Edit Data Siswa</h4>
      <p class="card-description">
        Masukkan data baru dengan benar!
      </p>
      <form class="forms-sample" method="post" action="?siswa=update">
      <div class="form-group">
          <label for="exampleInputnisn">NISN</label>
          <input type="text" class="form-control" id="exampleInputnisn" placeholder="NISN" name="nisn"  value="<?php echo $e['nisn'];?>">
        </div>
        <div class="form-group">
          <label for="exampleInputnis">NIS</label>
          <input type="text" class="form-control" id="exampleInputnis" placeholder="NIS" name="nis"  value="<?php echo $e['nis'];?>">
        </div>
        <div class="form-group">
          <label for="exampleInputnama">Nama Siswa</label>
          <input type="text" class="form-control" id="exampleInputnama" placeholder="Nama Siswa" name="nama"  value="<?php echo $e['nama'];?>">
        </div>
        <div class="form-group">
          <label for="exampleSelectkelas">Kelas</label>
            <select class="form-control" id="exampleSelectkelas" name="id_kelas">
            <option>Pilih Kelas</option>
            <?php
              $kelas=$mysqli->query("SELECT *FROM kelas ORDER BY id_kelas");
              $no=0;
                while($data=mysqli_fetch_array($kelas)){
                  $no++;
            ?>  
            <option value="<?php echo $data['id_kelas'];?>"><?php echo $data['nama_kelas'];?> | <?php echo $data['kompetensi_keahlian'];?></option>
            <?php } ?>
            </select>
          </div>
        <div class="form-group">
          <label for="exampleInputalamat">Alamat</label>
          <input type="text" class="form-control" id="exampleInputalamat" placeholder="Alamat" name="alamat"  value="<?php echo $e['alamat'];?>">
        </div>
        <div class="form-group">
          <label for="exampleInputnotelp">No Telp</label>
          <input type="text" class="form-control" id="exampleInputnotelp" placeholder="No Telp" name="no_telp"  value="<?php echo $e['no_telp'];?>">
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
        <input type="submit" class="btn btn-primary mr-2" value="Edit">
      </form>
    </div>
  </div>
</div>