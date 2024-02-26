<?php include 'template/header.php';
include 'admin/koneksi.php';
?>
<main id="main">
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2 style="color:#0099ff; font-size:35px">TOP 20 KAWASAN LAYAK HUNI DI KOTA PALU</h2>
            </div>
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
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

                                                $q2 = (0.5 * ((pow($row['c1'], $kriteria1)) + (pow($row['c2'], $kriteria2)) + (pow($row['c3'], $kriteria3)) + (pow($row['c4'], $kriteria4)) + (pow($row['c5'], $kriteria5)) + (pow($row['c6'], $kriteria6)) + (pow($row['c7'], $kriteria7))));
                                                $total_qi = $qi + $q2;

                                                $insert_qi = $conn->query("INSERT INTO hasil(kelurahan,nilai_qi) VALUES ('$kelurahan','$total_qi')");
                                            }
                                        }
                                        $no = 1;
                                        $hasil = $conn->query("SELECT * FROM hasil ORDER BY nilai_qi desc");
                                        if ($hasil->num_rows > 0) {
                                            while ($row = $hasil->fetch_assoc()) {
                                        ?>
                                                <tr style="background-color:#34B3F1;">
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
        </div>
    </section><!-- End About Section -->
</main>

<?php include 'template/footer.php' ?>