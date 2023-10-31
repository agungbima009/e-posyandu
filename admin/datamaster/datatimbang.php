<div class="framesubmain">

    <div class="tablesubmain">
        <h2>Data <b>Penimbangan</b></h2>

        <nav class="nav nav-tabs " id="myTabs">
            <button type="button" class="nav-link active" data-bs-toggle="tab" data-bs-target="#bayi-1">
                Penimbangan bayi 0-12bln
            </button>
            <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#bayi-2">
                Penimbangan bayi 13-36bln
            </button>
            <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#bayi-3">
                Penimbangan bayi 37-60bln
            </button>
        </nav>
        <div class="tab-content">


            <!--======================================= bayi 0-12 ================================================ -->
            <div class="tab-pane active show fade" id="bayi-1">
                <div class="container-xl">
                    <div class="table-responsive">
                        <div class="table-wrapper">
                            <div class="table-title">
                                <div class="row">
                                    <div class="col-sm-8 mt-3">

                                        <button type="button" class="btn btn-primary text-white " style="border-radius: 15px;" id="openPopupimubayi1timbang">
                                            <i class="bi bi-plus-circle-fill" aria-hidden="true"></i>
                                            <b> Tambah</b>
                                        </button>
                                    </div>
                                    <div class="col-sm-4 mt3">

                                        <div class="search-box ms-6 mx-3">
                                            <i class="material-icons">&#xE8B6;</i>
                                            <input type="text" class="form-control" placeholder="Search&hellip;">
                                        </div>
                                        <button type="button" class="btn btn-primary text-white h-75" style="border-radius: 15px;" id="openPopupfilterimubayi1timbang">
                                            <i class="bi bi-funnel-fill" aria-hidden="true"></i>
                                            Filter
                                        </button>
                                        <button type="button" class="btn btn-danger text-white h-75" style="border-radius: 15px;">
                                            <i class="bi bi-filetype-pdf" aria-hidden="true"></i>
                                        </button>
                                        <button type="button" class="btn btn btn-success text-white h-75" style="border-radius: 15px;">
                                            <i class="bi bi-file-earmark-excel" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="tableFixHead ">
                                <table id="printdataanak" class="table table-striped table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIK <i class="fa fa-sort"></i></th>
                                            <th>Nama Bayi</th>
                                            <th>Tanggal lahir<i class="fa fa-sort"></i></th>
                                            <th>BBL(kg)</th>
                                            <th>Nama Ayah</th>
                                            <th>Nama Ibu</th>
                                            <th>Tanggal Timbang<i class="fa fa-sort"></i></th>
                                            <th>Hasil Timbang</th>
                                            <th>pos</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        for ($i = 1; $i <= 15; $i++) {
                                            echo '<tr>';
                                            echo "<td>$i</td>";
                                            echo '<td>Thomas Hardy</td>';
                                            echo '<td>89 Chiaroscuro Rd.</td>';
                                            echo '<td>Portland</td>';
                                            echo '<td>97219</td>';
                                            echo '<td>USA</td>';
                                            echo '<td>USA</td>';
                                            echo '<td>USA</td>';
                                            echo '<td>USA</td>';
                                            echo '<td>USA</td>';
                                            echo '<td>
       
                                  <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                     <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                                        </td>';
                                            echo '</tr>';
                                        }
                                        ?>
                                    </tbody>

                                </table>
                            </div>
                            <div class="clearfix">
                                <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                                <ul class="pagination">
                                    <li class="page-item disabled"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                                    <li class="page-item"><a href="#" class="page-link"><i class="fa fa-angle-double-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <!--======================================= bayi 13-36 ================================================ -->
            <div class="tab-pane fade" id="bayi-2">
                <div class="container-xl">
                    <div class="table-responsive">
                        <div class="table-wrapper">
                            <div class="table-title">
                                <div class="row">
                                    <div class="col-sm-8 mt-3">

                                        <button type="button" class="btn btn-primary text-white " style="border-radius: 15px;" id="openPopupimubayi2timbang">
                                            <i class="bi bi-plus-circle-fill" aria-hidden="true"></i>
                                            <b> Tambah</b>
                                        </button>
                                    </div>
                                    <div class="col-sm-4 mt3">

                                        <div class="search-box ms-6 mx-3">
                                            <i class="material-icons">&#xE8B6;</i>
                                            <input type="text" class="form-control" placeholder="Search&hellip;">
                                        </div>
                                        <button type="button" class="btn btn-primary text-white h-75" style="border-radius: 15px;" id="openPopupfilterimubayi2timbang">
                                            <i class="bi bi-funnel-fill" aria-hidden="true"></i>
                                            Filter
                                        </button>
                                        <button type="button" class="btn btn-danger text-white h-75" style="border-radius: 15px;">
                                            <i class="bi bi-filetype-pdf" aria-hidden="true"></i>
                                        </button>
                                        <button type="button" class="btn btn btn-success text-white h-75" style="border-radius: 15px;">
                                            <i class="bi bi-file-earmark-excel" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="tableFixHead ">
                                <table id="printdataanak" class="table table-striped table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIK <i class="fa fa-sort"></i></th>
                                            <th>Nama Bayi</th>
                                            <th>Tanggal lahir<i class="fa fa-sort"></i></th>
                                            <th>BBL(kg)</th>
                                            <th>Nama Ayah</th>
                                            <th>Nama Ibu</th>
                                            <th>Tanggal Timbang<i class="fa fa-sort"></i></th>
                                            <th>Hasil Timbang</th>
                                            <th>pos</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        for ($i = 1; $i <= 15; $i++) {
                                            echo '<tr>';
                                            echo "<td>$i</td>";
                                            echo '<td>Thomas Hardy</td>';
                                            echo '<td>89 Chiaroscuro Rd.</td>';
                                            echo '<td>Portland</td>';
                                            echo '<td>97219</td>';
                                            echo '<td>USA</td>';
                                            echo '<td>USA</td>';
                                            echo '<td>USA</td>';
                                            echo '<td>USA</td>';
                                            echo '<td>USA</td>';
                                            echo '<td>
       
                                  <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                     <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                                        </td>';
                                            echo '</tr>';
                                        }
                                        ?>
                                    </tbody>

                                </table>
                            </div>
                            <div class="clearfix">
                                <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                                <ul class="pagination">
                                    <li class="page-item disabled"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                                    <li class="page-item"><a href="#" class="page-link"><i class="fa fa-angle-double-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





            <!--======================================= bayi 37-60 ================================================ -->
            <div class="tab-pane fade" id="bayi-3">
                <div class="container-xl">
                    <div class="table-responsive">
                        <div class="table-wrapper">
                            <div class="table-title">
                                <div class="row">
                                    <div class="col-sm-8 mt-3">

                                        <button type="button" class="btn btn-primary text-white " style="border-radius: 15px;" id="openPopupimubayi3timbang">
                                            <i class="bi bi-plus-circle-fill" aria-hidden="true"></i>
                                            <b> Tambah</b>
                                        </button>
                                    </div>
                                    <div class="col-sm-4 mt3">

                                        <div class="search-box ms-6 mx-3">
                                            <i class="material-icons">&#xE8B6;</i>
                                            <input type="text" class="form-control" placeholder="Search&hellip;">
                                        </div>
                                        <button type="button" class="btn btn-primary text-white h-75" style="border-radius: 15px;" id="openPopupfilterimubayi3timbang">
                                            <i class="bi bi-funnel-fill" aria-hidden="true"></i>
                                            Filter
                                        </button>
                                        <button type="button" class="btn btn-danger text-white h-75" style="border-radius: 15px;">
                                            <i class="bi bi-filetype-pdf" aria-hidden="true"></i>
                                        </button>
                                        <button type="button" class="btn btn btn-success text-white h-75" style="border-radius: 15px;">
                                            <i class="bi bi-file-earmark-excel" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="tableFixHead ">
                                <table id="printdataanak" class="table table-striped table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIK <i class="fa fa-sort"></i></th>
                                            <th>Nama Bayi</th>
                                            <th>Tanggal lahir<i class="fa fa-sort"></i></th>
                                            <th>BBL(kg)</th>
                                            <th>Nama Ayah</th>
                                            <th>Nama Ibu</th>
                                            <th>Tanggal Timbang<i class="fa fa-sort"></i></th>
                                            <th>Hasil Timbang</th>
                                            <th>pos</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        for ($i = 1; $i <= 15; $i++) {
                                            echo '<tr>';
                                            echo "<td>$i</td>";
                                            echo '<td>Thomas Hardy</td>';
                                            echo '<td>89 Chiaroscuro Rd.</td>';
                                            echo '<td>Portland</td>';
                                            echo '<td>97219</td>';
                                            echo '<td>USA</td>';
                                            echo '<td>USA</td>';
                                            echo '<td>USA</td>';
                                            echo '<td>USA</td>';
                                            echo '<td>USA</td>';
                                            echo '<td>
       
                                  <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                     <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                                        </td>';
                                            echo '</tr>';
                                        }
                                        ?>
                                    </tbody>

                                </table>
                            </div>
                            <div class="clearfix">
                                <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                                <ul class="pagination">
                                    <li class="page-item disabled"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                                    <li class="page-item"><a href="#" class="page-link"><i class="fa fa-angle-double-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




        </div>
    </div>
</div>

<div class="popup" id="popupimubayi1timbang">
    <div class="popup-content">
        <span class="close" id="closePopupimubayi1timbang" style="float: right;">&times;</span>
        <!-- Isi form tambah data -->
        <?php include 'inputan/tambahtimbang.php'; ?>
    </div>
</div>
<div class="popup" id="popupimubayi2timbang">
    <div class="popup-content">
        <span class="close" id="closePopupimubayi2timbang" style="float: right;">&times;</span>
        <!-- Isi form tambah data -->
        <?php include 'inputan/tambahtimbang.php'; ?>
    </div>
</div>
<div class="popup" id="popupimubayi3timbang">
    <div class="popup-content">
        <span class="close" id="closePopupimubayi3timbang" style="float: right;">&times;</span>
        <!-- Isi form tambah data -->
        <?php include 'inputan/tambahtimbang.php'; ?>
    </div>
</div>

<!-- filter -->
<div class="popup" id="popupfilterimubayi1timbang">
    <div class="popup-content">
        <span class="close" id="closePopupfilterimubayi1timbang" style="float: right;">&times;</span>
        <!-- Isi form filter data -->
        <?php include 'inputan/filtertimbang.php'; ?>
    </div>
</div>
<div class="popup" id="popupfilterimubayi2timbang">
    <div class="popup-content">
        <span class="close" id="closePopupfilterimubayi2timbang" style="float: right;">&times;</span>
        <!-- Isi form filter data -->
        <?php include 'inputan/filtertimbang.php'; ?>
    </div>
</div>
<div class="popup" id="popupfilterimubayi3timbang">
    <div class="popup-content">
        <span class="close" id="closePopupfilterimubayi3timbang" style="float: right;">&times;</span>
        <!-- Isi form filter data -->
        <?php include 'inputan/filtertimbang.php'; ?>
    </div>
</div>

<!-- icon view -->
<!-- <a href="#" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a> -->