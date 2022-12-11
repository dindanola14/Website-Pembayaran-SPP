<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <p class="card-title">Data Pembayaran | <a href="?pembayaran=add"> Tambah Pembayaran</a></p>
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="tb_petugas" class="display expandable-table" style="width:100%">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Petugas</th>
                    <th>NISN</th>
                    <th>Nama Siswa</th>
                    <th>Tanggal Bayar</th>
                    <th>Bulan Bayar</th>
                    <th>Tahun Bayar</th>
                    <th>SPP</th>
                    <th>Jumlah Bayar</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $pembayaran=$mysqli->query("SELECT *FROM pembayaran, siswa, spp, petugas where pembayaran.nisn=siswa.nisn and pembayaran.id_spp=spp.id_spp and pembayaran.id_petugas=petugas.id_petugas");
                  $no=0;
                    while($data=mysqli_fetch_array($pembayaran)){
                      $no++;
                ?>
                  <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo $data['nama_petugas'];?></td>
                    <td><?php echo $data['nisn'];?></td>
                    <td><?php echo $data['nama'];?></td>
                    <td><?php echo $data['tgl_bayar'];?></td>
                    <td><?php echo $data['bulan_dibayar'];?></td>
                    <td><?php echo $data['tahun_dibayar'];?></td>
                    <td><?php echo $data['nominal'];?></td>
                    <td><?php echo $data['jumlah_bayar'];?></td>
                    <td><?php if($data['jumlah_bayar'] == $data['nominal']){ ?>
                      <font style="color: darkgreen; font-weight: bold;">LUNAS</font>
                    <?php }else{ ?> 
                      <font style="color: darkred; font-weight: bold;">BELUM LUNAS</font>
                    <?php } ?> </td>
                    <td><a href="?pembayaran=edit&id_pembayaran=<?php echo $data['id_pembayaran'];?>">Edit</a> | <a href="?pembayaran=delete&id_pembayaran=<?php echo $data['id_pembayaran'];?>">Hapus</a></td>
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