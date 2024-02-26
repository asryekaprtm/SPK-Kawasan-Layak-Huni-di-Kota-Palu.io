<?php include 'template/head.php';
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $kepadatan_penduduk = $_POST['kepadatan_penduduk'];
    $kondisi_jalan = $_POST['kondisi_jalan'];
    $kondisi_drainase = $_POST['kondisi_drainase'];
    $kemiringan_tanah = $_POST['kemiringan_tanah'];
    $struktur_tanah = $_POST['struktur_tanah'];
    $jarak_dari_laut = $_POST['jarak_dari_laut'];
    $zona_rawan_bencana = $_POST['zona_rawan_bencana'];

    $query = mysqli_query($conn, "SELECT * FROM kriteria");

    if ($query->num_rows > 0) {
        echo "<script>
            alert('Bobot tidak dapat lebih dari satu !');
            </script>";
    } else {
        $query = mysqli_query($conn, "INSERT INTO kriteria (kepadatan_penduduk,kondisi_jalan,kondisi_drainase,kemiringan_tanah,struktur_tanah,jarak_dari_laut,zona_rawan_bencana) VALUES ('$kepadatan_penduduk','$kondisi_jalan','$kondisi_drainase','$kemiringan_tanah','$struktur_tanah','$jarak_dari_laut','$zona_rawan_bencana')");

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
                        <h3 class="font-weight-bold">Kriteria</h3>
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
                                <label for="exampleInputUsername2" class="col-sm-3 offset-md-2 col-form-label">
                                    <h6>Kepadatan Penduduk</h6>
                                </label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="exampleInputUsername2" name="kepadatan_penduduk" placeholder="Kepadatan Penduduk" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 offset-md-2 col-form-label">
                                    <h6>Kondisi Jalan</h6>
                                </label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="exampleInputUsername2" name="kondisi_jalan" placeholder="Kondisi Jalan" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 offset-md-2 col-form-label">
                                    <h6>Kondisi Drainase</h6>
                                </label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="exampleInputUsername2" name="kondisi_drainase" placeholder="Kondisi Drainase" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 offset-md-2 col-form-label">
                                    <h6>Kemiringan Tanah</h6>
                                </label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="exampleInputUsername2" name="kemiringan_tanah" placeholder="Kemiringan Tanah" required>
                                </div>
                                </div>
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 offset-md-2 col-form-label">
                                    <h6>Struktur Tanah</h6>
                                </label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="exampleInputUsername2" name="struktur_tanah" placeholder="Struktur Tanah" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 offset-md-2 col-form-label">
                                    <h6>Jarak Dari Laut</h6>
                                </label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="exampleInputUsername2" name="jarak_dari_laut" placeholder="Jarak Dari laut" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 offset-md-2 col-form-label">
                                    <h6>Zona Rawan Bencana</h6>
                                </label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="exampleInputUsername2" name="zona_rawan_bencana" placeholder="Zona Rawan Bencana" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 offset-md-5">
                                    <button type="button" class="btn btn-outline-warning btn-icon-text">
                                        <i class="ti-reload btn-icon-prepend"></i>
                                        Reset
                                    </button>
                                    <button type="submit" class="btn btn-outline-primary btn-icon-text" name="simpan"><i class="ti-file btn-icon-prepend" ></i>
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
                        <h4 class="card-title">Data Kriteria</h4>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
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
                                $query = $conn->query("SELECT * FROM kriteria");
                                if ($query->num_rows > 0) {
                                    while ($row = $query->fetch_assoc()) {
                                ?>
                                    <tr>
                                        <th><?= $no++; ?></th>
                                        <td><?= $row['kepadatan_penduduk']; ?></td>
                                        <td><?= $row['kondisi_jalan']; ?></td>
                                        <td><?= $row['kondisi_drainase']; ?></td>
                                        <td><?= $row['kemiringan_tanah']; ?></td>
                                        <td><?= $row['struktur_tanah']; ?></td>
                                        <td><?= $row['jarak_dari_laut']; ?></td>
                                        <td><?= $row['zona_rawan_bencana']; ?></td>
                                        <td>
                                        <a href="delete_kriteria.php?id=<?= $row['id']; ?>" class="btn btn-outline-danger btn-md" onclick="return confirm ('data ingin dihapus')"><i class="ti-alert btn-icon-prepend"></i> Delete</a>
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