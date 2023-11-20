<?php

require '../koneksi.php';
require '../session.php';
if (isset($_POST["simpanakunuser"])) {
    if (edituserakun($_POST) > 0) {
        $_SESSION['nama_adminu'] = $_POST["nama"];
        echo "<script>location='user.php';</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Posyandu/user</title>
    <link rel="stylesheet" href="/assets/css/styleuser1.css">
    <link rel="stylesheet" href="/assets/css/tabeladmin.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container1">
        <div class="navbar1">
            <div class="titleutam">
                <div class="title1">
                    <h2>E-Posyandu</h2>
                </div>
                <sub class="title2">
                    <h5>Elektronik Pos Pelayanan Terpadu</h5>
                </sub>
            </div>
            <div class="profile">
                <div class="" style="align-items: center; width: 100%; padding-left:92px; padding-top:20px;">
                 
                        <label for="fileInput1" >
                            <img class=" pp1 ganti1 rounded-circle" src="" alt="" style="cursor: pointer;" height="100px" width="100px" >
                        </label>
              
                    <input type="file" name="foto1" id="fileInput1" accept=".jpg, .jpeg, .png" hidden>
                </div>
                <div class="nama nameuser"></div>
                <div class="email emailuser">blablabla@gmail.com</div>
            </div>
            <!-- <div class="mode">
                <div class="anonim" style="padding-left: 8px;">Mode Normal</div>
                <div class="toggle">
                    <div class="toggle-button" onclick="Animatedtoggle()"></div>
                </div>
                
            </div> -->
            <form action="" method="post">
                
            <div class="gantinama">
                <p class="changename">Ganti Nama</p>
                <div class="newpw">
                    <div class="nwpw">
                        <!-- <input name="iduser" class="emailuser"  type="text" placeholder="" style="padding-right: 10px;"> -->
                        <input name="nama" type="text" placeholder="" style="padding-right: 10px;">
                        <!-- <img src="../assets/./imgs/./eye-close.png" id="newpwicon"> -->
                    </div>
                </div>
                <!-- <i class="bi-pencil"></i> -->
            </div>
            <div class="gantiakun">
                <div class="gantipassword">
                    <div class="changepw">Ganti Password</div>
                    <div class="new">
                        <p class="nw">Masukan Password Baru</p>
                    </div>
                    <div class="newpw">
                        <div class="nwpw">
                            <input type="password" placeholder="" id="password" style="padding-right: 10px;">
                            <!-- <img src="../assets/./imgs/./eye-close.png" id="newpwicon"> -->
                        </div>
                    </div>
                    <div class="confirm">
                        <p class="cf">Konfirmasi Password Baru</p>
                    </div>
                    <div class="confirmpw">
                        <div class="cfpw">
                            <input name="password" type="password" placeholder="" id="password1" style="padding-right: 10px;">
                            <!-- <img src="../assets/./imgs/./eye-close.png" id="confirmpwicon"> -->
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="simpan1">
                <!-- <button type="submit" class="save">Simpan</button> -->
                <button type="submit" name="simpanakunuser" class="btn btn-primary "  style="width: 300px;">Simpan</button>
            </div>
            </form>

            <div class="logout1"><a href="" class="out logoutfilter">Logout</a></div>
        </div>

        <!-- topbar -->
        <div class="container2">
            <div class="topbar">
                <div class="bidan">
                    <div class="name nameuser"></div>
                    <div class="profile">
                        <img class="pp1 ganti2 rounded-circle" src="" alt="" style="cursor: pointer;" height="40px" width="40px">
                    </div>
                </div>
            </div>

            <!-- Box-Chat -->
            <div class="d-flex">
                <div class="framesubmain ">

                    <div class="tablesubmain1">
                        <h2>pilih <b>Bidan</b></h2>
                        <div class="container mt-5 tableFixHead3 " id="chatContainer1">
                            <div class="chatbalasContainer">
                                <?php foreach ($pilihbidan as $row) : ?>
                                    <div class="row">
                                        <a href="userchat.php?idpesan=<?= $row["NIP"]; ?>" style="color: black; text-decoration: none;">
                                            <div class="col-12 p-3  warna-chat border-bottom">
                                                <div class="media d-flex justify-content-between">
                                                    <div class="d-flex " style="width: 400px;">
                                                        <div class="me-3 ms-3">
                                                            <img src="/assets/imgs/<?= $row["foto_default"]; ?>" class="mr-3 rounded-circle" alt="User Avatar" width="50px" height="50px">
                                                        </div>
                                                        <div class="media-body">
                                                            <h5 class="mt-0"><?= $row["Nama"]; ?></h5>

                                                            <small class="text-muted"><?= $row["status_aktif"]; ?></small>
                                                            <!-- <i class="bi bi-check-all text-success"></i> -->
                                                        </div>
                                                    </div>

                                                    <div class=" d-flex flex-column justify-content-center mx-3">
                                                        <div class="">
                                                            <!-- <span class="badge bg-danger rounded-pill">+1</span> -->
                                                            <div class="text-info">
                                                                <i class="bi bi-circle-fill"></i>
                                                                <?= $row["status_aktif"]; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                <?php endforeach; ?>

                            </div>
                        </div>
                    </div>

                </div>



                <div class="framesubmain1">
                    <div class="tablesubmain1">
                        <h2><b>Chat</b> Masuk</h2>
                        <div class="row">
                            <div style="margin-left: 70px;">
                                <div class="search-box mt-3">
                                    <i class="material-icons">&#xE8B6;</i>
                                    <input type="text" id="searchInput" class="form-control" placeholder="Search&hellip;">
                                </div>
                            </div>
                        </div>
                        <div class="container mt-5 tableFixHead3 " id="chatContainer1">
                            <div class="balasContainer">
                                <?php foreach ($chatuser as $row) : ?>
                                    <div class="row">
                                        <a href="userchat.php?idpesan=<?= $row["idpesankirim"]; ?>" style="color: black; text-decoration: none;" id="linkUserChat">
                                            <div class="col-12 p-3  warna-chat border-bottom">
                                                <div class="media d-flex justify-content-between">
                                                    <div class="d-flex " style="width: 400px;">
                                                        <div class="me-3 ms-3">
                                                            <img src="/assets/imgs/<?= $row["foto"]; ?>" class="mr-3 rounded-circle" alt="User Avatar" width="50px" height="50px">
                                                        </div>
                                                        <div class="media-body">
                                                            <h5 class="mt-0">Bidan <?= $row["Nama"]; ?></h5>
                                                            <p><?= $row["pesan"]; ?></p>
                                                            <small class="text-muted"><?= $row["waktu_format"]; ?></small>
                                                            <i class="bi bi-check-all text-success"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            //toggle
            let toggle = document.querySelector(".toggle")
            let text = document.querySelector(".anonim")

            function Animatedtoggle() {
                toggle.classList.toggle("active");

                if (toggle.classList.contains("active")) {
                    text.innerHTML = "Mode Anonim"
                } else {
                    text.innerHTML = "Mode Normal"
                }
            }

            // //newpw
            // let newpwicon = document.getElementById("newpwicon");
            // let password = document.getElementById("password");

            // newpwicon.onclick = function() {
            //     if (password.type == "password") {
            //         password.type = "text";
            //         newpwicon.src = "../assets/imgs/eye-open.png";
            //     } else {
            //         password.type = "password";
            //         newpwicon.src = "../assets/imgs/eye-close.png";
            //     }
            // }

            // //confirmpw
            // let confirmpwicon = document.getElementById("confirmpwicon");
            // let password1 = document.getElementById("password1");

            // confirmpwicon.onclick = function() {
            //     if (password1.type == "password") {
            //         password1.type = "text";
            //         confirmpwicon.src = "../assets/imgs/eye-open.png";
            //     } else {
            //         password1.type = "password";
            //         confirmpwicon.src = "../assets/imgs/eye-close.png";
            //     }
            // }

            //fotoprofile
            document.addEventListener('DOMContentLoaded', function () {
    var fileInput = document.getElementById('fileInput1');
    var imgElement = document.querySelector('.pp1');
    var imgElement2 = document.querySelector('.ganti1');
    var imgElement3 = document.querySelector('.ganti2');

    // imgElement.addEventListener('click', function () {
    //     fileInput.click();
    // });

    fileInput.addEventListener('change', function () {
        if (fileInput.files && fileInput.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                imgElement.src = e.target.result;
                imgElement2.src = e.target.result;
                imgElement3.src = e.target.result;
            };

            reader.readAsDataURL(fileInput.files[0]);

            // Trigger file upload when a file is selected
            sendFileToServer(fileInput.files[0]);
        }
    });

    // Fungsi untuk mengirim file ke server
    function sendFileToServer(file) {
        var formData = new FormData();
        formData.append('foto', file);
     
        fetch('../admin/fotofolder.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
    .then(data => {
        if (data.status === 'error') {
            alert(data.message); // Menampilkan pesan kesalahan sebagai popup
        } else {
            console.log('Server response:', data);
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
    }
});






            document.addEventListener('DOMContentLoaded', function() {

                <?php if (isset($_SESSION["role"])) : ?>

                    var role = '<?php echo $_SESSION["role"]; ?>';

                    if (role === "User") {
                        var elementsToDisplayName = document.querySelectorAll('.logoutfilter');
                    elementsToDisplayName.forEach(function(element) {
                        element.href = "updatestatus.php?NIP=<?php echo isset($_SESSION['id_adminu']) ? $_SESSION['id_adminu'] : ''; ?>";
                    });
                        // Update elements with user information
                        document.querySelectorAll('.status_online').forEach(function(element) {
                            element.innerText = "<?php echo isset($_SESSION['online']) ? $_SESSION['online'] : ''; ?>";
                        });



                        document.querySelectorAll('.nameuser').forEach(function(element) {
                            element.innerText = "<?php echo isset($_SESSION['nama_adminu']) ? $_SESSION['nama_adminu'] : ''; ?>";
                        });

                        document.querySelectorAll('.emailuser').forEach(function(element) {
                            element.innerText = "<?php echo isset($_SESSION['id_adminu']) ? $_SESSION['id_adminu'] : ''; ?>";
                        });

                        // Display user profile picture
                        document.querySelectorAll('.pp1').forEach(function(element) {
                            var fotoUrl = "<?php echo isset($_SESSION['foto_adminu']) ? $_SESSION['foto_adminu'] : ''; ?>";

                            if (fotoUrl === '' || fotoUrl === null) {
                                element.src = '/assets/imgs/userpp.png';
                            } else {
                                element.src = '/assets/imgs/' + fotoUrl;
                            }
                        });
                    }

                <?php endif; ?>


            });


            function perbaruiKontenChat() {
                // Menggunakan Fetch API untuk memuat ulang konten div dari server
                fetch('refresuser.php')
                    .then(response => response.text())
                    .then(data => {
                        // Memperbarui konten div
                        document.querySelector('.balasContainer').innerHTML = data;
                    })
                    .catch(error => console.error('Error fetching data:', error));
            }

            document.addEventListener("DOMContentLoaded", function() {
                // Inisialisasi interval
                let intervalId;

                // Ambil elemen input dan tambahkan event listener
                const searchInput = document.getElementById("searchInput");
                searchInput.addEventListener("input", function() {
                    const searchTerm = searchInput.value.toLowerCase();

                    // Ambil semua elemen dengan class "balasContainer"
                    const balasContainer = document.querySelector('.balasContainer');

                    // Loop melalui setiap elemen dan sembunyikan/munculkan sesuai dengan pencarian
                    const rows = balasContainer.querySelectorAll('.row');
                    rows.forEach(function(row) {
                        const nama = row.querySelector('.media-body h5').innerText.toLowerCase();
                        if (nama.includes(searchTerm)) {
                            // Jika nama cocok dengan pencarian, munculkan
                            row.style.display = 'block';
                        } else {
                            // Jika nama tidak cocok, sembunyikan
                            row.style.display = 'none';
                        }
                    });

                    // Hentikan interval jika sedang mencari
                    clearInterval(intervalId);

                    // Cek apakah input kosong atau telah dihapus
                    if (!searchTerm) {
                        // Jika input kosong, inisialisasi ulang interval
                        intervalId = setInterval(perbaruiKontenChat, 800);
                    }
                });

                // Inisialisasi ulang interval pada awalnya
                intervalId = setInterval(perbaruiKontenChat, 800);
            });




            function perbaruiKontenChatbalas() {
  

  fetch('refrespilih.php')
      .then(response => response.text())
      .then(data => {
          // Memperbarui konten div
          document.querySelector('.chatbalasContainer').innerHTML = data;

       
      })
      .catch(error => {
          console.error('Error fetching data:', error);
          updatingContent = false; // Pastikan untuk menyetel kembali ke false jika ada kesalahan
      });
// }
}

// Jalankan fungsi perbaruiKontenChatbalas secara teratur
setInterval(perbaruiKontenChatbalas, 800);
        </script>
</body>

</html>