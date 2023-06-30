<?php
    //Start the session
    session_start();
    if(!isset($_SESSION['user']) ) header('location= login.php');
    $user = $_SESSION['user'];

    /*img reference ;https://img.icons8.com/bubbles/100/000000/phone.png,https://img.icons8.com/bubbles/100/000000/new-post.png,https://img.icons8.com/bubbles/100/000000/map-marker.png*/
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard - Pura Kencana Badminton Management System</title>
        <link rel="stylesheet" type="text/css" href="contact.css">
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

                <section id="contact">
                    <div class="contact container">
                    <div>
                        <h1 class="section-title" >Contact <span>info</span></h1>
                    </div>
                    <div class="contact-items">
                        <div class="contact-item">
                        <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/phone.png" /></div>
                        <div class="contact-info">
                            <h1>Phone</h1>
                            <h2>07 - 455 8181</h2>
                            <h2>07 - 455 7171</h2>
                        </div>
                        </div>
                        <div class="contact-item">
                        <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/new-post.png" /></div>
                        <div class="contact-info">
                            <h1>Email</h1>
                            <h2>purakencana@genting.com</h2>
                        </div>
                        </div>
                        <div class="contact-item">
                        <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/map-marker.png" /></div>
                        <div class="contact-info">
                            <h1>Address</h1>
                            <h2>No.1. Jalan Sisiran Pura Kencana 1A/1,
                                Taman Genting Pura Kencana,
                                83300, Sri Gading, Batu Pahat, Johor</h2>
                        </div>
                        </div>
                    </div>
                    </div>
                </section>
   
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