<div class="m-3">
    <h1><b>Dashboard</b></h1>
    <div class="row">
        <div class="col-xl-6">
            <div class="row p-2">
                <div class="col-6 mb-4">
                    <div class="card border-info p-3" style="border-radius: 20px; background-color:#fff;">
                        <div class="card-body d-flex justify-content-between">
                            <div class="col-sm-3">
                                <img src="/assets/imgs/playtime.png" alt="Icon 1" width="80" height="80">
                            </div>
                            <div class="ms-4">
                                <h5 class="card-title">Data <b>Anak</b></h5>
                                <p class="card-text">Total jumlah Anak keseluruhan.</p>
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                                <h1 class="pt-2">
                                    <b>
                                        <?php foreach ($jumlahanak as $row) : ?>
                                            <?= $row["jumlah_anak"]; ?>
                                        <?php endforeach; ?>
                                    </b>
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 ">
                    <div class="card border-info p-3" style="border-top-right-radius: 20px;">
                        <div class="card-body d-flex justify-content-between">
                            <div class="col-sm-3">
                                <img src="/assets/imgs/mother.png" alt="Icon 1" width="80" height="80">
                            </div>
                            <div class="ms-4">
                                <h5 class="card-title">Data <b>Ibu melahirkan</b></h5>
                                <p class="card-text" style="font-size: 8px;">Total jumlah ibu melahirkan keseluruhan.</p>
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                                <h1 class="pt-2 ps-2">
                                    <b>
                                        <?php foreach ($jumlahibumelahirkan as $row) : ?>
                                            <?= $row["jumlah_ibumelahirkan"]; ?>
                                        <?php endforeach; ?>
                                    </b>
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 ">
                    <div class="card border-info p-3" style="border-bottom-left-radius: 20px;">
                        <div class="card-body d-flex justify-content-between">
                            <div class="col-sm-3 mx-2">
                                <img src="/assets/imgs/immune.png" alt="Icon 1" width="80" height="80">
                            </div>
                            <div class="ms-4">
                                <h5 class="card-title">Data <b>imunisasi</b></h5>
                                <p class="card-text" style="font-size: 8px;">Total jumlah imunisasi yang diberikan.</p>
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                                <h1 class="pt-2 ps-2">
                                    <b>
                                        <?php foreach ($jumlahimunisasi as $row) : ?>
                                            <?= $row["jumlah_imunisasi"]; ?>
                                        <?php endforeach; ?>
                                    </b>
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 ">
                    <div class="card border-info p-3" style="border-radius: 20px;">
                        <div class="card-body d-flex justify-content-between">
                            <div class="col-sm-3 mx-2">
                                <img src="/assets/imgs/user.png" alt="Icon 1" width="80" height="80">
                            </div>
                            <div class="ms-4">
                                <h5 class="card-title">Data <b>user</b></h5>
                                <p class="card-text" style="font-size: 10px;">Total jumlah user yang login.</p>
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                                <h1 class="pt-2">
                                    <b>
                                        <?php foreach ($jumlahuser as $row) : ?>
                                            <?= $row["jumlah_user"]; ?>
                                        <?php endforeach; ?>
                                    </b>
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="row">
                <div class="col-xl-12 ">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="p-2">
                                <div class="card-body d-flex justify-content-between p-5" style=" background:linear-gradient(45deg,#6FB1FC,#4364F7,#0052D4); border-radius: 40px;">
                                    <div class="ms-5 d-flex flex-column justify-content-center">
                                        <h1 class="card-title text-white"><b>E-Posyandu</b></h1>
                                        <p class="card-text text-white pe-5">
                                            Selamat datang di <b>E-Posyandu</b>! <br>Apliksi yang hadir untuk membantu manajemen data posyandu di desa anda.

                                        </p>
                                    </div>
                                    <div class="col-sm-3 m-3">
                                        <img src="/assets/imgs/komset.png" alt="Icon 1" width="`180" height="180">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>





















    <!-- yang bawah -->
    <div class="row ">
        <div class="col pt-3">
            <div class="p-4 card border-info" style=" border-radius: 40px;">
                <h3 class="mb-3"><b>Tabel</b> Status</h3>
                <!-- <p style="font-size: 8px;">Melihat siapa saja yang aktif menggunakan E-Posyandu</p> -->
                <div class="tableFixHead2 ">
                    <table class="table align-middle mb-0">
                        <thead class="bg-white">
                            <tr>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Position</th>
                                <!-- <th class="pagedatamaster" >Actions</th> -->
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($lihatkeaktifan as $row) : ?> 
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="/assets/imgs/<?= $row["foto"]; ?>" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                                        <div class="ms-3">
                                            <p class="fw-bold mb-1"><?= $row["nama"]; ?></p>
                                            <p class="text-muted mb-0"><?= $row["email"]; ?></p>
                                        </div>
                                    </div>
                                </td>

                                <td>
                                    <span class="badge rounded-pill bg-success"><?= $row["status_active"]; ?></span>
                                </td>
                                <td><?= $row["posisi"]; ?></td>
                                <!-- <td class="pagedatamaster">
                                    <button type="button" class="btn btn-outline-primary" style="border-radius: 20px; width: 70px;" id="openPopupfilteredit">
                                        Edit
                                    </button>
                                </td> -->
                            </tr>
  <?php endforeach; ?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col pt-3" style=" height:200px;">
            <div class="card  border-info" style=" border-radius: 40px;">
                <div class="border-info p-5 d-flex justify-content">
                    <div class="col-5" style="height: 220px;">
                        <canvas id="myChart" 

                        <?php foreach ($berat2_6 as $row) : ?> 
                            data-data_2_6="<?= $row["jumlah_data"]; ?> "
                        <?php endforeach; ?>

                        <?php foreach ($berat7_9 as $row) : ?> 
                            data-data_7_9="<?= $row["jumlah_data"]; ?> "
                        <?php endforeach; ?>

                        <?php foreach ($berat10_13 as $row) : ?> 
                            data-data_10_13="<?= $row["jumlah_data"]; ?> "
                        <?php endforeach; ?>

                        <?php foreach ($berat14_17 as $row) : ?> 
                            data-data_14_17="<?= $row["jumlah_data"]; ?> "
                        <?php endforeach; ?>

                        <?php foreach ($berat18_20 as $row) : ?> 
                            data-data_18_20="<?= $row["jumlah_data"]; ?> "
                        <?php endforeach; ?>

                        <?php foreach ($berat21_23 as $row) : ?> 
                            data-data_21_23="<?= $row["jumlah_data"]; ?> "
                        <?php endforeach; ?>
                            
                            >
                        </canvas>
                    </div>
                    <div class="col-7 d-flex flex-column justify-content">
                        <h5>Perkembangan<b> Berat Anak</b></h5>
                        <p style="font-size: 7px;"><b>Usia 0-12 Bulan (0-1 Tahun):</b><br>
                            Rata-rata berat badan bayi baru lahir sekitar 2,5-4,5 kg. <br>
                            Bayi dapat mengalami peningkatan berat badan hingga sekitar dua kali lipat pada bulan keenam dan tiga kali lipat pada usia 1 tahun. <br>
                            Sebagai acuan umum, berat badan bayi pada usia 12 bulan bisa berkisar antara 7-9 kg.
                        </p>
                        <p style="font-size: 7px;"><b>Usia 13-36 Bulan (1-3 Tahun):</b><br>
                            Anak-anak di usia ini akan terus mengalami pertumbuhan pesat, meskipun lajunya akan melambat dibandingkan dengan tahun pertama kehidupan. <br>
                            Rata-rata, berat badan anak pada usia 2 tahun dapat berkisar antara 10-13 kg. <br>
                            Pada usia 3 tahun, berat badan anak dapat berkisar antara 14-17 kg.
                        </p>
                        <p style="font-size: 7px;"><b>Usia 37-60 Bulan (3-5 Tahun):</b><br>
                            Pertumbuhan berat badan anak akan terus melambat, dan berat badan akan menjadi lebih stabil. <br>
                            Rata-rata, berat badan anak pada usia 4 tahun dapat berkisar antara 18-20 kg. <br>
                            Pada usia 5 tahun, berat badan anak dapat berkisar antara 21-23 kg.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>



<div class="popup" id="popupfilteredit">
    <div class="popup-content">
        <span class="close" id="closePopupfilteredit" style="float: right;">&times;</span>
        <!-- Isi form filter data -->
        <?php include 'inputan/editblokir.php'; ?>
    </div>
</div>






















<script>
    document.addEventListener("DOMContentLoaded", function() {
    const ctx = document.getElementById('myChart');
    const berat2_6Data = parseInt(ctx.dataset.data_2_6); 
    const berat7_9Data = parseInt(ctx.dataset.data_7_9); 
    const berat10_13Data = parseInt(ctx.dataset.data_10_13); 
    const berat14_17Data = parseInt(ctx.dataset.data_14_17); 
    const berat18_20Data = parseInt(ctx.dataset.data_18_20); 
    const berat21_23Data = parseInt(ctx.dataset.data_21_23); 

    new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['berat 2,5-4,5 kg', 'berat 7-9 kg', 'berat 10-13 kg', 'berat 14-17 kg', 'berat 18-20 kg', 'berat 21-23 kg'],
            datasets: [{
                label: 'Jumlah Anak',
                data: [
                    berat2_6Data,
                    berat7_9Data, 
                    berat10_13Data, 
                    berat14_17Data, 
                    berat18_20Data, 
                    berat21_23Data
                ],
                borderWidth: 1
            }]
        },
        options: {
            plugins: {
                legend: {
                    display: false, // Menyembunyikan legend
                },
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
});

</script>