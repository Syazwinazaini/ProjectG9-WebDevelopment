<?php


    //Start the session
    session_start();
    if(!isset($_SESSION['person']) ) header('location= login.php');
    $user = $_SESSION['user'];
 
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard - Pura Kencana Management System</title>
        <link rel="stylesheet" type="text/css" href="book.css">
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
                <div id="userAddFormContainer">
                     

     <form action="swim.php"  method="POST" class="appForm" >
    <div class="elem-group"   class="appFormInputContainer">
      <label for="name">Name</label>
      <input type="text" class="appFormInput" id="name" name="name" placeholder="John Doe" pattern=[A-Z\sa-z]{3,20} required>
    </div>
    <div class="elem-group" class="appFormInputContainer">
      <label for="phone">Phone</label>
      <input type="tel" class="appFormInput" id="phone" name="customer_phone"  required>
    </div>
    <div class="elem-group inlined" class="appFormInputContainer">
      <label for="checkin-date">Date</label>
      <input type="date" class="appFormInput" id="checkin-date" name="date" required>
    </div>
    <div class="elem-group" class="appFormInputContainer">
      <label for="time">Time</label>
      <input type="text" class="appFormInput" id="time" name="time"  required>
    </div>
    <input type="hidden" name="table" value="person"/>
    <button type="submit" class="appBtn">Submit </button>

  </form>
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

  