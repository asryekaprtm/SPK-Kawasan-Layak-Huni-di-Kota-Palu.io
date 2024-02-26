<?php include 'template/head.php' ?>

<?php

include 'koneksi.php';

$panggil = $conn->query("SELECT kelurahan FROM alternative");
$panggilx = $panggil->num_rows;
$panggil1 = $conn->query("SELECT kecamatan FROM alternative");
$panggilxx = $panggil1->num_rows;
?>


<!-- Content -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">

            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">Welcome <?php echo $_SESSION['nama_user']; ?></h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-6 mt-5 grid-margin stretch-card">
                <div class="card tale-bg">
                    <div class="card-people mt-1">
                        <img src="asset/images/dashboard/3(5).png" alt="people">
                        <div class="weather-info">
                            <div class="d-flex">
                                <div>
                                    <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>31<sup>C</sup></h2>
                                </div>
                                <div class="ml-2">
                                    <h3 class="location font-weight-normal">Palu</h3>
                                    <h4 class="font-weight-normal">Sulawesi Tengah</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 grid-margin transparent">
                <div class="row">
                    <div class="col-md-12 mb-7 mt-5 stretch-card transparent">
                        <div class="card card-tale">
                            <div class="card-body">
                                <p class="mb-12 mt-3" style="text-align: justify;">Kota Palu, ibukota Provinsi Sulawesi Tengah tercatat sebagai daerah rawan gempa karena memiliki aktivitas tektonik tertinggi di Indonesia. Pasalnya, di Kota Palu terdapat patahan kerak Bumi (sesar) berdimensi cukup besar yang dikenal dengan nama sesar Palu- Koro. Sesar Palu-Koro memanjang sekitar 500 kilometer mulai dari Selat Makassar sampai Pantai Utara Teluk Bone. Pada Kota Palu, sesar melintas dari Teluk Palu masuk ke wilayah daratan, memotong jantung kota sampai ke Sungai Lariang di Lembah Pipikoro. Kejadian bencana gempa bumi pada tanggal 28 September 2018 yang diikuti bencana tsunami, dan likuifaksi di Kota Palu memberikan dampak kerugian dan korban jiwa yang besar. Pembangunan kawasan permukiman yang tidak terkendali dan tanpa memperhatikan potensi bencana hanya akan menimbulkan kerusakan dan korban jiwa yang besar apabila terjadi bencana di daerah tersebut. Bencana alam adalah sesuatu yang sulit diprediksi kapan terjadinya, namun dapat menyebabkan kerugian dan korban jiwa yang besar</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    <?php include 'template/footer.php' ?>
    <!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<?php include 'template/script.php' ?>