<?php 
include 'template/head.php';
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $kelurahan = $_POST['kelurahan'];
    $kecamatan = $_POST['kecamatan'];

    $query = mysqli_query($conn, "SELECT * FROM alternative WHERE kelurahan = '$kelurahan'");
    
    if ($query->num_rows > 0) {
        echo "<script>
        alert('Kelurahan Sudah Diinputkan!!!')
        document.location.src = 'alternative.php';
        </script>";
    } else {
        $query = mysqli_query($conn, "INSERT INTO alternative(kelurahan,kecamatan) VALUES ('$kelurahan','$kecamatan')");
        if ($query) {
            echo "<script>
        alert('Data berhasil Diinputkan');
        </script>";
        } else {
            echo "<script>
        alert('Data gagal Diinputkan');
        </script>";
        }
    }
}

?>



<!-- Content -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-10 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">Alternative</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mb-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">form Input</h4>
                        <form class="form-inline" method="POST">
                            <label class="sr-only" for="inlineFormInputName2">Kelurahan</label>
                            <div class="input-group col-md-4 mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">+</div>
                                </div>
                                <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Kelurahan" name="kelurahan" required>
                            </div>
                            <label class="sr-only" for="inlineFormInputGroupUsername2">Kecamatan</label>
                            <div class="input-group col-md-4 mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">+</div>
                                </div>
                                <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Kecamatan" name="kecamatan" required>
                            </div>
                            <button type="reset" class="btn btn-outline-warning btn-icon-text mr-sm-1 mb-2">
                                <i class="ti-reload btn-icon-prepend"></i>
                                Reset
                            </button>
                            <button type="submit" class="btn btn-outline-primary btn-icon-text mb-2" name="simpan" ><i class="ti-file btn-icon-prepend"></i>
                                Submit
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- tabel -->
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data Alternative</h4>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kelurahan</th>
                                        <th>Kecamatan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    $query = mysqli_query($conn, "SELECT * FROM alternative");

                                    if ($query->num_rows > 0) {
                                        while ($row = $query->fetch_assoc()) {
                                    ?>
                                    <tr>
                                        <th><?= $no++; ?></th>
                                        <td><?= $row['kelurahan']?></td>
                                        <td><?= $row['kecamatan']?></td>
                                        <td>
                                        <a href="edit_alternative.php?id=<?= $row['id']; ?>" class="btn btn-outline-success btn-md"><i class="ti-file btn-icon-append"></i> Edit</a>
                                        <a href="delete_alternative.php?id=<?= $row['id']; ?>" class="btn btn-outline-danger btn-md" onclick="return confirm ('data ingin dihapus')"><i class="ti-alert btn-icon-prepend"></i> Delete</a>
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