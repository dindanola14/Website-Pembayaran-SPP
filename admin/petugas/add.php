<div class="col-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Form Data Petugas</h4>
        <p class="card-description">
          Masukkan data dengan benar!
        </p>
        <form class="forms-sample" method="post" action="?petugas=create">
          <div class="form-group">
            <label for="exampleInputName">Username</label>
            <input type="text" class="form-control" id="exampleInputName" placeholder="Username" name="username">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword" placeholder="Password" name="password">
          </div>
          <div class="form-group">
            <label for="exampleInputNamaPetugas">Nama Petugas</label>
            <input type="text" class="form-control" id="exampleInputNamaPetugas" placeholder="Nama Petugas" name="nama_petugas">
          </div>
          <div class="form-group">
            <label for="exampleSelectLevel">Level</label>
              <select class="form-control" id="exampleSelectLevel" name="level">
                <option value="admin">Admin</option>
                <option value="petugas">Petugas</option>
              </select>
            </div>
          <input type="submit" class="btn btn-primary mr-2" value="Submit">
        </form>
      </div>
    </div>
  </div>