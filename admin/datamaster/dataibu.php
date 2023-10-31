<div class="framesubmain">

    <div class="tablesubmain">
        <div class="container-xl">
            <div class="table-responsive">
                <div class="table-wrapper">
                    <div class="table-title">
                    <h2>Data <b>Ibu</b></h2>
                        <div class="row">
                            <div class="col-sm-8 mt-3">
                               
                                <button type="button" class="btn btn-primary text-white " style="border-radius: 15px;" id="openPopupibu">
                                    <i class="bi bi-plus-circle-fill" aria-hidden="true"></i>
                                   <b>  Tambah</b>
                                </button>
                            </div>
                            <div class="col-sm-4 mt3">
                                
                                <div class="search-box ms-6 mx-3">
                                    <i class="material-icons">&#xE8B6;</i>
                                    <input type="text" class="form-control" placeholder="Search&hellip;">
                                </div>
                                <button type="button" class="btn btn-primary text-white h-75" style="border-radius: 15px;" id="openPopupfilteribu">
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
                    <table id="printdataanak" class="table table-striped table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIK <i class="fa fa-sort"></i></th>
                                <th>Nama ibu</th>
                                <th>Nama Suami<i class="fa fa-sort"></i></th>
                                <th>RT/RW</th>
                                <th>Nomor Tlpon <i class="fa fa-sort"></i></th>
                                <th>POS</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            for ($i = 1; $i <= 10; $i++) {
                                echo '<tr>';
                                echo "<td>$i</td>";
                                echo '<td>Thomas Hardy</td>';
                                echo '<td>89 Chiaroscuro Rd.</td>';
                                echo '<td>Portland</td>';
                                echo '<td>97219</td>';
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

<div class="popup" id="popupibu">
    <div class="popup-content">
        <span class="close" id="closePopupibu" style="float: right;">&times;</span>
        <!-- Isi form tambah data -->
        <?php include 'inputan/tambahibu.php'; ?>
    </div>
</div>

<div class="popup" id="popupfilteribu">
    <div class="popup-content">
        <span class="close" id="closePopupfilteribu" style="float: right;">&times;</span>
        <!-- Isi form filter data -->
        <?php include 'inputan/filteribu.php'; ?>
    </div>
</div>

<!-- icon view -->
<!-- <a href="#" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a> -->

