<?php
session_start();
?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel ="stylesheet" href="assets/css/index/index.css">   
    </head>
    <body>
        <!-- nav -->
        <?php require "views/navigation.php"?>

        <!-- hero -->
        <section class = "hero">
            <div class = "hero-text">
                <h4 class = "hero-heading"> The Right School </h4>
                <h1> Start Your Scholarship Journey </h1>
                <p>
                    Explore available scholarships and apply easily through our online portal.
                    Whether you're entering school or continuing your studies, find financial
                    support that fits your goals. Start your application today and take the
                    first step toward a brighter future.
                </p>
                <button class="btn">A KEY PARTNERSHIP ▶</button>
            </div>
            <div class = "hero-image-container">
                <img src ="img/nav_images/hero-image.jpg" alt="Hero Image" class="hero-image"> 
            </div>
        </section>

        <!-- slideshow -->
        <div class = "slideshow-container">
            <!-- slide1 -->
            <div class = "slides-track">
                <div class = "slide-show" style = "background-image: url('img/slideshow_index/SchoolPrograms.jpg');"
                onclick="window.location.href='school_scholarship_page.php';">
                    <div class = "slide-content">
                        <h4 class = "slide-heading"> INSTITUTION </h4>
                        <h1> School Programs </h1>
                        <p>
                            We believe financial challenges shouldn't stop anyone 
                            from gettinga quality education. Our scholarship program 
                            supports deserving students so they can focus on learning and 
                            reaching their full potential.
                        </p>
                    </div>
                </div>

                <!-- slide2 -->
                <div class = "slide-show" style = "background-image: url('img/slideshow_index/GovernmentPrograms.jpg');"
                onclick="window.location.href='gov_scholarship_page.php';">
                    <div class = "slide-content">
                        <h4 class = "slide-heading"> GOVERNMENT </h4>
                        <h1> Government Programs </h1>
                        <p>
                            Our scholarship program is made possible through government funding, ensuring that qualified students receive the support they need for their education. This initiative aims to promote equal access to learning and help build a brighter future for all.
                        </p>
                    </div>
                </div>

                <!-- slide3 -->
                <div class = "slide-show" style = "background-image: url('img/slideshow_index/PrivatePrograms.jpg');"
                onclick="window.location.href='priv_scholarship_page.php';">
                    <div class = "slide-content">
                        <h4 class = "slide-heading"> PRIVATE </h4>
                        <h1> Private Programs </h1>
                        <p>
                            Our scholarship program is made possible through government funding, ensuring that qualified students receive the support they need for their education. This initiative aims to promote equal access to learning and help build a brighter future for all.
                        </p>
                    </div>
                </div>

                <!-- slide4 -->
                <div class = "slide-show" style = "background-image: url('img/slideshow_index/CityPrograms.jpg');"
                onclick="window.location.href='city_scholarship_page.php';">
                    <div class = "slide-content">
                        <h4 class = "slide-heading"> CITY </h4>
                        <h1> City Programs </h1>
                        <p>
                            Our scholarship program is made possible through government funding, ensuring that qualified students receive the support they need for their education. This initiative aims to promote equal access to learning and help build a brighter future for all.
                        </p>
                    </div>
                </div>
            </div>
            <button class="prev-btn" onclick="prevSlide()">&#10094;</button>
            <button class="next-btn" onclick="nextSlide()">&#10095;</button>
        </div>

        <!-- news section -->
        <div class="news-section">
            <div class="margin">
                <h2 class="in-header">The latest from UrbanEd news</h2>

                <div class="news-layout">

                    <div class="news-feature">
                        <img src="img/nav_images/news.jpeg" alt="Scholarship Program"> 
                            <h3>
                                Scholarship Program Now Open to Help Students Achieve Their Academic Dreams Without Financial Burden
                            </h3>
                        <p class="date">August 11, 2025</p>
                    </div>

                    <div class="newss">
                        <form>
                            <label class="explore-text">Explore More News</label>
                            <div class="dropdown-container">
                                <div class="dropdown menu" tabindex="0" aria-live="polite" aria-haspopup="true" role="listbox" aria-expanded="false">
                                    <span class="selected">ALL NEWS</span>
                                        <ul class="options">
                                        <li role="option" tabindex="-1">Scholarships</li>
                                        <li role="option" tabindex="-1">Programs</li>
                                        <li role="option" tabindex="-1">News</li>
                                        </ul>
                                </div>
                                <button class="fake-go">Go</button>
                            </div>
                        </form>

                        <div class="articles">
                            <h3 class="artc-h3">Graduate Achieves Dream Through Scholarship Program</h3>
                            <p class="date">August 5, 2025</p>
                        </div>

                        <div class="articles">
                            <h3 class="artc-h3">Scholarship Helps Student Become First Graduate in Family</h3>
                            <p class="date">August 7, 2025</p>
                        </div>

                        <div class="articles">
                            <h3 class="artc-h3">From Scholarship to Success: Student Graduates Proud</h3>
                            <p class="date">August 9, 2025</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- footer -->
        <?php require "views/footer.php"?>
        
        <script src = "assets/javascript/index.js"></script> 
    </body>
</html>