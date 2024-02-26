<?php include 'template/head.php';
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $kelurahan = $_POST['kelurahan'];
    $kepadatan_penduduk = $_POST['kepadatan_penduduk'];
    $kondisi_jalan = $_POST['kondisi_jalan'];
    $kondisi_drainase = $_POST['kondisi_drainase'];
    $kemiringan_tanah = $_POST['kemiringan_tanah'];
    $struktur_tanah = $_POST['struktur_tanah'];
    $jarak_dari_laut = $_POST['jarak_dari_laut'];
    $zona_rawan_bencana = $_POST['zona_rawan_bencana'];

    $query = $conn->query("SELECT * FROM penilaian WHERE kelurahan='$kelurahan'");

    if ($query->num_rows > 0) {
        echo "<script>
            alert('Kelurahan Sudah Diinputkan !');
            document.location.href = 'penilaian.php';
            </script>";
    } else {
        $query = mysqli_query($conn, "INSERT INTO penilaian (kelurahan,kepadatan_penduduk,kondisi_jalan,kondisi_drainase,kemiringan_tanah,struktur_tanah,jarak_dari_laut,zona_rawan_bencana) VALUES ('$kelurahan','$kepadatan_penduduk','$kondisi_jalan','$kondisi_drainase','$kemiringan_tanah','$struktur_tanah','$jarak_dari_laut','$zona_rawan_bencana')");

        if ($query) {
            echo "<script>
            alert('Data Berhasil Diinputan');
            </script>";
        } else {
            echo "<script>
            alert('Data Gagal Diinputan');
            </script>";
        }
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
                        <form class="forms-sample" method="POST">
                            <div class="form-group row">
                                <label class="col-sm-3 offset-md-2 col-form-label" for="exampleInputUsername2">
                                    <h6>Kelurahan</h6>
                                </label>
                                <div class="col-sm-5">
                                    <select name="kelurahan" id="exampleInputUsername2" class="form-control">
                                        <?php
                                        $query_kelurahan = $conn->query("SELECT * FROM alternative");
                                        if ($query_kelurahan->num_rows > 0) {
                                            while ($row = $query_kelurahan->fetch_assoc()) {
                                        ?>
                                                <option value="<?= $row['kelurahan']; ?>"><?= $row['kelurahan']; ?>
                                                </option>
                                        <?php }
                                        } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 offset-md-2 col-form-label" for="exampleInputUsername2">
                                    <h6>Kepadatan Penduduk</h6>
                                </label>
                                <div class="col-sm-5">
                                    <select name="kepadatan_penduduk" id="exampleInputUsername2" class="form-control">
                                        <option selected>---Silahkan pilih---</option>
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
                                        <option selected>---Silahkan pilih---</option>
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
                                        <option selected>---Silahkan pilih---</option>
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
                                        <option selected>---Silahkan pilih---</option>
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
                                        <option selected>---Silahkan pilih---</option>
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
                                        <option selected>---Silahkan pilih---</option>
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
                                        <option selected>---Silahkan pilih---</option>
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
                                    <button type="submit" name="simpan" class="btn btn-outline-primary btn-icon-text"><i class="ti-file btn-icon-prepend"></i>
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data Penilaian</h4>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kelurahan</th>
                                        <th>Kepadatan Penduduk</th>
                                        <th>Kondisi Jalan</th>
                                        <th>Kondisi Drainase</th>
                                        <th>Kemiringan Tanah</th>
                                        <th>Struktur Tanah</th>
                                        <th>jarak Dari Laut</th>
                                        <th>Zona Rawan Bencana</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    $query = $conn->query("SELECT * FROM penilaian");
                                    if ($query->num_rows > 0) {
                                        while ($row = $query->fetch_assoc()) {
                                    ?>
                                            <tr>
                                                <th><?= $no++; ?></th>
                                                <td><?= $row['kelurahan']; ?></td>
                                                <td><?= $row['kepadatan_penduduk']; ?></td>
                                                <td><?= $row['kondisi_jalan']; ?></td>
                                                <td><?= $row['kondisi_drainase']; ?></td>
                                                <td><?= $row['kemiringan_tanah']; ?></td>
                                                <td><?= $row['struktur_tanah']; ?></td>
                                                <td><?= $row['jarak_dari_laut']; ?></td>
                                                <td><?= $row['zona_rawan_bencana']; ?></td>
                                        <td>
                                        <a href="edit_penilaian.php?id=<?= $row['id']; ?>" class="btn btn-outline-success btn-md"><i class="ti-file btn-icon-append"></i> Edit</a>
                                        <a href="delete_penilaian.php?id=<?= $row['id']; ?>" class="btn btn-outline-danger btn-md" onclick="return confirm ('data ingin dihapus')"><i class="ti-alert btn-icon-prepend"></i> Delete</a>
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
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<?php include 'template/script.php' ?>