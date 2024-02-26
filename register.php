<?php
include 'admin/koneksi.php';

if(isset($_POST['register'])){
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = $conn->query("SELECT * FROM user WHERE username='$username'");
    if($query->num_rows>0){
        echo "<script>
        alert('Username sudah digunakan');
        document.location.href = 'register.php';
        </script>";
    }
    else{
    $i = $conn->query("INSERT INTO user (class,nama,username,email,password) VALUES ('user','$nama','$username','$email','$password')");

    if($i){
        echo "<script>
        alert('Berhasil Daftar');
        document.location.href = 'login.php';
        </script>";
    }
    else{
        echo "<script>
        alert('Gagal Daftar');
        </script>";
    }
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SPK DARI</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="admin/asset/vendors/feather/feather.css">
    <link rel="stylesheet" href="admin/asset/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="admin/asset/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="admin/asset/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="admin/asset/images/logo1.png" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5"  style="border-radius: 50px;">
                            <div class="brand-logo offset-md-1 mb-1">
                                <img src="admin/asset/images/logo.png" alt="logo" style="height:180; width:300px;">
                            </div>
                            <h4>Registrasi akunmu yuk!</h4>
                            <form class="pt-3" method="POST">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="Nama" name="nama"required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="Username" name="username" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email" name="email" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" name="password" required>
                                </div>
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-block btn btn-outline-success btn-lg font-weight-medium auth-form-btn" name="register">SIGN UP</button>
                                </div>
                                <div class="text-center mt-4 font-weight-light">
                                    Already have an account? <a href="login.php" class="text-success" >Login</a>
                                </div>
                            </form>
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
    <script src="admin/asset/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="admin/asset/js/off-canvas.js"></script>
    <script src="admin/asset/js/hoverable-collapse.js"></script>
    <script src="admin/asset/js/template.js"></script>
    <script src="admin/asset/js/settings.js"></script>
    <script src="admin/asset/js/todolist.js"></script>
    <!-- endinject -->
</body>

</html>