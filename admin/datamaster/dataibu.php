<link rel="stylesheet" href="/assets/css/tabeladmin.css">
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

<div class="framesubmain">

    <div class="tablesubmain">
        <h3>Data Ibu</h3>
        <div class="btn-container">
            <button class="button-bg" type="button" id="openPopupibu">
                <img src="/assets/imgs/plus.png" alt="">
                <h6 class="btnplus" style="font-size: 9px;">Tambah data</h6>
            </button>
            <div class="kanan">
                <div class="search">
                    <label>
                        <input style="color: #C2C4C6;" type="text" placeholder="Pencarian...">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <button class="button-bg-1" type="button">
                    <!-- <ion-icon name="search-outline"></ion-icon> -->
                    <h6>Filter tanggal</h6>
                </button>
            </div>
        </div>
        <div class="tb-container">
            <table>
                <!-- judul kolom -->
                <tr class="sticky-header">
                    <th>No</th>
                    <th>NIK</th>
                    <th>Nama Ibu</th>
                    <th>Nama Suami</th>
                    <th>RT/RW</th>
                    <th>Nomor telepon</th>
                    <th>Pos</th>
                    <th>Aksi</th>
                </tr>
                <!-- isi kolom -->
                <?php
                for ($i = 1; $i <= 100; $i++) {
                    echo '<tr>';
                    for ($j = 1; $j <= 8; $j++) {
                        if ($j === 8) {
                            echo '<td>
                                <span class="btn-action">
                                    <a href="#" class="efk-edit">
                                    <div class="lg-action-edit">
                <img src="/assets/imgs/edit.png" alt="edit">
                </div>
                                    </a>
                                    <a href="#" class="efk-hapus">
                                    <div class="lg-action-hapus">
                                    <img src="/assets/imgs/hapus.png" alt="hapus">
                                    </div>
                                    </a>
                                </span>
                            </td>';
                        } else {
                            echo "<td>$i</td>";
                        }
                    }
                    echo '</tr>';
                }

                ?>

            </table>
        </div>
        <div class=" p-kanan-1">
            <button class="button-bg-green" type="button">Cetak</button>
        </div>



    </div>

</div>


<div class="popup" id="popupibu">
    <div class="popup-content">
        <span class="close" id="closePopupibu">&times;</span>
        <!-- Isi form tambah data -->
        <?php include 'inputan/tambahibu.php'; ?>
    </div>
</div>

<script src="/assets/js/main.js"></script>