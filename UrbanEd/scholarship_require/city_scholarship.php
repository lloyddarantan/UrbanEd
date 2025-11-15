<?php
require 'database/db_connect.php';

$sql = "SELECT id, city, scholarship_title, requirements, apply_link FROM city_scholarships ORDER BY city";
$result = $conn->query($sql);

$scholarships = [];

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $scholarships[] = $row;
    }
}
$cities = [];
    foreach ($scholarships as $s) {
    $cities[$s['city']][] = $s;
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
                    
                    <a href="scholarships.php"><span class="blue-text">CITY SCHOLARSHIP</span></a>
                </nav>
            </div>

            <div class="page-row">
                <div class="page-container">
                    <div class="page-content"> 
                        <div class="typography">
                            <h1>City Scholarship</h1>
                        </div>
                        <div class="content">
                            <div class="intro">
                                <p>At UrbanEd, we see City Scholarships as more than just financial aid, they are investments in the future of the community. These scholarships provide students with opportunities to access quality education while lessening the financial burden on their families.</p>
                            </div>
                            <div class="description">
                                <div class="d1">
                                    <p>Through City Scholarships, students can focus on excelling in their studies, exploring their interests, and contributing their talents to the growth of their city. Whether awarded for academic achievement, leadership, or community involvement, these scholarships open doors to a brighter and more meaningful college experience.</p>
                                </div>
                                <div class="d2">
                                    <p>UrbanEd helps connect students to these City Scholarship opportunities, so they can worry less about expenses and focus more on developing the skills, values, and knowledge that will not only shape their future but also give back to their community.</p>
                                </div>
                            </div>
                        </div>

                    <?php foreach ($cities as $city => $scholarships): ?>
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
                                <?php foreach ($scholarships as $s): ?>
                                    <div class="school">
                                        <div class="school-header">
                                            <h3><?= htmlspecialchars($s['scholarship_title']) ?></h3>
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