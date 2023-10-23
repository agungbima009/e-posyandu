<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-posyandu/admin</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="/assets/css/styleadmin.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li class="logo">
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="logo-apple"></ion-icon>
                        </span>
                        <span class="title">
                            <h3>E-Posyandu</h3>
                        </span>
                    </a>
                </li>

                <li class="das">
                    <a href="#" onclick="toggleContent('dashboardContent')">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li class="submenu">
                    <a href="#">
                        <span class="icon toggle2">
                            <ion-icon name="folder-outline"></ion-icon>
                            <!-- <ion-icon name="arrow-dropdown-circle"></ion-icon> -->
                        </span>
                        <span class="title">
                            <h4>Data master</h4>
                        </span>
                        <span class="down">
                            <ion-icon name="arrow-dropdown-circle"></ion-icon>
                        </span>
                    </a>
                    <ul id="myDropdown" class="sub-menu">
                        <li class="menuitem">
                            <a class="item" href="#" onclick="toggleContent('dataanakContent')">
                                <!-- <span class="icon"></span> -->
                                <span class="text">Data anak</span>
                            </a>
                        </li>
                        <li class="menuitem">
                            <a class="item" href="#" onclick="toggleContent('dataibuContent')">
                                <!-- <span class="icon"></span> -->
                                <span class="text">Data Ibu</span>
                            </a>
                        </li>
                        <li class="menuitem">
                            <a class="item" href="#">
                                <!-- <span class="icon"></span> -->
                                <span class="text">Data penimbangan</span>
                            </a>
                        </li>
                        <li class="menuitem">
                            <a class="item" href="#">
                                <!-- <span class="icon"></span> -->
                                <span class="text">Data Imunisasi</span>
                            </a>
                        </li>
                        <li class="menuitem">
                            <a class="item" href="#" onclick="toggleContent('datahamilContent')">
                                <!-- <span class="icon"></span> -->
                                <span class="text">Data ibu hamil</span>
                            </a>
                        </li>
                        <li class="menuitem">
                            <a class="item" href="#" onclick="toggleContent('datalahirContent')">
                                <!-- <span class="icon"></span> -->
                                <span class="text">Data ibu melahirkan</span>
                            </a>
                        </li>
                        <li class="menuitem">
                            <a class="item" href="#" onclick="toggleContent('datavaksinContent')">
                                <!-- <span class="icon"></span> -->
                                <span class="text">Data vaksin</span>
                            </a>
                        </li>
                        <li class="menuitem">
                            <a class="item" href="#" onclick="toggleContent('dataposContent')">
                                <!-- <span class="icon"></span> -->
                                <span class="text">Data pos posyandu</span>
                            </a>
                        </li>
                        <li class="menuitem">
                            <a class="item" href="#" onclick="toggleContent('databidanContent')">
                                <!-- <span class="icon"></span> -->
                                <span class="text">Data bidan</span>
                            </a>
                        </li>
                        <li class="menuitem">
                            <a class="item" href="#" onclick="toggleContent('datakaderContent')">
                                <!-- <span class="icon"></span> -->
                                <span class="text">Data kader</span>
                            </a>
                        </li>
                        <li class="menuitem">
                            <a class="item" href="#" onclick="toggleContent('datauserContent')">
                                <!-- <span class="icon"></span> -->
                                <span class="text">Data user</span>
                            </a>
                        </li>
                    </ul>

                </li>

                <li class="massage">
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="chatbubbles-outline"></ion-icon>
                        </span>
                        <span class="title">Messages</span>
                    </a>
                </li>


                <li class="setting">
                    <a href="#" onclick="toggleContent('settingsContent')">
                        <span class="icon">
                            <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="title">Settings</span>
                    </a>
                </li>


                <li class="logout">
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Log Out</span>
                    </a>
                </li>
            </ul>
        </div>




        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="topbar2">
                    <div class="toggle">
                        <ion-icon name="menu-outline"></ion-icon>
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
                        <div class="wrapperuser">
                            <p class="nameuser">username</p>
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
                <div id="datahamilContent" class="content" style="display: none;">
                    <?php include 'datamaster/dataibuhamil.php'; ?>
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
    </div>





    <!-- =========== Scripts =========  -->
    <script src="/assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>