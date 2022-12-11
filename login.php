<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login Admin | Pembayaran SPP</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="template/vendors/feather/feather.css">
  <link rel="stylesheet" href="template/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="template/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="template/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="template/images/school.png" />
</head>

<body>
<?php
require('koneksi.php');
// session digunakan untuk menyimpan suatu informasi antar proses request, baik request dalam bentuk POST atau GET
session_start();
// Jika formulir dikirimkan, masukkan nilai ke dalam database
    if (isset($_POST['username'])){
        $username = stripslashes($_REQUEST['username']);
        // stripslashes untuk menghapus atau menghilangkan karakter backslashes tanda garis miring terbalik ("\") menggunakan stripslashes() 
        // sehingga tidak mengganggu query mysql yang dikirim
        $username = mysqli_real_escape_string($con,$username); 
        // Fungsi real_escape_string() / mysqli_real_escape_string() digunakan untuk lolos dari karakter khusus dalam string untuk digunakan dalam kueri SQL, 
        // dengan mempertimbangkan kumpulan karakter saat ini dari koneksi. Fungsi ini digunakan untuk membuat string SQL legal yang dapat digunakan dalam pernyataan SQL
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con,$password);
        // Memeriksa apakah pengguna ada di database atau tidak
        $query = "SELECT * FROM petugas WHERE username='$username' and level='admin' and password='".($password)."'";
        $result = mysqli_query($con,$query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        // Fungsi mysql_num_rows() digunakan untuk mengetahui berapa banyak jumlah baris hasil pemanggilan fungsi mysql_query()
            if($rows==1){
                $_SESSION['level'] == 'admin';
                $_SESSION['username'] = $username;
                header("Location:admin/index.php"); // Dilarikan ke index.php
            }else{
                echo "<div class='form'><h2>Maaf</h2><h3>Username dan Password salah :(</h3><br/>Coba lagi di sini <a href='login.php'>Login</a></div>";
            }
    }else{
?>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <center>
                <img src="template/images/angkasa.png" alt="logo">
                </center>
              </div>
              <center>
              <h4>Pembayaran SPP</h4>
              <h6 class="font-weight-light">Sekolah Angkasa</h6>
              <div class="mt-3"></div>
            </center>
            <form action="" method="post">
              <form class="pt-3">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username" name="username">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" name="password">
                </div>
                <div class="mt-3">
                  <input type="submit" class="btn btn-primary btn-block btn-flat" value="LOGIN">
                </div>
              </form>
              <div class="mt-3">
              <td colspan="2"><center>Apakah anda seorang Petugas? Login <a href="loginpetugas.php">disini</a></center></td>
              <td colspan="2"><center>Apakah anda seorang Siswa? Login <a href="loginsiswa.php">disini</a></center></td>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="template/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="template/js/off-canvas.js"></script>
  <script src="template/js/hoverable-collapse.js"></script>
  <script src="template/js/template.js"></script>
  <script src="template/js/settings.js"></script>
  <script src="template/js/todolist.js"></script>
  <!-- endinject -->
<?php } ?>
</body>

</html>
