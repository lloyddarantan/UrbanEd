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
            </div>
            <h1 class="portal-title">UrbanEd</h1>
            <p class="portal-desc">
                Create your account to access your personalized academic and financial profile.
            </p>
        </div>

        <div class="right-pane">
            <div class="form-container">
                <h2 class="form-title">Log in</h2>
                <p class="form-subtitle">Log in your UrbanEd account</p>

                <form action = "database/login_process.php" method = "POST">
                    <div class="form-grid">

                        <div class="form-group full-width">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" name = "email" required>
                        </div>

                        <div class="form-group full-width">
                            <label for="password">Password</label>
                            <input type="password" id="password" name = "password" required>
                        </div>

                    </div>

                    <button type="submit" class="submit-btn">Log In</button>
                </form>

                <p class="login-text">
                    Have no account?
                    <a href="signup_page.php">Create an account</a>
                </p>
            </div>
        </div>
    </div>
    </body>
</html>