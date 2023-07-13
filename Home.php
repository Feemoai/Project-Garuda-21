<?php require_once("auth.php");?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="assets/Home/style.css" />

    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

    <title>Garuda-21</title>
    <link rel="shortcut icon" href="source/garuda_red.png" type="image/x-icon" />
  </head>
  <body>
    <nav>
      <div class="logo-name">
        <div class="logo-image">
          <img src="source/garuda_red.png" alt="" class="title" />
        </div>

        <span class="logo_name">Garuda-21</span>
      </div>

      <div class="menu-items">
        <ul class="nav-links">
          <li>
            <a href="#" class="link-name" id="dashboard">
              <i class="bx bx-grid-alt" id="dashboard"></i>
              <span class="link-name" id="dashboard">Dahsboard</span>
            </a>
          </li>
          <li>
            <a href="#" class="link-name" id="jadwal">
              <i class="bx bx-calendar"  id="jadwal"></i>
              <span class="link-name" id="jadwal">Jadwal</span>
            </a>
          </li>
          <li>
            <a href="#" class="link-name" id="tugas">
              <i class="uil uil-chart"></i>
              <span class="link-name" id="tugas">Tugas</span>
            </a>
          </li>
          <li>
            <a href="#" class="link-name" id="ujian">
              <i class="uil uil-comments"></i>
              <span class="link-name" id="ujian">Ujian</span>
            </a>
          </li>
          <li>
            <a href="#" class="link-name" id="jurnal">
              <i class="bx bx-book-reader"></i>
              <span class="link-name" id="jurnal">Jurnal Literasi</span>
            </a>
          </li>
        </ul>

        <ul class="logout-mode">
          <li>
            <a href="logout.php">
              <i class="uil uil-signout"></i>
              <span class="link-name">Logout</span>
            </a>
          </li>

          <li class="mode">
            <a href="#">
              <i class="uil uil-moon"></i>
              <span class="link-name">Dark Mode</span>
            </a>

            <div class="mode-toggle">
              <span class="switch"></span>
            </div>
          </li>
        </ul>
      </div>
    </nav>

    <section class="dashboard">
      <div class="top">
        <i class="uil uil-bars sidebar-toggle"></i>

        <div class="search-box">
          <i class="uil uil-search"></i>
          <input type="text" placeholder="Search here..." />
        </div>

        <img src="source/Profil.png" alt="" />
      </div>

      <div class="badan"></div>
    </section>

    <script src="assets/Home/script.js"></script>
    <script src="jquery-3.6.4.min.js"></script>
    <script type="text/javascript">
	$(document).ready(function(){
		$('.link-name').click(function(){
			var menu = $(this).attr('id');
			if(menu == "dashboard"){
				$('.badan').load('dashboard.php');						
			}else if(menu == "jadwal"){
				$('.badan').load('jadwal.php');						
			}else if(menu == "tugas"){
				$('.badan').load('tugas.php');						
			}else if(menu == "ujian"){
				$('.badan').load('ujian.php');						
			}else if(menu == "jurnal"){
				$('.badan').load('jurnal_literasi.php');	
      }
      
      
		});
 
 
		// halaman yang di load default pertama kali
		$('.badan').load('dashboard.php');						
 
	});

</script>
  </body>
</html>
