<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <p class="card-title">Data SPP | <a href="?spp=add"> Tambah SPP</a></p>
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="tb_petugas" class="display expandable-table" style="width:100%">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Tahun</th>
                    <th>Nominal</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $spp=$mysqli->query("SELECT *FROM spp ORDER BY id_spp");
                  $no=0;
                    while($data=mysqli_fetch_array($spp)){
                      $no++;
                ?>
                  <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo $data['tahun'];?></td>
                    <td><?php echo $data['nominal'];?></td>
                    <td><a href="?spp=edit&id_spp=<?php echo $data['id_spp'];?>">Edit</a> | <a href="?spp=delete&id_spp=<?php echo $data['id_spp'];?>">Hapus</a></td>
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