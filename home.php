 <?php
    //Start the session
    session_start();
    if(!isset($_SESSION['user']) ) header('location= login.php');
    $user = $_SESSION['user'];
 
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard - Pura Kencana  Management System</title>
        <link rel="stylesheet" type="text/css" href="home.css">
        <script src="https://use.fontawesome.com/0c7a3095b5.js"></script>
        <style>
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 30%;
  padding: 5px;
  text-align:center;
}

/* Clearfix (clear floats) 
 (link img CEO)https://www.google.com/search?q=user&tbm=isch&hl=en-GB&chips=q:user,g_1:profile:CaToCCdMP9c%3D&sa=X&ved=2ahUKEwjf6P7r4ej_AhX3_zgGHVg1AUoQ4lYoAXoECAEQKg&biw=750&bih=719#imgrc=1z9MJwjopAk2-M 
 (img from ws) images/survey.jpeg,images/bad.jpeg,images/bad1.jpg,https://www.google.com/search?q=pura+kencana+sri+gading&tbm=isch&chips=q:pura+kencana+sri+gading,online_chips:club+house:DDfpgMiar3U%3D&hl=en-GB&sa=X&ved=2ahUKEwjqgsXj0-j_AhXByaACHUcdDPgQ4lYoB3oECAEQNg&biw=1519&bih=746#imgrc=da-ayIDpNwxZgM*/

.row::after {
  content: "";
  clear: both;
  display: table;
  
}
</style>
            </style>
    </head>
    <body>
        <div id="dashboardMainContainer">
            <div class="dashboard_sidebar" id="dashboard_sidebar">
                <h3 class="dashboard_logo" id="dashboard_logo">PKB</h3>
                <div class="dashboard_sidebar_user">
                    <img src="images/CEO.jpeg" alt="user image." id="userImage" /> 
                    <span><?= $user['first_name'] .' '. $user['last_name'] ?></span>
                </div>
            <div class="dashboard_sidebar_menus">
                <ul class="dashboard_menu_lists">
                <li class="menuActive">
                        <a href="home.php"><i class="fa fa-dashboard "></i> <span class="menuText"></span>About</a>
                    </li>
                    <li>
                        <a href="attandance.php"><i class="fa fa-dashboard "></i> <span class="menuText"></span>Attandance</a>
                    </li>
                    <li>
                        <a href="booking.php"><i class="fa fa-dashboard "></i> <span class="menuText"></span>Badminton</a>
                       
                    </li>
                    <li>
                        <a href="rental.php"><i class="fa fa-dashboard "></i> <span class="menuText"></span>Rental Equipment</a>
                    </li>
                    <li>
                        <a href="futsal.php"><i class="fa fa-dashboard "></i> <span class="menuText"></span>Futsal</a>
                    </li>
                    <li>
                        <a href="swimming.php"><i class="fa fa-dashboard "></i> <span class="menuText"></span>Swimming Pool</a>
                    </li>
                    <li>
                        <a href="service.php"><i class="fa fa-dashboard "></i> <span class="menuText"></span>Service skill</a>
                    </li>
                    <li>
                        <a href="contact.php"><i class="fa fa-dashboard "></i> <span class="menuText"></span>Contact Us</a>
                    </li>
                </ul>
            </div>
            </div>
        <div class="dashboard_content">
            <div class="dashboard_content_main">
            <div class="dashboard_content_container" id="dashboard_content_container">
        <div class="dashboard_topNav">
            <a href="" id="toggleBtn"><i class="fa fa-navicon"></i></a>
            <a href="database/logout.php" id="logoutBtn"><i class="fa fa-power-off"></i>Log-out</a>
        </div>
        <div class="dashboard_content">
            <div class="dashboard_content_main">
            
        <div class="container">
            <div class="col">
                <div class="col" >
                    <h1>ABOUT</h1>
                    <P>We do an interview to get some information from pura kencana's uncle.
                        </P>
                </div>
            <div class="row">
                <div class="column">
                  <img  src="images/survey.jpeg" alt="Badminton" style="width:100%">
                </div>
                <div class="column">
                  <img   src="images/bad.jpeg" alt="Forest" style="width:100%">
                </div>
                <div class="column">
                  <img   src="images/bad1.jpg" alt="Forest" style="width:100%">
                </div>
                
            </div>
        </div>
        </div>
        </div>
    <script>
        var sideBarIsOpen = 'true' 

        toggleBtn.addEventListener( 'click', (event) => {
            event.preventDefault();

            if(sideBarIsOpen){
            dashboard_sidebar.style.width = '10%';
            dashboard_content_container.style.width = '90%';
            dashboard_logo.style.fontSize = '60px';
            userImage.style.width = '60px';

            menuIcons = document.getElementsByClassName('menuText');
            for(var i=0; i < menuIcons.length; i++){
                menuIcons[i].style.display = 'none';
            }
            document.getElementsByClassName('dashboard_menu_lists')[0].style.textAlign = 'center';
            sideBarIsOpen = false;
        }
        else{
            dashboard_sidebar.style.width = '20%';
            dashboard_content_container.style.width = '80%';
            dashboard_logo.style.fontSize = '80px';
            userImage.style.width = '80px';

            menuIcons = document.getElementsByClassName('menuText');
            for(var i=0; i < menuIcons.length; i++){
                menuIcons[i].style.display = 'inline-block';
            }
            document.getElementsByClassName('dashboard_menu_lists')[0].style.textAlign = 'normal';

        }
        sideBarIsOpen = true;
        });
    </script>
    </body>
       
</html>
   