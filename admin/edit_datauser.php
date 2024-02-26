<?php
include 'template/head.php';
include 'koneksi.php';

if (isset($_POST['edit'])) {
    $id = $_GET['id'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = mysqli_query($conn, "UPDATE user SET nama='$nama', username='$username', email= '$email', password= '$password' WHERE id='$id'");

    if ($query) {
        echo "<script>
            alert('Data berhasil diedit');
            document.location.href = 'data_user.php';
            </script>";
    } else {
        echo "<script>
            alert('Data gagal diedit');
            document.location.href = 'edit_datauser.php';
            </script>";
    }
}
?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-10 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">User</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 offset-md-2 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body ">
                        <h4 class="card-title offset-md-1">Form Input</h4>
                        <?php
                        $id = $_GET['id'];
                        $query = $conn->query("SELECT * FROM user WHERE id='$id'");
                        if ($query->num_rows > 0) {
                            while ($row = $query->fetch_assoc()) {
                        ?>
                                <form class="forms-sample" method="POST">
                                    <div class="form-group row">
                                        <label class="col-sm-2 offset-md-2 col-form-label" for="exampleInputUsername2">
                                            <h6>Nama</h6>
                                        </label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" value="<?= $row['nama']; ?>" id="inlineFormInputGroupUsername2" placeholder="Nama" name="nama" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 offset-md-2 col-form-label" for="exampleInputUsername2">
                                            <h6>Username</h6>
                                        </label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" value="<?= $row['username']; ?>" id="inlineFormInputGroupUsername2" placeholder="Username" name="username" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 offset-md-2 col-form-label" for="exampleInputUsername2">
                                            <h6>Email</h6>
                                        </label>
                                        <div class="col-sm-5">
                                            <input type="email" class="form-control" value="<?= $row['email']; ?>" id="inlineFormInputGroupUsername2" placeholder="Email" name="email" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 offset-md-2 col-form-label" for="exampleInputUsername2">
                                            <h6>Password</h6>
                                        </label>
                                        <div class="col-sm-5">
                                            <input type="password" class="form-control" value="<?= $row['password']; ?>" id="inlineFormInputGroupUsername2" placeholder="Password" name="password" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 offset-md-4">
                                            <button type="reset" class="btn btn-outline-warning btn-icon-text">
                                                <i class="ti-reload btn-icon-prepend"></i>
                                                Reset
                                            </button>
                                            <button type="submit" name="edit" class="btn btn-outline-primary btn-icon-text"><i class="ti-file btn-icon-prepend"></i>
                                                Submit
                                            </button>
                                        </div>
                                    </div>
                                </form>
                        <?php
                            }
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'template/footer.php' ?>
    <!-- partial -->
    <!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<?php include 'template/script.php' ?>