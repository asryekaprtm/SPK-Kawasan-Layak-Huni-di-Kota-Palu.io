<?php
include 'admin/koneksi.php';
session_start();

 
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $pass   = $_POST['password'];

    $query = $conn->query("SELECT * FROM user WHERE username='$username' AND password='$pass' ");
    if($query->num_rows == 1 ){
        $row = $query->fetch_assoc();
        $user = $row['class'];
        
        if($user == 'admin'){
            $_SESSION['class'] = $row['class'];
            $_SESSION['admin'] = $row['class'];
            $_SESSION['nama_user'] = $row['nama'];
            $_SESSION['username'] = $row['username'];
            echo "<script>alert('Selamat Datang')</script>";
            header("Location: admin/index.php");
        }
        else if($user == 'user'){
            $_SESSION['class'] = $row['class'];
            $_SESSION['user'] = $row['class'];
            $_SESSION['nama_user'] = $row['nama'];
            $_SESSION['username'] = $row['username'];
            echo "<script>alert('Selamat Datang')</script>";
            header("Location: index.php");
        }
    }
    else{
        echo "<script>alert('Gagal')</script>";
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
    <div class="container-scroller" >
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0 stretch-card">
                    <div class="col-lg-4 mx-auto" >
                        <div class="auth-form-light text-left py-5 px-2 px-sm-5" style="border-radius: 50px;">
                            <div class="brand-logo offset-md-1 mb-1 ">
                                <img src="admin/asset/images/logo.png" alt="logo" style="height:170px; width:320px;">
                            </div>
                            <h4>Hai, yuk login dulu!</h4>
                            <form class="pt-3" method="POST">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username" name="username">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" name="password">
                                </div>
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-block btn-outline-success btn-lg font-weight-medium auth-form-btn" name="login">SIGN IN</button>
                                </div>
                                <div class="my-2 d-flex justify-content-between align-items-center">
                                    <a class="auth-link text-black">lupa password?</a>
                                </div>
                                <div class="text-center mt-4 font-weight-light">
                                    Tidak punya akun? <a href="register.php" class="text-success">Daftar disini!</a>
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