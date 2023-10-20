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
        <link rel="stylesheet" href="../css/bootstrap.min.css">
      <!----css3---->
        <link rel="stylesheet" href="../css/custom.css">
    
    
    <!--google fonts -->
  
      <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
  
  <!--google material icon-->
      <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">

  </head>
  <body>
  

<div class="wrapper">


        <div class="body-overlay"></div>
    
    <!-------------------------------------------Sidebar Start---------------------------------------------->
         <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3><img src="../img/logo.png" class="img-fluid"/><span>Dashboard RPS</span></h3>
            </div>
            <ul class="list-unstyled components">
      <li  class="active">
                    <a href="../home.php" class="dashboard"><i class="material-icons">dashboard</i>
          <span>Dashboard</span></a>
                </li>
    
                
                <li class="dropdown">
                    <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false" 
          class="dropdown-toggle">
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
                    <a href="#pageSubmenu4" data-toggle="collapse" aria-expanded="false" 
          class="dropdown-toggle">
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
                    <a href="#pageSubmenu5" data-toggle="collapse" aria-expanded="false" 
          class="dropdown-toggle">
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
                    <a href="#pageSubmenu7" data-toggle="collapse" aria-expanded="false" 
          class="dropdown-toggle">
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
        
         <li  class="">
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
                                  <input type="search" class="form-control" 
                  placeholder="Search">
                                  <div class="input-group-append">
                                    <button class="btn" type="submit" 
                  id="button-addon2">GO</button>
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
                                <a href="#" class="nav-link active" data-toggle="dropdown">
                                   <span class="material-icons">notifications</span>
                   
                               </a>
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
                <img src="../img/me.png" style="width:40px; border-radius:50%;"/>
                <span class="xp-user-live"></span>
                </a>
                <ul class="dropdown-menu small-menu">
                                    <li>
                                        <a href="#">
                      <span class="material-icons">person_outline</span>Profile

                    </a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="material-icons">settings</span>Settings</a>
                                    </li>
                                    <li>
                                        <a href="login.php"><span class="material-icons">logout</span>Logout</a>
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
                <h4 class="page-title">Dashboard</h4>  
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Booster</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                  </ol>                
            </div>
      
       </div>
       
       
       
       <!--------main-content------------->
       
           <div class="container">
            <div class="row content">
              
              <table class="table text-center">
                <tr >
                  <td colspan="4" style="border-bottom: 1px #bdc3c7 solid;"><h1>RENCANA PEMBELAJARAN SEMESTER (RPS)</h1></td>
                </tr>
                <tr>
                  <td colspan="4" style="padding: 1px;" class="no_doc_rps"><h6 style="margin:0; padding: 0;">FM-PJM-011/Rev.00/23 Oktober 2023</h6></td>
                </tr>
                <tr>
                  <td colspan="4" ><img src="../img/logo.png" width="150"></td>
                </tr>
                <tr>
                  <td colspan="4" ><h3 style="margin:0; padding: 0;">MATA KULIAH : PENDIDIKAN PANCASILA (DT001)</h3></td>
                </tr>
                <tr>
                  <td colspan="4" ><h3 style="margin:0; padding: 0;">Program Studi: D3 Teknik Informatika</h3></td>
                </tr>
                <tr>
                  <td>No</td>
                  <td>Tgl Berlaku</td>
                  <td>Tgl Disusun</td>
                  <td>Revisi</td>
                </tr>
                <tr>
                  <td>RPS-DT-00</td>
                  <td>23 Oktober 2023</td>
                  <td>23 Oktober 2023</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td colspan="4"></td>
                </tr>
                <tr>
                  <td>Disetujui oleh
                    <p>Dekan Ilmu Komputer</p>
                  </td>
                  <td>Diperiksa oleh
                  <p>Kaprodi D3TI</p>
                </td>
                  <td>Disusun oleh
                  <p>Koordinator MK</p>
                </td>
                  <td>Dikendalikan oleh
                  <p>Sekprodi D3TI</p>
                </td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td colspan="4"><h2 style="margin:0; padding: 0;">UNIVERSITAS AMIKOM YOGYAKARTA</h1></td>
                </tr>
                <tr>
                  <td colspan="4"><h2 style="margin:0; padding: 0;">YOGYAKARTA</h1></td>
                </tr>
                <tr>
                  <td colspan="4"><h2 style="margin:0; padding: 0;">2023</h1></td>
                </tr>
        
              </table>
        
        <br>
        
        <table class="table text-center kop">
          <tr>
            <td rowspan="2">
              <img src="../img/logo.png" width="100">
            </td>
            <td rowspan="2">
              <h5>RENCANA PEMBELAJARAN SEMESTER (RPS)</h5>
              <h5>PROGRAM STUDI : D3 TEKNIK INFORMATIKA</h5>
            </td>
            <td>
              <p>No</p>
              <p>Tgl Disusun</p>
              <p>Revisi</p>
            </td>
            <td></td>
          </tr>
          <tr>
            <td><p>Halaman</p></td>
            <td></td>
          </tr>
          
        </table>
        
   
       
       <!---footer---->
       
       
    </div>
    
    <footer class="footer mt-3">
          <div class="container-fluid">
          <div class="footer-in">
                    <p class="mb-0">Ibrahim El Gibran - 22.01.4774</p>
                </div>
        </div>
       </footer>
</div>
</div>


<!----------html code ----------->








  
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="js/jquery-3.3.1.slim.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/jquery-3.3.1.min.js"></script>
  
  
  <script type="text/javascript">
        
    $(document).ready(function(){
      $(".xp-menubar").on('click',function(){
        $('#sidebar').toggleClass('active');
      $('#content').toggleClass('active');
      });
      
       $(".xp-menubar,.body-overlay").on('click',function(){
         $('#sidebar,.body-overlay').toggleClass('show-nav');
       });
      
    });
    
</script>
  
  



  </body>
  
  </html>


