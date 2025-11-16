
<!DOCTYPE html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="assets/css/signup.css">
    </head>
    <body>
        <div class="container">
        
        <div class="left-pane">
            <div class="logo-circle">
                <img src = "img/UrbanEdLogo.png">
            </div>
            <p class="portal-desc">
                Create your account to access your personalized academic and financial profile.
            </p>
        </div>

        <div class="right-pane">
            <div class="form-container">
                <h2 class="form-title">Registration Details</h2>
                <p class="form-subtitle">All fields are required for initial verification.</p>

                <form action = "database/signup_process.php" method = "POST">
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="first-name">First Name</label>
                            <input type="text" id="first-name" name="firstname" required>
                        </div>

                        <div class="form-group">
                            <label for="last-name">Last Name</label>
                            <input type="text" id="last-name" name = "lastname" required>
                        </div>

                        <div class="form-group full-width">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" name = "email" required>
                        </div>

                        <div class="form-group full-width">
                            <label for="password">Password</label>
                            <input type="password" id="password" name = "password" required>
                        </div>

                        <div class="form-group">
                            <label for="contact">Contact Number</label>
                            <input type="tel" id="contact" name = "contactno" required>
                        </div>

                        <div class="form-group">
                            <label for="dob">Date of Birth</label>
                            <input type="date" id="dob" name = "birthdate "required>
                        </div>

                        <div class="form-group full-width">
                            <label for="address">Address</label>
                            <textarea id="address" name ="address" rows="2" required></textarea>
                        </div>
                    </div>

                    <button type="submit" class="submit-btn">Log In</button>
                </form>

                <p class="login-text">
                    Already registered? 
                    <a href="login_page.php">Sign in here</a>
                </p>
            </div>
        </div>
    </div>
    </body>
</html>