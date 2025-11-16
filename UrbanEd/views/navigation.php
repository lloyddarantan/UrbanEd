<?
session_start();
?>
<html>
    <head>
        <link rel="stylesheet" href="assets/css/index/navigations.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class = "nav">
            <div class = "nav-left">
                <img src="img/UrbanEdLogo.png" alt="UrbanEd Logo" class="nav-logo">
            </div>

            <div class="nav-right">
                <ul class="nav-upper">
                    <li><a href="#">CALENDARS</a></li>
                    <li><a href="#">GIVE</a></li>
                    <li><a href="#">NEWS</a></li>
                    <li><a href="#">DIRECTORIES</a></li>
                    <li class="search"><a href="#">SEARCH</a></li>
                    <li><a href="#">INFO</a></li>
                </ul>

                <ul class="nav-links">
                    <li><a href="about_us.php">About UrbanEd</a></li>
                    <li><a href="scholarship_homepage.php">Scholarship</a></li>
                    <li><a href="#">Admissions</a></li>
                    <li><a href="testimonies.php">Testimonies</a></li>
                    <li><?php
                        if(isset($_SESSION['login'] ) && $_SESSION['login'] === true)
                        {
                        echo '<a href="profile_page.php">Profile</a>';
                        }
                        else
                        {
                       echo '<a href="login_page.php">Profile</a>';
                        }
                    ?></li>
                </ul>
            </div>
            <div class="burger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="overlay"></div>
        <script src = "assets/javascript/navigation.js"></script> 
    </body>
</html>

    

