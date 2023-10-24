<?php
//require_once("../auth.php");
include('config.php');

// if( !isset($_POST['nim']) ){
// // kalau tidak ada nim di query string
// header('Location: ../view/dosen.php');
// }

//deklarasikan variabel $nim dari nim
$id = $_GET['nim'];

// buat query untuk ambil data dari database
$sql = mysqli_query($koneksi, "SELECT * FROM tb_mahasiswa WHERE nim_mhs=$id");
// $query = mysqli_query($sambung, $sql);
$dosen = mysqli_fetch_assoc($sql);

// jika data yang di-edit tidak ditemukan
if (mysqli_num_rows($sql) < 1) {
  die("data tidak ditemukan...");
}
?>

<!doctype html>
<html lang="en">  

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="viewport" content="width=device-width, initial-scale=1, mimatakuliahum-scale=1, maximum-scale=1">
  <title>crud dashboard</title>
  <link rel="icon" href="img/logo.png">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <!----css3---->
  <link rel="stylesheet" href="./css/custom.css">


  <!--google fonts -->

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">


  <!--google material icon-->
  <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">

  <style>
    /* Tambahkan gaya CSS Anda di sini */
    .content {
      padding: 20px;
      background-color: #f0f0f0;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .content header {
      background-color: #333;
      color: #fff;
      padding: 10px;
      border-radius: 5px 5px 0 0;
    }

    .content label {
      display: block;
      margin: 10px 0;
    }

    .content input[type="text"],
    .content textarea,
    .content select {
      width: 100%;
      padding: 10px;
      margin: 5px 0;
    }

    .content input[type="submit"] {
      background-color: #007bff;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
  </style>

</head>

<body>


  <div class="wrapper">

    <div class="body-overlay"></div>
    <!-------------------------------------------Sidebar Start---------------------------------------------->
    <!-- Sidebar  -->
    <nav id="sidebar">
      <div class="sidebar-header">
        <a href="home.php">
          <h3><img src="img/logo.png" class="img-fluid" /><span>Dashboard RPS</span></h3>
        </a>
      </div>
      <ul class="list-unstyled components">
        <li class="active">
          <a href="./home.php" class="dashboard"><i class="material-icons">dashboard</i>
            <span>Dashboard</span></a>
        </li>


        <li class="dropdown">
          <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <i class="material-icons">group</i><span>Daftar Dosen</span></a>
          <ul class="collapse list-unstyled menu" id="pageSubmenu2">
            <li>
              <a href="#">Page 1</a>
            </li>
            <li>
              <a href="#">Page 2</a>
            </li>
            <li>
              <a href="#">Page 3</a>
            </li>
          </ul>
        </li>


        <li class="dropdown">
          <a href="#pageSubmenu4" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <i class="material-icons">extension</i><span>Template RPS</span></a>
          <ul class="collapse list-unstyled menu" id="pageSubmenu4">
            <li>
              <a href="#">Page 1</a>
            </li>
            <li>
              <a href="#">Page 2</a>
            </li>
            <li>
              <a href="#">Page 3</a>
            </li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#pageSubmenu5" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <i class="material-icons">border_color</i><span>forms</span></a>
          <ul class="collapse list-unstyled menu" id="pageSubmenu5">
            <li>
              <a href="#">Page 1</a>
            </li>
            <li>
              <a href="#">Page 2</a>
            </li>
            <li>
              <a href="#">Page 3</a>
            </li>
          </ul>
        </li>


        <li class="dropdown">
          <a href="#pageSubmenu7" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <i class="material-icons">content_copy</i><span>Pages</span></a>
          <ul class="collapse list-unstyled menu" id="pageSubmenu7">
            <li>
              <a href="#">Page 1</a>
            </li>
            <li>
              <a href="#">Page 2</a>
            </li>
            <li>
              <a href="#">Page 3</a>
            </li>
          </ul>
        </li>

        <li class="">
          <a href="#"><i class="material-icons">date_range</i><span>Jadwal</span></a>
        </li>

        <li class="">
          <a href="#"><i class="material-icons">library_books</i><span>Calender
            </span></a>
        </li>


      </ul>
    </nav>
    <!------------------------------------------- Sidebar END---------------------------------------------->





    <!--------page-content---------------->

    <div id="content">

      <!--top--navbar----design--------->

      <div class="top-navbar">
        <div class="xp-topbar">

          <!-- Start XP Row -->
          <div class="row">
            <!-- Start XP Col -->
            <div class="col-2 col-md-1 col-lg-1 order-2 order-md-1 align-self-center">
              <div class="xp-menubar">
                <span class="material-icons text-white">signal_cellular_alt
                </span>
              </div>
            </div>
            <!-- End XP Col -->

            <!-- Start XP Col -->
            <div class="col-md-5 col-lg-3 order-3 order-md-2">
              <div class="xp-searchbar">
                <form>
                  <div class="input-group">
                    <input type="search" class="form-control" placeholder="Search">
                    <div class="input-group-append">
                      <button class="btn" type="submit" id="button-addon2">IEGCODE</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- End XP Col -->

            <!-- Start XP Col -->
            <div class="col-10 col-md-6 col-lg-8 order-1 order-md-3">
              <div class="xp-profilebar text-right">
                <nav class="navbar p-0">
                  <ul class="nav navbar-nav flex-row ml-auto">
                    <li class="dropdown nav-item active">
                      <a href="#" class="nav-link" data-toggle="dropdown">
                        <span class="material-icons">notifications</span> </a>
                      <ul class="dropdown-menu">
                        <li>
                          <a href="#">Ada pembaruan RPS !</a>
                        </li>
                        <li>
                          <a href="#">Ada pembaruan Jadwal !</a>
                        </li>
                        <li>
                          <a href="#">Ada pembaruan SKS !</a>
                        </li>
                        <li>
                          <a href="#">Ada pembaruan Materi !</a>
                        </li>

                      </ul>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">
                        <span class="material-icons">question_answer</span>

                      </a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link" href="#" data-toggle="dropdown">
                        <img src="img/me.png" style="width:40px; border-radius:50%;" />
                        <span class="xp-user-live"></span>
                      </a>
                      <ul class="dropdown-menu small-menu">
                        <li>
                          <a href="#">
                            <span class="material-icons">
                              person_outline
                            </span>Profile

                          </a>
                        </li>
                        <li>
                          <a href="#"><span class="material-icons">
                              settings
                            </span>Settings</a>
                        </li>
                        <li>
                          <a href="index.html"><span class="material-icons">
                              logout</span>Logout</a>
                        </li>
                      </ul>
                    </li>
                  </ul>


                </nav>

              </div>
            </div>
            <!-- End XP Col -->

          </div>
          <!-- End XP Row -->

        </div>
        <div class="xp-breadcrumbbar text-center">
          <h4 class="page-title">Dashboard Create RPS</h4>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Booster</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="home.php">Dashboard</a></li>
          </ol>
        </div>

      </div>



      <!--------main-content------------->

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav nav-tabs" style="font-size: 13.5px;">
              <li class="nav-item">
                <a class="nav-link " href="form_add.php">Header RPS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="view_data.php">Identitas RPS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#">Edit Data</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Capaian Pembelajaran</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Prasyarat</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Unit-Unit Pembelajaran</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Tugas/Aktifitas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Referensi</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>



      <div class="col-sm-9">
        <div class="row">
          <div class="container-fluid">


            <div class="tab-content">

              <br>

              <h3 id="rps-1">Perubahan RPS</h3>

              <div class="mx-auto">
                <!-- untuk memasukkan data -->
                <div class="card">
                  <div class="card-header">
                    Create / Update Data
                  </div>
                  <div class="content">
                    <form action="ctrl_edit_data.php?nim=<?= $dosen['nim_mhs'] ?>" method="POST">
                      <fieldset>
                        <p hidden="true">
                          <label for="nim">NIM: </label>
                          <input type="text" name="nim" value="<?php echo $dosen['nim_mhs'] ?>" />
                        </p>
                        <p>
                          <label for="nama_mahasiswa">Nama: </label>
                          <input type="text" name="nama_mahasiswa" placeholder="nama lengkap" value="<?php echo $dosen['nm_mhs'] ?>" />
                        </p>
                        <p>
                          <label for="judul_mahasiswa">Judul Matakuliah: </label>
                          <textarea name="judul_mahasiswa"><?php echo $dosen['jdl_mhs'] ?></textarea>
                        </p>
                        <p>
                          <label for="deskripsi_mahasiswa">Deskripsi: </label>
                          <textarea name="deskripsi_mahasiswa"><?php echo $dosen['des_mhs'] ?></textarea>
                        </p>
                        <p>
                          <label for="prodi_mahasiswa">Prodi Anda: </label>
                          <?php $skill = $dosen['pr_mhs']; ?>
                          <select name="prodi_mahasiswa">
                            <option <?php echo ($skill == 'D3 TEKNIK INFOMATIKA') ? "selected" : "" ?>>D3 TEKNIK INFOMATIKA</option>
                            <option <?php echo ($skill == 'D3 MANAJEMENT INFOMATIKA') ? "selected" : "" ?>>D3 MANAJEMENT INFOMATIKA</option>
                            <option <?php echo ($skill == 'S1 INFORMATIKA') ? "selected" : "" ?>>S1 INFORMATIKA</option>
                            <option <?php echo ($skill == 'S1 TEKNIK KOMPUTER') ? "selected" : "" ?>>S1 TEKNIK KOMPUTER</option>
                          </select>
                        </p>
                        <p>
                          <input type="submit" value="Save" name="edit" />
                        </p>
                      </fieldset>
                    </form>
                    <br>
                  </div>


                </div>

              </div>
            </div>
          </div>



        </div>
      </div>
    </div>
  </div>
  </div>


  <!---footer---->


  </div>


  </div>
  </div>

  <footer class="footer mt-3">
    <div class="container-fluid">
      <div class="footer-in">
        <p class="mb-0">Ibrahim El Gibran - 22.01.4774</p>
      </div>
    </div>
  </footer>

  <!----------html code compleate----------->









  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="js/jquery-3.3.1.slim.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery-3.3.1.min.js"></script>


  <script type="text/javascript">
    $(document).ready(function() {
      $(".xp-menubar").on('click', function() {
        $('#sidebar').toggleClass('active');
        $('#content').toggleClass('active');
      });

      $(".xp-menubar,.body-overlay").on('click', function() {
        $('#sidebar,.body-overlay').toggleClass('show-nav');
      });

    });
  </script>





</body>

</html>