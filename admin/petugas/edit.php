<?php
    $edit=$mysqli->query("SELECT *FROM petugas where id_petugas='$_GET[id_petugas]'");
    $e=mysqli_fetch_array($edit);
?>
<div class="col-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Form Edit Data Petugas</h4>
      <p class="card-description">
        Masukkan data baru dengan benar!
      </p>
      <form class="forms-sample" method="post" action="?petugas=update">
        <div class="form-group">
          <label for="exampleInputName">Username</label>
          <input type="hidden" class="form-control" name="id_petugas" value="<?php echo $e['id_petugas'];?>">
          <input type="text" class="form-control" id="exampleInputName" placeholder="Username" name="username" value="<?php echo $e['username'];?>">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword" placeholder="Password" name="password" >
        </div>
        <div class="form-group">
          <label for="exampleInputNamaPetugas">Nama Petugas</label>
          <input type="text" class="form-control" id="exampleInputNamaPetugas" placeholder="Nama Petugas" name="nama_petugas" value="<?php echo $e['nama_petugas'];?>">
        </div>
        <div class="form-group">
          <label for="exampleSelectLevel">Level</label>
            <select class="form-control" id="exampleSelectLevel" name="level" value="<?php echo $e['level'];?>">
              <option value="admin" <?php if($e['level'] == 'admin') { echo 'selected'; } ?>>Admin</option>
              <option value="petugas" <?php if($e['level'] == 'petugas') { echo 'selected'; } ?>>Petugas</option>
            </select>
          </div>
        <input type="submit" class="btn btn-primary mr-2" value="Edit">
      </form>
    </div>
  </div>
</div>