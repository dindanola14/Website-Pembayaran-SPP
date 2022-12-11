<?php
    $edit=$mysqli->query("SELECT *FROM kelas where id_kelas='$_GET[id_kelas]'");
    $e=mysqli_fetch_array($edit);
?>
<div class="col-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Form Edit Data Kelas</h4>
        <p class="card-description">
          Masukkan data baru dengan benar!
        </p>
        <form class="forms-sample" method="post" action="?kelas=update">
          <div class="form-group">
            <label for="exampleInputkelas">Kelas</label>
              <input type="text" class="form-control" id="exampleInputkelas" placeholder="Kelas" name="nama_kelas" value="<?php echo $e['nama_kelas'];?>">
          </div>
          <div class="form-group">
            <label for="exampleInputahli">Kompetensi Keahlian</label>
              <input type="text" class="form-control" id="exampleInputahli" placeholder="Kompetensi Keahlian" name="kompetensi_keahlian" value="<?php echo $e['kompetensi_keahlian'];?>">
          </div>
              <input type="submit" class="btn btn-primary mr-2" value="Edit">
        </form>
    </div>
  </div>
</div>