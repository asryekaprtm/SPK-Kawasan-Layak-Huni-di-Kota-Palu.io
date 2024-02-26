<?php include 'template/head.php';
include 'koneksi.php';
?>


<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-10 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">Proses</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Bobot</h4>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>
                                            Kepadatan Penduduk
                                        </th>
                                        <th>
                                            Kondisi Jalan
                                        </th>
                                        <th>
                                            Kondisi Drainase
                                        </th>
                                        <th>
                                            Kemiringan Tanah
                                        </th>
                                        <th>
                                            Struktur Tanah
                                        </th>
                                        <th>
                                            jarak Dari Laut
                                        </th>
                                        <th>
                                            Zona Rawan Bencana
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = mysqli_query($conn, "SELECT * FROM kriteria");
                                    if ($query->num_rows > 0) {
                                        while ($row = $query->fetch_assoc()) {

                                    ?>
                                            <tr>
                                                <td><?= $row['kepadatan_penduduk']; ?></td>
                                                <td><?= $row['kondisi_jalan']; ?></td>
                                                <td><?= $row['kondisi_drainase']; ?></td>
                                                <td><?= $row['kemiringan_tanah']; ?></td>
                                                <td><?= $row['struktur_tanah']; ?></td>
                                                <td><?= $row['jarak_dari_laut']; ?></td>
                                                <td><?= $row['zona_rawan_bencana']; ?></td>
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
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Matriks</h4>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>
                                            No
                                        </th>
                                        <th>
                                            Kelurahan
                                        </th>
                                        <th>
                                            Kepadatan Penduduk
                                        </th>
                                        <th>
                                            Kondisi Jalan
                                        </th>
                                        <th>
                                            Kondisi Drainase
                                        </th>
                                        <th>
                                            Kemiringan Tanah
                                        </th>
                                        <th>
                                            Struktur Tanah
                                        </th>
                                        <th>
                                            jarak Dari Laut
                                        </th>
                                        <th>
                                            Zona Rawan Bencana
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    $query = mysqli_query($conn, "SELECT * FROM penilaian");
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

        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Matriks Ternormalisasi</h4>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>
                                            No
                                        </th>
                                        <th>
                                            Kelurahan
                                        </th>
                                        <th>
                                            Kepadatan Penduduk
                                        </th>
                                        <th>
                                            Kondisi Jalan
                                        </th>
                                        <th>
                                            Kondisi Drainase
                                        </th>
                                        <th>
                                            Kemiringan Tanah
                                        </th>
                                        <th>
                                            Struktur Tanah
                                        </th>
                                        <th>
                                            jarak Dari Laut
                                        </th>
                                        <th>
                                            Zona Rawan Bencana
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1 ;
                                    $maxc1 = null;
                                    $maxc2 = null;
                                    $maxc3 = null;
                                    $maxc4 = null;
                                    $maxc5 = null;
                                    $maxc6 = null;
                                    $maxc7 = null;
                                    //nilai maks
                                    $queryc1 = mysqli_query($conn, "SELECT MAX(kepadatan_penduduk) FROM penilaian");
                                    if ($queryc1->num_rows > 0) {
                                        $row = $queryc1->fetch_row();
                                        $maxc1 = $row[0];
                                    }
                                    $queryc2 = mysqli_query($conn, "SELECT MAX(kondisi_jalan) FROM penilaian");
                                    if ($queryc2->num_rows > 0) {
                                        $row = $queryc2->fetch_row();
                                        $maxc2 = $row[0];
                                    }
                                    $queryc3 = mysqli_query($conn, "SELECT MAX(kondisi_drainase) FROM penilaian");
                                    if ($queryc3->num_rows > 0) {
                                        $row = $queryc3->fetch_row();
                                        $maxc3 = $row[0];
                                    }
                                    $queryc4 = mysqli_query($conn, "SELECT MAX(kemiringan_tanah) FROM penilaian");
                                    if ($queryc4->num_rows > 0) {
                                        $row = $queryc4->fetch_row();
                                        $maxc4 = $row[0];
                                    }
                                    $queryc5 = mysqli_query($conn, "SELECT MAX(struktur_tanah) FROM penilaian");
                                    if ($queryc5->num_rows > 0) {
                                        $row = $queryc5->fetch_row();
                                        $maxc5 = $row[0];
                                    }
                                    $queryc6 = mysqli_query($conn, "SELECT MAX(jarak_dari_laut) FROM penilaian");
                                    if ($queryc6->num_rows > 0) {
                                        $row = $queryc6->fetch_row();
                                        $maxc6 = $row[0];
                                    }
                                    $queryc7 = mysqli_query($conn, "SELECT MAX(zona_rawan_bencana) FROM penilaian");
                                    if ($queryc7->num_rows > 0) {
                                        $row = $queryc7->fetch_row();
                                        $maxc7 = $row[0];
                                    }
                                    //nilai terkecil
                                    $minc1 = null;
                                    $minc2 = null;
                                    $minc3 = null;
                                    $minc4 = null;
                                    $minc5 = null;
                                    $minc6 = null;
                                    $minc7 = null;

                                    $queryc1 = mysqli_query($conn, "SELECT MIN(kepadatan_penduduk) FROM penilaian");
                                    if ($queryc1->num_rows > 0) {
                                        $row = $queryc1->fetch_row();
                                        $minc1 = $row[0];
                                    }
                                    $queryc2 = mysqli_query($conn, "SELECT MIN(kondisi_jalan) FROM penilaian");
                                    if ($queryc2->num_rows > 0) {
                                        $row = $queryc2->fetch_row();
                                        $minc2 = $row[0];
                                    }
                                    $queryc3 = mysqli_query($conn, "SELECT MIN(kondisi_drainase) FROM penilaian");
                                    if ($queryc3->num_rows > 0) {
                                        $row = $queryc3->fetch_row();
                                        $minc3 = $row[0];
                                    }
                                    $queryc4 = mysqli_query($conn, "SELECT MIN(kemiringan_tanah) FROM penilaian");
                                    if ($queryc4->num_rows > 0) {
                                        $row = $queryc4->fetch_row();
                                        $minc4 = $row[0];
                                    }
                                    $queryc5 = mysqli_query($conn, "SELECT MIN(struktur_tanah) FROM penilaian");
                                    if ($queryc5->num_rows > 0) {
                                        $row = $queryc5->fetch_row();
                                        $minc5 = $row[0];
                                    }
                                    $queryc6 = mysqli_query($conn, "SELECT MIN(jarak_dari_laut) FROM penilaian");
                                    if ($queryc6->num_rows > 0) {
                                        $row = $queryc6->fetch_row();
                                        $minc6 = $row[0];
                                    }
                                    $queryc7 = mysqli_query($conn, "SELECT MIN(zona_rawan_bencana) FROM penilaian");
                                    if ($queryc7->num_rows > 0) {
                                        $row = $queryc7->fetch_row();
                                        $minc7 = $row[0];
                                    }
                                    $truncate = mysqli_query($conn, "TRUNCATE TABLE m_ternormalisasi");

                                    $query = mysqli_query($conn, "SELECT * FROM penilaian");
                                    if ($query->num_rows > 0) {
                                        while ($row = $query->fetch_assoc()) {
                                            $kelurahan = $row['kelurahan'];
                                            $m_c1 = $minc1 / $row['kepadatan_penduduk'];
                                            $m_c2 = $row['kondisi_jalan'] / $maxc2;
                                            $m_c3 = $row['kondisi_drainase'] / $maxc3;
                                            $m_c4 = $minc4 / $row['kemiringan_tanah'];
                                            $m_c5 = $minc5 / $row['struktur_tanah'];
                                            $m_c6 = $row['jarak_dari_laut'] / $maxc6;
                                            $m_c7 = $row['zona_rawan_bencana'] / $maxc7;

                                            $insert_ternormalisasi = mysqli_query($conn, "INSERT INTO  m_ternormalisasi(kelurahan,c1,c2,c3,c4,c5,c6,c7) VALUES ('$kelurahan','$m_c1','$m_c2','$m_c3','$m_c4','$m_c5','$m_c6','$m_c7') ");
                                        }
                                    }
                                    $query_m = mysqli_query($conn, "SELECT * FROM m_ternormalisasi");


                                    //cek data
                                    if ($query_m->num_rows > 0) {
                                        while ($row = $query_m->fetch_assoc()) {
                                    ?>
                                            <tr>
                                                <th><?= $no++; ?></th>
                                                <td><?= $row['kelurahan']; ?></td>
                                                <td><?= $row['c1']; ?></td>
                                                <td><?= $row['c2']; ?></td>
                                                <td><?= $row['c3']; ?></td>
                                                <td><?= $row['c4']; ?></td>
                                                <td><?= $row['c5']; ?></td>
                                                <td><?= $row['c6']; ?></td>
                                                <td><?= $row['c7']; ?></td>
                                            </tr>
                                    <?php }
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Nilai Qi</h4>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>
                                            No
                                        </th>
                                        <th>
                                            Kelurahan
                                        </th>
                                        <th>
                                            Nilai Qi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    $kriteria1 = null;
                                    $kriteria2 = null;
                                    $kriteria3 = null;
                                    $kriteria4 = null;
                                    $kriteria5 = null;
                                    $kriteria6 = null;
                                    $kriteria7 = null;
                                    $kriteria = mysqli_query($conn, "SELECT * FROM kriteria");
                                    if ($kriteria->num_rows > 0) {
                                        $row = $kriteria->fetch_assoc();
                                        $kriteria1 = $row['kepadatan_penduduk'];
                                        $kriteria2 = $row['kondisi_jalan'];
                                        $kriteria3 = $row['kondisi_drainase'];
                                        $kriteria4 = $row['kemiringan_tanah'];
                                        $kriteria5 = $row['struktur_tanah'];
                                        $kriteria6 = $row['jarak_dari_laut'];
                                        $kriteria7 = $row['zona_rawan_bencana'];
                                    }
                                    $truncate = mysqli_query($conn, "TRUNCATE TABLE hasil");
                                    $no = 1;

                                    $query_m = $conn->query("SELECT * FROM m_ternormalisasi ");

                                    if ($query_m->num_rows > 0) {
                                        while ($row = $query_m->fetch_assoc()) {
                                            $kelurahan = $row['kelurahan'];
                                            $qi = (0.5 * (($row['c1'] * $kriteria1) + ($row['c2'] * $kriteria2) + ($row['c3'] * $kriteria3) + ($row['c4'] * $kriteria4) + ($row['c5'] * $kriteria5) + ($row['c6'] * $kriteria6) + ($row['c7'] * $kriteria7)));

                                            $q2 = (0.5 * ((pow($row['c1'], $kriteria1)) + (pow($row['c2'], $kriteria2)) + (pow($row['c3'], $kriteria3)) + (pow($row['c4'], $kriteria4)) + (pow($row['c5'], $kriteria5))+(pow($row['c6'], $kriteria6))+(pow($row['c7'], $kriteria7))));
                                            $total_qi = $qi + $q2;

                                            $insert_qi = $conn->query("INSERT INTO hasil(kelurahan,nilai_qi) VALUES ('$kelurahan','$total_qi')");
                                        }
                                    }
                                    $no = 1;
                                    $hasil = $conn->query("SELECT * FROM hasil ORDER BY nilai_qi desc");
                                    if ($hasil->num_rows > 0) {
                                        while ($row = $hasil->fetch_assoc()) {
                                    ?>
                                            <tr>
                                                <th><?= $no++; ?></th>
                                                <td><?= $row['kelurahan']; ?></td>
                                                <td><?= $row['nilai_qi']; ?></td>
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
        <?php include 'template/footer.php' ?>
        <!-- partial -->
    </div>
    <!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<?php include 'template/script.php' ?>