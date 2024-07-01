<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ludiflex | Login & Register</title>
    <!-- BOXICONS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- STYLE -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    
    <div class="form-container">
        <div class="col col-1">
            <?php include "animated_logo.php"; ?>
            <p class="featured-words">You are few minutes way to boost your skills with <span>Ludiflex</span></p>
        </div>
        <div class="col col-2">
            <div class="btn-box">
                <button class="btn btn-1" id="login">Sign In</button>
                <button class="btn btn-2" id="register">Sign Up</button>
            </div>

            <!-- LOG IN -->
            <div class="login-form">
                <div class="form-title">
                    <span>Sign In</span>
                </div>
                <div class="form-inputs">
                    <div class="input-box">
                        <input type="text" name="" placeholder="Username" class="input-field" required>
                        <i class="bx bx-user icon"></i>
                    </div>
                    <div class="input-box">
                        <input type="password" name="" placeholder="Password" class="input-field" required>
                        <i class="bx bx-lock icon"></i>
                    </div>
                    <div class="forgot-pass">
                        <a href="#">Forgot password?</a>
                    </div>
                    <div class="input-box">
                        <button class="input-submit">
                            <span>Sign In</span>
                            <i class="bx bx-right-arrow-alt"></i>
                        </button>
                    </div>
                </div>
                <div class="social-login">
                    <i class="bx bxl-google"></i>
                    <i class="bx bxl-facebook"></i>
                    <i class="bx bxl-twitter"></i>
                    <i class="bx bxl-github"></i>
                </div>
            </div>

            <!-- REGISTER -->
            <div class="register-form">
                <div class="form-title">
                    <span>Create Account</span>
                </div>
                <div class="form-inputs">
                    <div class="input-box">
                        <input type="text" name="" placeholder="Email" class="input-field" required>
                        <i class="bx bx-envelope icon"></i>
                    </div>
                    <div class="input-box">
                        <input type="text" name="" placeholder="Username" class="input-field" required>
                        <i class="bx bx-user icon"></i>
                    </div>
                    <div class="input-box">
                        <input type="password" name="" placeholder="Password" class="input-field" required>
                        <i class="bx bx-lock icon"></i>
                    </div>
                    <div class="forgot-pass">
                        <a href="#">Forgot password ?</a>
                    </div>
                    <div class="input-box">
                        <button class="input-submit">
                            <span>Sign Up</span>
                            <i class="bx bx-right-arrow-alt"></i>
                        </button>
                    </div>
                </div>
                <div class="social-login">
                    <i class="bx bxl-google"></i>
                    <i class="bx bxl-facebook"></i>
                    <i class="bx bxl-twitter"></i>
                    <i class="bx bxl-github"></i>
                </div>
            </div>
        </div>
    </div>


    

    <!-- JS -->
    <script src="assets/js/main.js"></script>
</body>
</html>