<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="icon" href="img/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>crud dashboard</title>
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

    <!-- style css-->
    <style>
        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 20px;
        }

        .add-button {
            background-color: #3EC70B;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            margin-bottom: 20px;
            display: inline-block;
            transition: background-color 0.3s;
        }

        .add-button:hover {
            background-color: #36a808;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr {
            border-bottom: 1px solid #ddd;
            transition: background-color 0.3s;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .satu {
            width: 30px;
        }

        tr {
            font-weight: bold;
        }

        th:nth-child(2),
        td:nth-child(2) {
            display: none;
        }

        .footer {
            margin-top: 166px;
            /* Tambahkan jarak dari atas */
            padding: 10px 0;
            /* Tambahkan padding jika diperlukan */
            bottom: 0;
            text-align: center;
            background-color: #333;
            position: sticky;
            color: white;
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
                <a href="./home.php">
                    <h3><img src="./img/logo.png" class="img-fluid" /><span>Dashboard RPS</span></h3>
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
                                                <img src="./img/me.png " style="width:40px; border-radius:50%;" />
                                                <span class="xp-user-live"></span>
                                            </a>
                                            <ul class="dropdown-menu small-menu">
                                                <li>
                                                    <a href="#">
                                                        <span class="material-icons">person_outline</span>Profile</a>
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
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
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
                                <a class="nav-link " href="./form_add.php">Header RPS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Identitas RPS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./form_edit_data.php">Edit Data</a>
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

                            <h3>Informasi Identitas RPS</h3>

                            <div class="container">
                                <a class="add-button" style="background-color: #3EC70B" href="./form_add.php">Tambah Data</a>
                                <table>
                                    <thead>
                                        <tr class="tr">
                                            <th class="satu">No</th>
                                            <th hidden>Nim</th>
                                            <th>Nama</th>
                                            <th>Judul Matakuliah</th>
                                            <th>Deskripsi</th>
                                            <th>Prodi Anda</th>
                                            <th>Edit / Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include 'config.php';
                                        $sql = "SELECT * FROM tb_mahasiswa";
                                        $query = mysqli_query($koneksi, $sql);
                                        $nomor = 1;
                                        while ($dosen = mysqli_fetch_array($query)) {
                                            echo "<tr>";
                                            echo "<td>" . $nomor . "</td>";
                                            echo "<td hidden>" . $dosen['nim_mhs'] . "</td>";
                                            echo "<td style='display: flex; align-items: center;'>";
                                            echo $dosen['nm_mhs'];
                                            echo "</td>";
                                            echo "<td>" . $dosen['jdl_mhs'] . "</td>";
                                            echo "<td>" . $dosen['des_mhs'] . "</td>";
                                            echo "<td>" . $dosen['pr_mhs'] . "</td>";
                                            echo "<td>";
                                            echo "<a href='./form_edit_data.php?nim=" . $dosen['nim_mhs'] . "'>Edit</a> | ";
                                            echo "<a href='./ctrl_delete_data.php?nim=" . $dosen['nim_mhs'] . "'>Hapus</a>";
                                            echo "</td>";
                                            echo "</tr>";
                                            $nomor++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
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


    <!----------html code compleate----------->






    <footer class="footer">
        <div class="container-fluid">
            <div class="footer-in">
                <p class="mb-0">Ibrahim El Gibran - 22.01.4774</p>
            </div>
        </div>
    </footer>


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