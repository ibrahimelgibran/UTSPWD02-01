<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
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
           <a href="./home.php" class="dashboard"><i class="material-icons">dashboard</i>
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
                                <a href="#" class="nav-link" data-toggle="dropdown">
                                   <span class="material-icons">notifications</span>                               </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">You have 5 new messages</a>
                                    </li>
                                    <li>
                                        <a href="#">You're now friend with Mike</a>
                                    </li>
                                    <li>
                                        <a href="#">Wish Mary on her birthday!</a>
                                    </li>
                                    <li>
                                        <a href="#">5 warnings in Server Console</a>
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
								<img src="img/me.png" style="width:40px; border-radius:50%;"/>
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
                                        <a href="login.php"><span class="material-icons">
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
                    <a class="nav-link active" aria-current="page" href="/create_rps.php">Header RPS</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="./identitas_rps.php">Identitas RPS</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./gambaran_umum.php">Gambaran Umum</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./capaian_pembelajaran.php">Capaian Pembelajaran</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./prasyarat.php">Prasyarat</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./unit_pembelajaran.php">Unit-Unit Pembelajaran</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./tugas_aktifitas.php">Tugas/Aktifitas</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./referensi.php">Referensi</a>
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
                    
                    <h3 id="rps-1">Informasi Header RPS</h3>
    
                    <form action="/editdata/submit.php" method="POST">
                      <!-- <div class="form-group">
                        <label for="email">Nama Prodi:</label>
                        <input type="text" class="form-control" id="nm_prodi" name="nm_prodi">
                      </div> -->
    
                      <div class="form-group">
                        <label for="sel1">Select list (select one):</label>
                        <select class="form-control" id="sel1">
                          <option>D3 Teknik Informatika</option>
                          <option>D3 Manajemen Informatika</option>
                          <option>S1 Informatika</option>
                          <option>S1 Sistem Informasi</option>
                        </select>
                      </div>
    
                      <div class="form-group">
                        <label for="prodi">Nama Prodi:</label>
                        <input type="text" class="form-control" id="prodi" name="prodi">
                    </div>
                    <div class="form-group">
                        <label for="nm_matkul">Nama Matakuliah:</label>
                        <input type="text" class="form-control" id="nm_matkul" name="nm_matkul">
                    </div>
                    <div class="form-group">
                        <label for="kd_matkul">Kode Matakuliah:</label>
                        <input type="text" class="form-control" id="kd_matkul" name="kd_matkul">
                    </div>
                    <div class="form-group">
                        <label for="penyusun">Nama Penyusun:</label>
                        <input type="text" class="form-control" id="penyusun" name="penyusun">
                    </div>
                    <button type="submit" class="btn btn-default" id>Submit</button>
                      <button type="" class="btn btn-info"><a href="/page/view.html">View</a></button>
                    </form>
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


