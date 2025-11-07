<!DOCTYPE html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="assets/css/index/scholarship/scholarship.css">
    </head>
    <body>
        <main class="page" tabindex="-1">
            <div class="page-feature">
                <div class="page-divider"></div>
            </div>

            <div class="page-header">
                <nav class="nav-header">
                    <a href="index.php">HOME</a>
                    <i class="fas fa-angle-right arrow"></i>
                    <a href="scholarships.php"><span class="blue-text">SCHOLARSHIP</span></a>
                </nav>
            </div>

            <div class="page-row">
                <div class="page-container">
                    <div class="page-content">
                        <div class="typography">
                            <h1>Opportunities</h1>
                        </div>
                        <div class="content">
                            <div class="intro">
                                <p>At UrbanEd, we believe that access to education should never be limited by financial barriers.</p>
                            </div>
                            <div class="description">
                                <div class="d1">
                                    <p>That’s why we’ve created a platform that empowers students to explore a wide range of scholarship opportunities with ease and confidence. Whether you're applying for government grants, private scholarships, or university aid, UrbanEd helps you discover the right path—often one you never knew existed.</p>
                            </div>
                            <div class="d2">
                                <p>As students navigate their journey, UrbanEd guides them step by step, making the process less overwhelming and more accessible. Along the way, stories from fellow applicants and tips from experts provide insights that can open new doors.</p>
                            </div>
                        </div>
                    </div>

                    
                    <article class="article" onclick="window.location.href='school_scholarship_page.php';">
                        <figure class="pic-container">
                            <img class="art-pic" 
                                src="img/scholarship_home_img/schoolscholar.png" 
                                alt="Scholarship Opportunities">
                        </figure>
                        <div class="art-des">
                            <div class="art-title">
                                <h2>School Scholarship</h2>
                            </div>
                            <div class="des-art">
                                <p>Offered by universities and colleges to support students based on merit, need, or specific talents.</p>
                            </div>
                        </div>
                    </article>
                    
                
                    <article class="article" onclick="window.location.href='city_scholarship_page.php';">
                        <figure class="pic-container">
                            <img class="art-pic" 
                                src="img/scholarship_home_img/cityscholar.png" 
                                alt="Scholarship Opportunities">
                        </figure>
                        <div class="art-des">
                            <div class="art-title">
                                <h2>City Scholarship</h2>
                            </div>
                            <div class="des-art">
                                <p>Local government-funded programs designed to help residents in the community access quality education.</p>
                            </div>
                        </div>
                    </article>

            
                    <article class="article">
                        <figure class="pic-container">
                            <img class="art-pic" 
                                src="img/scholarship_home_img/privatescholar.png" 
                                alt="Scholarship Opportunities">
                        </figure>
                        <div class="art-des">
                            <div class="art-title">
                                <h2>Private Scholarship</h2>
                            </div>
                            <div class="des-art">
                                <p>Provided by companies, foundations, or individuals to support students who meet specific criteria or goals.</p>
                            </div>
                        </div>
                    </article>

                    
                    <article class="article"onclick="window.location.href='gov_scholarship_page.php';">
                        <figure class="pic-container">
                            <img class="art-pic" 
                                src="img/scholarship_home_img/governmentscholar.png" 
                                alt="Scholarship Opportunities">
                        </figure>
                        <div class="art-des">
                            <div class="art-title">
                                <h2>Government Scholarship</h2>
                            </div>
                            <div class="des-art">
                                <p>National or regional scholarships that offer financial aid to students pursuing higher education, often with wide eligibility.</p>
                            </div>
                        </div>
                    </article>
                    </div>
                </div>
            
                <div class="sub-nav">
                    <!-- subnav -->
                    <?php require "views/sub-nav.php"?>
                </div>
            </div>
        </main>
    </body>
</html>