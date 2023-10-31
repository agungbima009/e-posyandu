<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-posyandu/admin</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="/assets/css/styleadmin.css">
    <link rel="stylesheet" href="/assets/css/tabeladmin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- icon sidebar -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- icon tabel  -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- icon bostrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- chart -->
    <!-- <link rel="stylesheet" href="https://unpkg.com/@adminkit/core@latest/dist/css/app.css"> -->

</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="sidebar close">
        <div class="logo-details">
            <i class='bx bxl-c-plus-plus'></i>
            <span class="logo_name">E-Posyandu</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="#" onclick="toggleContent('dashboardContent')">
                    <i class='bx bx-grid-alt'></i>
                    <span class="link_name">Dashboard</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#" onclick="toggleContent('dashboardContent')">Dashboard</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bx-collection'></i>
                        <span class="link_name">Data Master</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li>
                        <a class="link_name" href="#">Data Master</a>
                    </li>
                    <li>
                        <div class="bg-down">
                            <a class="klik-down" href="#" style="padding-left: 10px;" onclick="toggleContent('dataanakContent')">Data anak</a>
                        </div>
                    </li>
                    <li>
                        <div class="bg-down">
                            <a class="klik-down" href="#" style="padding-left: 10px;" onclick="toggleContent('dataibuContent')">Data ibu</a>
                        </div>
                    </li>
                    <li>
                        <div class="bg-down">
                            <a class="klik-down" href="#" style="padding-left: 10px;" onclick="toggleContent('dataimuContent')">Data imunisasi</a>
                        </div>
                    </li>

                    <li>
                        <div class="bg-down">
                            <a class="klik-down" href="#" style="padding-left: 10px;" onclick="toggleContent('datatimbangContent')">Data penimbangan</a>
                        </div>
                    </li>

                    <li>
                        <div class="bg-down">
                            <a class="klik-down" href="#" style="padding-left: 10px;" onclick="toggleContent('datalahirContent')">Data ibu melahirkan</a>
                        </div>
                    </li>

                    <li>
                        <div class="bg-down">
                            <a class="klik-down" href="#" style="padding-left: 10px;" onclick="toggleContent('datavaksinContent')">Data vaksin</a>
                        </div>
                    </li>

                    <li>
                        <div class="bg-down">
                            <a class="klik-down" href="#" style="padding-left: 10px;" onclick="toggleContent('dataposContent')">Data posyandu</a>
                        </div>
                    </li>

                    <li>
                        <div class="bg-down">
                            <a class="klik-down" href="#" style="padding-left: 10px;" onclick="toggleContent('databidanContent')">Data bidan</a>
                        </div>
                    </li>

                    <li>
                        <div class="bg-down">
                            <a class="klik-down" href="#" style="padding-left: 10px;" onclick="toggleContent('datakaderContent')">Data kader</a>
                        </div>
                    </li>

                    <li>
                        <div class="bg-down">
                            <a class="klik-down" href="#" style="padding-left: 10px;" onclick="toggleContent('datauserContent')">Data user</a>
                        </div>
                    </li>

                </ul>
            </li>

            <li>
                <a href="#" onclick="toggleContent('settingsContent')">
                    <i class='bx bx-cog'></i>
                    <span class="link_name">Setting</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#" onclick="toggleContent('settingsContent')">Setting</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                <i class='bx bx-log-out'></i>
                    <span class="link_name">Log Out</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Log Out</a></li>
                </ul>
            </li>
        </ul>
    </div>




    <!-- ========================= Main ==================== -->
    <section class="home-section">
        <div class="home-content">
            <div class="topbar">
                <div class="topbar2">
                    <div class="toggle">
                        <i class='bx bx-menu'></i>
                        <!-- <ion-icon name="menu-outline"></ion-icon> -->
                    </div>

                    <!-- <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div> -->



                    <div class="wrapper">
                        <div class="ntf">
                            <div class="angk-notif">
                                <h5 class="angk">10</h5>
                            </div>
                        </div>
                        <a class="notif-cht" href="#"><ion-icon name="chatbubbles-outline"></ion-icon></a>
                        <p class="admjd">Admin</p>
                        <div class="wrapperuser ">
                            <p class="pt-4">username</p>
                            <div class="user">
                                <img src="/assets/imgs/customer01.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="submain">


                <!-- ================tampilan sub main=================== -->
                <div id="dashboardContent" class="content">
                    <?php include 'form/dashboard.php'; ?>
                </div>
                <!-- ==================data master============================= -->
                <div id="dataanakContent" class="content" style="display: none;">
                    <?php include 'datamaster/dataanak.php'; ?>
                </div>
                <div id="dataibuContent" class="content" style="display: none;">
                    <?php include 'datamaster/dataibu.php'; ?>
                </div>
                <div id="dataimuContent" class="content" style="display: none;">
                    <?php include 'datamaster/dataimu.php'; ?>
                </div>
                <div id="datatimbangContent" class="content" style="display: none;">
                    <?php include 'datamaster/datatimbang.php'; ?>
                </div>
                <div id="datalahirContent" class="content" style="display: none;">
                    <?php include 'datamaster/dataibumelahirkan.php'; ?>
                </div>
                <div id="datavaksinContent" class="content" style="display: none;">
                    <?php include 'datamaster/datavaksin.php'; ?>
                </div>
                <div id="dataposContent" class="content" style="display: none;">
                    <?php include 'datamaster/datapos.php'; ?>
                </div>
                <div id="databidanContent" class="content" style="display: none;">
                    <?php include 'datamaster/databidan.php'; ?>
                </div>
                <div id="datakaderContent" class="content" style="display: none;">
                    <?php include 'datamaster/datakader.php'; ?>
                </div>
                <div id="datauserContent" class="content" style="display: none;">
                    <?php include 'datamaster/datauser.php'; ?>
                </div>
                <div id="settingsContent" class="content" style="display: none;">
                    <?php include 'form/pengaturan.php'; ?>
                </div>

            </div>

        </div>
    </section>







    <!-- =========== Scripts =========  -->
    <script src="/assets/js/admin.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- ============= chart =============== -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    
</body>

</html>