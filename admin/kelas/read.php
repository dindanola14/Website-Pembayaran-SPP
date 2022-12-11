<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <p class="card-title">Data Kelas | <a href="?kelas=add"> Tambah Kelas</a></p>
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="tb_petugas" class="display expandable-table" style="width:100%">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Kelas</th>
                    <th>Kompetensi Keahlian</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $kelas=$mysqli->query("SELECT *FROM kelas ORDER BY id_kelas");
                  $no=0;
                    while($data=mysqli_fetch_array($kelas)){
                      $no++;
                ?>
                  <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo $data['nama_kelas'];?></td>
                    <td><?php echo $data['kompetensi_keahlian'];?></td>
                    <td><a href="?kelas=edit&id_kelas=<?php echo $data['id_kelas'];?>">Edit</a> | <a href="?kelas=delete&id_kelas=<?php echo $data['id_kelas'];?>">Hapus</a></td>
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