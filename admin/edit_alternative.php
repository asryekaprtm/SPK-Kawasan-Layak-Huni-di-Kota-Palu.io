<?php
include 'template/head.php';
include 'koneksi.php'; 

if (isset($_POST['edit'])) {
    $id = $_GET['id'];
    $kelurahan = $_POST['kelurahan'];
    $kecamatan = $_POST['kecamatan'];

    $query = mysqli_query($conn, "UPDATE alternative SET kelurahan='$kelurahan', kecamatan='$kecamatan' WHERE id='$id'");
    if ($query) {
        echo "<script>
            alert('Data berhasil diedit');
            document.location.href = 'alternative.php';
            </script>";
    } else {
        echo "<script>
            alert('Data gagal diedit');
            document.location.href = 'edit_alternative.php';
            </script>";
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
                        <h3 class="font-weight-bold">Edit Alternative</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mb-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">form Input</h4>
                        <?php
                        $id = $_GET['id'];
                        
                        $query = $conn->query("SELECT * FROM alternative WHERE id='$id'");
                        if ($query->num_rows > 0) {
                            while ($row = $query->fetch_assoc()) {
                        ?>

                        <form class="form-inline" method="POST">
                            <label class="sr-only" for="inlineFormInputName2">Kelurahan</label>
                            <div class="input-group col-md-4 mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">+</div>
                                </div>
                                <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Kelurahan" name="kelurahan" value="<?= $row['kelurahan']; ?>" required>
                            </div>
                            <label class="sr-only" for="inlineFormInputGroupUsername2">Kecamatan</label>
                            <div class="input-group col-md-4 mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">+</div>
                                </div>
                                <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Kecamatan" name="kecamatan"
                                value="<?= $row['kecamatan']; ?> " required>
                            </div>
                            <button type="button" class="btn btn-outline-warning btn-icon-text mr-sm-1 mb-2 ">
                                <i class="ti-reload btn-icon-prepend"></i>
                                Reset
                            </button>
                            <button type="submit" class="btn btn-outline-primary btn-icon-text mb-2" name="edit"><i class="ti-file btn-icon-prepend"></i>
                                Submit
                            </button>
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

</div>
<!-- page-body-wrapper ends -->

<!-- container-scroller -->
<?php include 'template/script.php' ?>