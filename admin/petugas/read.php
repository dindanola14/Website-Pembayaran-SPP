<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <p class="card-title">Data Petugas | <a href="?petugas=add"> Tambah Petugas</a></p>
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="tb_petugas" class="display expandable-table" style="width:100%">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Nama Petugas</th>
                    <th>Level</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $petugas=$mysqli->query("SELECT *FROM petugas ORDER BY id_petugas");
                  $no=0;
                    while($data=mysqli_fetch_array($petugas)){
                      $no++;
                ?>
                  <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo $data['username'];?></td>
                    <td><?php echo $data['nama_petugas'];?></td>
                    <td><?php echo $data['level'];?></td>
                    <td><a href="?petugas=edit&id_petugas=<?php echo $data['id_petugas'];?>">Edit</a> | <a href="?petugas=delete&id_petugas=<?php echo $data['id_petugas'];?>">Hapus</a></td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>