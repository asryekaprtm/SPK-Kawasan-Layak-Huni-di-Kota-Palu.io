<?php
include 'template/head.php';
include 'koneksi.php';

?>

<!-- tabel -->
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
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data User</h4>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    $query = mysqli_query($conn, "SELECT * FROM user WHERE class='user'");

                                    if ($query->num_rows > 0) {
                                        while ($row = $query->fetch_assoc()) {
                                    ?>
                                            <tr>
                                                <th><?= $no++; ?></th>
                                                <td><?= $row['nama'] ?></td>
                                                <td><?= $row['username'] ?></td>
                                                <td><?= $row['email'] ?></td>
                                                <td><?= $row['password'] ?></td>
                                                <td>
                                                    <a href="edit_datauser.php?id=<?= $row['id']; ?>" class="btn btn-outline-success btn-md"><i class="ti-file btn-icon-append"></i> Edit</a>
                                                    <a href="delete_datauser.php?id=<?= $row['id']; ?>" class="btn btn-outline-danger btn-md" onclick="return confirm ('data ingin dihapus')"><i class="ti-alert btn-icon-prepend"></i> Delete</a>
                                                </td>
                                            </tr>
                                    <?php }
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'template/footer.php' ?>
    <!-- partial -->
    <!-- main-panel ends -->
</div>

</div>
<!-- page-body-wrapper ends -->

<!-- container-scroller -->
<?php include 'template/script.php' ?>