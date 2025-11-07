<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="assets/css/index/about_us/about.css">
</head>

<body>
  <!-- nav -->
  <?php require "views/navigation.php"?>

  <main class="page" tabindex="-1">

    <div class="page-feature">
      <div class="page-divider"></div>
    </div>

    <div class="page-header">
      <nav class="nav-header">
        <a href="index.php">HOME</a>
        <i class="fas fa-angle-right arrow"></i>
        <a href="#"><span class="blue-text">ABOUT US</span></a>
      </nav>
    </div>

    <div class="page-row">
      <div class="page-container">
        <div class="page-content">
          
          <div class="typography">
            <h1>About Us</h1>
          </div>

          <div class="content">
            <div class="intro">
              <p>
                At UrbanEd, we believe education should be a right, not a privilege and 
                financial barriers should never stand in the way of learning.
              </p>
            </div>

            <div class="description">
              <div class="d1">
                <p>
                  Our platform is designed to connect students with a wide range of 
                  scholarship opportunities, from government grants to private funding 
                  and university aid. With UrbanEd, finding the right support becomes 
                  simpler, smarter, and more empowering.
                </p>
              </div>
              <div class="d2">
                <p>
                  We guide students step by step through the application process, 
                  offering tools, expert advice, and real stories from fellow applicants 
                  to make the journey less overwhelming and more achievable.
                </p>
              </div>
              <div class="d2">
                <p>
                  UrbanEd isn’t just about finding scholarships, it’s about opening doors, 
                  unlocking potential, and helping every student discover opportunities 
                  they never thought possible.
                </p>
              </div>
            </div>
          </div>

          <!-- CEO 1 -->
          <article class="ceo">
            <figure class="pic-container">
              <img 
                class="ceo-pic" 
                src="img/about_us/lloyd.png" 
                alt="llyod"
              >
            </figure>
            <div class="ceo-des">
              <div class="ceo-name">
                <h2>Lloyd Darantan</h2>
              </div>
              <div class="des-ceo">
                <p>
                  <i>
                    "At UrbanEd, our vision is simple: no student should ever give up on 
                    education because of financial barriers. We’re building a future where 
                    opportunities are visible, accessible, and achievable for everyone."
                  </i>
                </p>
              </div>
              <p class="title">CEO</p>
            </div>
          </article>

          <!-- CEO 2 -->
          <article class="ceo">
            <figure class="pic-container">
              <img 
                class="ceo-pic" 
                src="img/about_us/mika.jpg" 
                alt="mika"
              >
            </figure>
            <div class="ceo-des">
              <div class="ceo-name">
                <h2>Mikealla Rentuaya</h2>
              </div>
              <div class="des-ceo">
                <p>
                  <i>
                    "Education is the foundation of progress. By guiding students through 
                    scholarships and financial aid, UrbanEd is not just providing resources, 
                    we’re empowering dreams and shaping tomorrow’s leaders."
                  </i>
                </p>
              </div>
              <p class="title">CEO</p>
            </div>
          </article>

          <!-- CEO 3 -->
          <article class="ceo">
            <figure class="pic-container">
              <img 
                class="ceo-pic" 
                src="img/about_us/vince.jpg" 
                alt="vince"
              >
            </figure>
            <div class="ceo-des">
              <div class="ceo-name">
                <h2>Vince Maravilla</h2>
              </div>
              <div class="des-ceo">
                <p>
                  <i>
                    "UrbanEd is more than a platform; it’s a community. We believe in 
                    sharing knowledge, experiences, and support so that every student feels 
                    confident navigating their academic journey."
                  </i>
                </p>
              </div>
              <p class="title">CEO</p>
            </div>
          </article>

        </div>
      </div>
    </div>

  </main>

  <!-- footer -->
  <?php require "views/footer.php"?>
</body>
</html>
