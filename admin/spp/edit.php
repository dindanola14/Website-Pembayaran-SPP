<?php
    $edit=$mysqli->query("SELECT *FROM spp where id_spp='$_GET[id_spp]'");
    $e=mysqli_fetch_array($edit);
    // Fungsi ini akan menangkap data dari hasil perintah query dan membentuknya ke dalam array asosiatif dan array numerik
?>
<div class="col-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Form Edit Data SPP</h4>
      <p class="card-description">
        Masukkan data baru dengan benar!
      </p>
      <form class="forms-sample" method="post" action="?spp=update">
        <div class="form-group">
          <label for="exampleInputtahun">Tahun</label>
          <input type="text" class="form-control" id="exampleInputtahun" placeholder="Tahun" name="tahun" value="<?php echo $e['tahun'];?>">
        </div>
        <div class="form-group">
          <label for="exampleInputnominal">Nominal</label>
          <input type="text" class="form-control" id="exampleInputnominal" placeholder="Nominal" name="nominal" value="<?php echo $e['nominal'];?>">
        </div>
        <input type="submit" class="btn btn-primary mr-2" value="Edit">
      </form>
    </div>
  </div>
</div>