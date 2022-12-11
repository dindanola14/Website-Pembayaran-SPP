<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <p class="card-title">Data Siswa | <a href="?siswa=add"> Tambah Siswa</a></p>
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="tb_petugas" class="display expandable-table" style="width:100%">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>NISN</th>
                    <th>NIS</th>
                    <th>Nama Siswa</th>
                    <th>Kelas</th>
                    <th>Alamat</th>
                    <th>No Telp</th>
                    <th>SPP</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $siswa=$mysqli->query("SELECT *FROM siswa,kelas,spp where siswa.id_kelas=kelas.id_kelas and siswa.id_spp=spp.id_spp");
                  $no=0;
                    while($data=mysqli_fetch_array($siswa)){
                      $no++;
                ?>
                  <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo $data['nisn'];?></td>
                    <td><?php echo $data['nis'];?></td>
                    <td><?php echo $data['nama'];?></td>
                    <td><?php echo $data['nama_kelas'];?> | <?php echo $data['kompetensi_keahlian'];?> </td>
                    <td><?php echo $data['alamat'];?></td>
                    <td><?php echo $data['no_telp'];?></td>
                    <td><?php echo $data['tahun'];?> | <?php echo $data['nominal'];?></td>
                    <td><a href="?siswa=edit&nisn=<?php echo $data['nisn'];?>">Edit</a> | <a href="?siswa=delete&nisn=<?php echo $data['nisn'];?>">Hapus</a></td>
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