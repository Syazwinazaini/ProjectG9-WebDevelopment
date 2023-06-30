<?php
    //Start the session
    session_start();
    if(!isset($_SESSION['user']) ) header('location= login.php');
    $user = $_SESSION['user'];
 
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard - Pura Kencana Badminton Management System</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <script src="https://use.fontawesome.com/0c7a3095b5.js"></script>
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
            <div class="dashboard_content_container" id="dashboard_content_container">
        <div class="dashboard_topNav">
            <a href="" id="toggleBtn"><i class="fa fa-navicon"></i></a>
            <a href="database/logout.php" id="logoutBtn"><i class="fa fa-power-off"></i>Log-out</a>
        </div>
        <div class="dashboard_content">
            <div class="dashboard_content_main">
            <div class="container">
        <div class="card"  >
        <img  style="float : left;" src="images/basic.jpeg" alt="Basic">
        <img  style="float : right;" src="images/backhand.jpeg" alt="Basic">
        <div class="intro" style="float : left;">
            <h1>Basic Service</h1>
            <p>For <span>basic service</span> you must stand within a service court.If your score is an even number, serve from right to left, and vice versa.During the serve, do not lift your feet off the ground.  Each shot should be taken from below the waist. Vary your serves so that they are not predictable.  

            </p>
        </div>
        
        <div class="intro" style="float : right;">
        <h1>Backhand Service</h1>
                <p>For <span>backhand service</span> place your thumb along the handle's bevel. Stand with your dominant leg in front of you, facing forward. Hold the shuttle between your thumb and index finger by the feathers.Let go of the shuttle and swing the racket forward. 

                </p>
        </div>
        </div>
       
            
            <div class="card">
                <img src="images/forehand.jpeg" alt="Basic">
                <div class="intro">
                    <h1>Forehand Service</h1>
                    <p> In <span>forehand service</span> hold the racket so that your thumb and middle finger touch.
                        Stand with your weight on your back foot, sideways. Hold and release the shuttle just before making a forehand swing with your racket.For a forehand low serve, bend your wrist back and push gently. To execute a forehand drive serve, hit the serve with more force.
                        
                    </p>
               
                </div>
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