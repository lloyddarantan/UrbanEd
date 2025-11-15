<?php
require 'database/db_connect.php';

$sql = "SELECT id, government, scholarship_title, requirements, apply_link FROM gov_scholarships ORDER BY government";
$result = $conn->query($sql);

$scholarships = [];

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $scholarships[] = $row;
    }
}
$governments = [];
    foreach ($scholarships as $s) {
    $governments[$s['government']][] = $s;
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
                    
                    <a href="scholarships.php"><span class="blue-text">GOVERNMENT SCHOLARSHIP</span></a>
                </nav>
            </div>

            <div class="page-row">
                <div class="page-container">
                    <div class="page-content">
                        <div class="typography">
                            <h1>Government Scholarship</h1>
                        </div>
                        <div class="content">
                            <div class="intro">
                                <p>At UrbanEd, we view Government Scholarships as a commitment to making education accessible for all. These programs provide vital support to students, ensuring that financial challenges do not limit their pursuit of learning.</p>
                            </div>
                            <div class="description">
                                <div class="d1">
                                    <p>These scholarships allow students to thrive in academic environments where they can explore their interests, push their limits, and uncover new strengths. Whether awarded for academic excellence, leadership, or unique talents, school scholarships open the door to a richer, more fulfilling college experience.</p>
                                </div>
                                <div class="d2">
                                    <p>UrbanEd helps connect students to these opportunities, empowering them to study with confidence and contribute to building a stronger society.</p>
                                </div>
                            </div>
                        </div>

                    <?php foreach ($governments as $government => $scholarships): ?>
                        <article class="article-schools">
                            <figure class="pic-container">
                                <?php
                                $govFile = 'img/gov_img/' . strtolower(str_replace(' ', '', $government));
                                $govImg = file_exists($govFile . '.png') ? $govFile . '.png' :
                                        (file_exists($govFile . '.jpg') ? $govFile . '.jpg' : 'img/gov_img/default.png');
                                ?>
                                <img class="city-pic" src="<?= $govImg ?>" alt="<?= htmlspecialchars($government) ?>">
                            </figure>

                            <div class="art-des">
                                <div class="art-title">
                                    <h2><?= htmlspecialchars($government) ?></h2>
                                </div>
                                <div class="des-art">
                                    <p>Browse available scholarships from local schools inside <?= htmlspecialchars($government) ?>.</p>
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