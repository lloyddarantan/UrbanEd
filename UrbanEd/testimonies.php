<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="assets/css/index/scholarship/scholarship.css">
        <link rel="stylesheet" href="assets/testimonies.css">
    </head>
    
    <body>

    <!-- header -->
    <?php require "views/navigation.php"?>
    
    <!-- testimonies -->
        <main class="page" tabindex="-1">
            <div class="page-feature">
                <div class="page-divider"></div>
            </div>

            <div class="page-header">
                <nav class="nav-header">
                    <a href="index.php">HOME</a>
                    <i class="fas fa-angle-right arrow"></i>
                      
                    <a href="testimonies.php"><span class="blue-text">TESTIMONIES</span></a>
                </nav>
            </div>

            <div class="page-row">
                <div class="page-container">
                    <div class="page-content">
                        <div class="title">UrbanEd Scholars</div>
                        <div class="typography">
                            <h2 class="in-header">Real Stories, Real Impact: Hear From Our Scholars</h2>
                        </div>

                    </div>
                </div>
            </div>

            <div class="testimonies-page">

            <!-- Scholar 1 -->
                <div class="testimonies-row">
                    <div class="quote-box">
                    These are the voices of some students whose lives have been transformed by our scholarship program. 
                    Through their stories, you'll see how access to education opens doors, empowers dreams, and creates lasting change.
                    </div>

                    <div class="scholar1">
                        <div class="scholarimg-show" style="background-image: url('img/testimonies/scholar1.jpg');">
                            <div class="scholarimg-content">
                                <div class="scholarimg-heading">
                                    <h4 class="course">Bachelor of Science in Chemical Engineering</h4>
                                    <h4 class="university"><i>University of Negros Occidental Recoletos</i></h4>
                                </div>
                                <h1 class="student-name">Kristine Anne B. Lozano</h1>
                                <p>" Pursuing Chemical Engineering has always been my dream, but the financial burden made it feel out of reach. Thanks to this scholarship, I’ve been able to study without worrying about tuition and focus fully on my academics and research. It’s given me the chance to grow, explore my passion for sustainable energy, and work toward becoming an engineer who can make a real difference. I’m truly grateful for this opportunity—it changed the course of my life. "</p>
                            </div>
                        </div>
                    </div>
                </div>

            <!-- Scholar 2 -->
                <div class="testimonies-row">
                    <div class="scholar2">
                        <div class="scholarimg-show" style="background-image: url('img/testimonies/scholar2.jpg');">
                            <div class="scholarimg-content2">
                                <div class="scholarimg2-heading">
                                    <h4 class="course">Bachelor of Science in Information Technology </h4>
                                    <h4 class="university"><i>University of Saint La-Salle Bacolod</i></h4>
                                </div>
                                <h2 class="student-name2">Luke Abdon Berondo</h2>
                                <p>" Coming from a family with limited means, I never imagined I’d finish college—let alone graduate with a degree in IT. The scholarship gave me more than just financial support; it gave me hope and a future. It allowed me to focus on my studies, gain hands-on experience, and build the skills I needed to succeed. Today, I’m proudly working in the tech industry, and I owe so much of this journey to the opportunity I was given. "</p>
                            </div>
                        </div>
                    </div>

                <div class="quote-box2">
                    To our dedicated scholars — thank you for being an inspiration. Your hard work, perseverance, 
                    and passion for learning are at the heart of why this program exists. It is a privilege to support your journey, 
                    and we are proud to witness the impact you are already making. Your success is our greatest achievement, and we look 
                    forward to seeing the bright futures you will build. Keep striving, keep growing — we believe in you.
                    </div>

                </div>
            </div>

            <!-- lastquote -->
            <div class="page-row">
                <div class="page-container">
                    <div class="page-content">
                        <div class="lastquote">
                            <h2 class="lastquote-content">"See How Scholarships Are Making Dreams Come True"</h2>
                        </div>
                    </div>
                </div>
            </div>
        </main>

     <!-- footer -->
    <?php require "views/footer.php"?>

    </body>
</html>