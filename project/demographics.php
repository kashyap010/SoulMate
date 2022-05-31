<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="admin dashboard.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <style>
     .home-content {
       height: calc(100vh - 80px);
     }
     .overview-boxes {
       display: flex;
       justify-content: space-between;
    flex-wrap: wrap;
    padding: 0 20px;
    margin-bottom: 26px;
    flex-direction: column;
    z-index: 3;
     }
   </style>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bx-heart'></i>
      <span class="logo_name">SoulMate</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="#" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-book-alt' ></i>
            <span class="links_name">All Users</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Flagged Users</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-user' ></i>
            <span class="links_name">Suspended users</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Demographics</span>
          </a>
        </li>
        <li class="log_out">
          <a href="#">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
    </nav>
    <div class="home-content">
        <div class="overview-boxes">
            <div class="charts">
                <?php
                    include 'piemalefemale.php';
                ?><br>
            </div>
            <div class="charts">
                <?php
                    include 'piematch.php';
                ?><br>
            </div>  
            <div class="charts">
                <?php
                    include 'pieage.php';
                ?><br>
            </div>    
        </div>
    </div>


 
</body>
<script>
   let sidebar = document.querySelector(".sidebar");
   let sidebarBtn = document.querySelector(".sidebarBtn");
   sidebarBtn.onclick = function() {
        sidebar.classList.toggle("active");
        if(sidebar.classList.contains("active"))
        {
             sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
        }else
        sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
    }   
 </script>
</html>