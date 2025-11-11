<?php
require 'database/db_connect.php';

$query = "SELECT * FROM school_scholarships ORDER BY id, city, school_name";
$result = $conn->query($query);

$scholarships = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $scholarships[$row['city']][] = $row;
    }
}
?>
<!DOCTYPE html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="assets/css/index/scholarship/scholarship.css">
        <link rel="stylesheet" href="assets/css/index/scholarship/schools.css">
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
    
                    <a href="scholarship_homepage.php">SCHOLARSHIP</a>
                    <i class="fas fa-angle-right arrow"></i>
                    
                    <a href="scholarships.php"><span class="blue-text">SCHOOL SCHOLARSHIP</span></a>
                </nav>
            </div>

            <div class="page-row">
                <div class="page-container">
                    <div class="page-content">
                        <div class="typography">
                            <h1>School Scholarship</h1>
                        </div>
                        <div class="content">
                            <div class="intro">
                                <p>At UrbanEd, we see scholarships offered by schools as more than just financial aid, they’re gateways to growth, opportunity, and discovery.</p>
                            </div>
                            <div class="description">
                                <div class="d1">
                                    <p>These scholarships allow students to thrive in academic environments where they can explore their interests, push their limits, and uncover new strengths. Whether awarded for academic excellence, leadership, or unique talents, school scholarships open the door to a richer, more fulfilling college experience.</p>
                                </div>
                                <div class="d2">
                                    <p>UrbanEd helps connect students to these opportunities—so they can focus less on the cost and more on developing the skills, values, and knowledge that will shape their future.</p>
                                </div>
                            </div>
                        </div>

                        <?php foreach ($scholarships as $city => $schools): ?>
                            <article class="article-schools">
                                <figure class="pic-container">
                                    <?php
                                    $cityFile = 'img/city_logos/' . strtolower(str_replace(' ', '', $city));
                                    $cityImg = file_exists($cityFile . '.png') ? $cityFile . '.png' :
                                              (file_exists($cityFile . '.jpg') ? $cityFile . '.jpg' : 'img/city_logos/default.png');
                                    ?>
                                    <img class="city-pic" src="<?= $cityImg ?>" alt="<?= htmlspecialchars($city) ?>">
                                </figure>

                                <div class="art-des">
                                    <div class="art-title">
                                        <h2><?= htmlspecialchars($city) ?></h2>
                                    </div>

                                    <div class="des-art">
                                        <p>Browse available scholarships from local schools inside <?= htmlspecialchars($city) ?>.</p>
                                    </div>

                                    <div class="schools hidden">
                                        <?php foreach ($schools as $s): ?>
                                            <div class="school">
                                                <div class="school-header">
                                                    <?php
                                                        $schoolFile = 'img/school_logos/' . strtolower(str_replace(' ', '', $s['school_name']));
                                                        $schoolImg = file_exists($schoolFile . '.png') ? $schoolFile . '.png' :
                                                                    (file_exists($schoolFile . '.jpg') ? $schoolFile . '.jpg' : 'img/school_logos/default.png');
                                                    ?>
                                                    <img src="<?= $schoolImg ?>" alt="<?= htmlspecialchars($s['school_name']) ?> Logo" class="school-logo">

                                                    <div class="school-details">
                                                        <h3><?= htmlspecialchars($s['school_name']) ?></h3>
                                                    </div>
                                                    <span class="back-arrow">&#8592;</span>
                                                </div>

                                                <div class="hidden-details">
                                                    <div class="scholarship">
                                                        <div class="scholarship-title">
                                                            <h2><?= htmlspecialchars($s['scholarship_title']) ?></h2>
                                                        </div>

                                                        <div class="scholarship-content">
                                                            <p>Requirements:</p>
                                                            <ul>
                                                                <?php 
                                                                $reqs = explode(';', $s['requirements']);
                                                                foreach ($reqs as $req): ?>
                                                                    <li><?= htmlspecialchars(trim($req)) ?></li>
                                                                <?php endforeach; ?>
                                                            </ul>
                                                        </div>

                                                        <?php if (!empty($s['apply_link'])): ?>
                                                            <a href="<?= htmlspecialchars($s['apply_link']) ?>" target="_blank">
                                                                <button class="apply-btn">APPLY</button>
                                                            </a>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </article>
                        <?php endforeach; ?>
                    </div>
                </div>
            
                <div class="sub-nav">
                    <!-- subnav -->
                    <?php require "views/sub-nav.php"?>
                </div>
            </div>
        </main>
        <script src = "assets/javascript/school.js"></script> 
    </body>
</html>