<?php
include 'template/head.php';
include 'koneksi.php';

if (isset($_POST['edit'])) {
    $id = $_GET['id'];
    $kelurahan = $_POST['kelurahan'];
    $kepadatan_penduduk = $_POST['kepadatan_penduduk'];
    $kondisi_jalan = $_POST['kondisi_jalan'];
    $kondisi_drainase = $_POST['kondisi_drainase'];
    $kemiringan_tanah = $_POST['kemiringan_tanah'];
    $struktur_tanah = $_POST['struktur_tanah'];
    $jarak_dari_laut = $_POST['jarak_dari_laut'];
    $zona_rawan_bencana = $_POST['zona_rawan_bencana'];

    $query = mysqli_query($conn, "UPDATE penilaian SET kelurahan='$kelurahan', kepadatan_penduduk='$kepadatan_penduduk', kondisi_jalan= '$kondisi_jalan',kondisi_drainase= '$kondisi_drainase',kemiringan_tanah= '$kemiringan_tanah',
    struktur_tanah= '$struktur_tanah',jarak_dari_laut= '$jarak_dari_laut',zona_rawan_bencana= '$zona_rawan_bencana' WHERE id='$id'");

    if ($query) {
        echo "<script>
            alert('Data berhasil diedit');
            document.location.href = 'penilaian.php';
            </script>";
    } else {
        echo "<script>
            alert('Data gagal diedit');
            document.location.href = 'edit_penilaian.php';
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
                        <h3 class="font-weight-bold">Penilaian</h3>
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

                        $query = $conn->query("SELECT * FROM penilaian WHERE id='$id'");
                        if ($query->num_rows > 0) {
                            while ($row = $query->fetch_assoc()) {
                        ?>
                                <form class="forms-sample" method="POST">
                                    <div class="form-group row">
                                        <label class="col-sm-3 offset-md-2 col-form-label" for="exampleInputUsername2">
                                            <h6>Kelurahan</h6>
                                        </label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" value="<?= $row['kelurahan']; ?>" id="inlineFormInputGroupUsername2" placeholder="Kelurahan" name="kelurahan" required>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 offset-md-2 col-form-label" for="exampleInputUsername2">
                                            <h6>Kepadatan Penduduk</h6>
                                        </label>
                                        <div class="col-sm-5">
                                            <select name="kepadatan_penduduk" id="exampleInputUsername2" class="form-control">
                                                <option selected><?= $row['kepadatan_penduduk']; ?></option>
                                                <option value="1">Kepadatan Sangat Tinggi</option>
                                                <option value="2">Kepadatan Tinggi</option>
                                                <option value="3">Kepadatan Sedang</option>
                                                <option value="4">Kepadatan Rendah</option>
                                                <option value="5">Kepadatan Sangat Rendah</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInputUsername2" class="col-sm-3 offset-md-2 col-form-label">
                                            <h6>Kondisi Jalan</h6>
                                        </label>
                                        <div class="col-sm-5">
                                            <select name="kondisi_jalan" id="exampleInputUsername2" class="form-control">
                                                <option selected><?= $row['kondisi_jalan']; ?></option>
                                                <option value="5">Sangat Baik</option>
                                                <option value="4">Baik</option>
                                                <option value="3">Sedang</option>
                                                <option value="2">Rusak</option>
                                                <option value="1">Sangat Rusak</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInputUsername2" class="col-sm-3 offset-md-2 col-form-label">
                                            <h6>Kondisi Drainase</h6>
                                        </label>
                                        <div class="col-sm-5">
                                            <select name="kondisi_drainase" id="exampleInputUsername2" class="form-control">
                                                <option selected><?= $row['kondisi_drainase']; ?></option>
                                                <option value="5">Sangat Baik</option>
                                                <option value="4">Baik</option>
                                                <option value="3">Sedang</option>
                                                <option value="2">Buruk</option>
                                                <option value="1">Sangat Buruk</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInputUsername2" class="col-sm-3 offset-md-2 col-form-label">
                                            <h6>Kemiringan Tanah</h6>
                                        </label>
                                        <div class="col-sm-5">
                                            <select name="kemiringan_tanah" id="exampleInputUsername2" class="form-control">
                                                <option selected><?= $row['kemiringan_tanah']; ?></option>
                                                <option value="1">Sangat Curam</option>
                                                <option value="2">Curam</option>
                                                <option value="3">Sedikit Curam</option>
                                                <option value="4">Landai</option>
                                                <option value="5">Datar</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInputUsername2" class="col-sm-3 offset-md-2 col-form-label">
                                            <h6>Struktur Tanah</h6>
                                        </label>
                                        <div class="col-sm-5">
                                            <select name="struktur_tanah" id="exampleInputUsername2" class="form-control">
                                                <option selected><?= $row['struktur_tanah']; ?></option>
                                                <option value="1">Tanah Padat</option>
                                                <option value="2">Bertanah</option>
                                                <option value="3">Sedikit Berpasir</option>
                                                <option value="4">Berpasir</option>
                                                <option value="5">Sangat Berpasir</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInputUsername2" class="col-sm-3 offset-md-2 col-form-label">
                                            <h6>Jarak Dari Laut</h6>
                                        </label>
                                        <div class="col-sm-5">
                                            <select name="jarak_dari_laut" id="exampleInputUsername2" class="form-control">
                                                <option selected><?= $row['jarak_dari_laut']; ?></option>
                                                <option value="5">Sangat Jauh</option>
                                                <option value="4">jauh</option>
                                                <option value="3">Sedang</option>
                                                <option value="2">Dekat</option>
                                                <option value="1">Sangat Dekat</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInputUsername2" class="col-sm-3 offset-md-2 col-form-label">
                                            <h6>Zona Rawan Bencana</h6>
                                        </label>
                                        <div class="col-sm-5">
                                            <select name="zona_rawan_bencana" id="exampleInputUsername2" class="form-control">
                                                <option selected><?= $row['zona_rawan_bencana']; ?></option>
                                                <option value="5">Sangat Tidak Rawan</option>
                                                <option value="4">Tidak Rawan</option>
                                                <option value="3">Sedang</option>
                                                <option value="2">Rawan</option>
                                                <option value="1">Sangat Rawan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 offset-md-5">
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