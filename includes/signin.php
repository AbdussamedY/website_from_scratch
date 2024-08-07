<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SensoMotion | Sign In</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="../css/signin.css">
</head> 
<body>
    <?php
        // Afficher le message d'erreur s'il existe
        if (isset($_GET['error'])) {
            echo '<div class="error-banner">' . htmlspecialchars($_GET['error']) . '</div>';
        }
    ?>

    <div class="central-box">
        <div class="col-1">
            <?php include "animated_logo_signin.php"; ?>
        </div>

        <div class="col-2">
            <div class="btn-box">
                <button class="btn btn-1" id="login">Log in</button>
                <button class="btn btn-2" id="register">Register</button>
            </div>

            <div class="Forms">
                <div class="loginForm Form" id="loginForm">
                    <form method="POST" action="../connexion/login.php">
                        <div class="form-title">
                            Sign In
                        </div>
                        <div class="inputs">
                            <div class="input-box">
                                <input type="text" name="username" required class='input-field' placeholder="Username">
                                <i class="material-icons icon">person</i>
                            </div>
                            <div class="input-box">
                                <input type="password" name="password" required class='input-field' placeholder="Password">
                                <i class="material-icons icon">lock</i>
                            </div>
                            <div class="forgot-pass">
                                <a href="#">Forgot Password?</a>
                            </div>
                            <div class="input-box">
                                <button class="input-submit" name="envoi">
                                    Sign In
                                </button>
                            </div>
                        </div>
                    </form>
                </div>


                <div class="registerForm Form" id="registerForm">
                    <form method="POST" action="../connexion/register.php">
                        <div class="form-title">
                            Register
                        </div>
                        <div class="inputs">
                            <div class="input-box">
                                <input type="text" name="invitation_code" required class='input-field' placeholder="Invitation code">
                                <i class="material-icons icon">person</i>
                            </div>
                            <div class="input-box">
                                <input type="text" name="firstname" required class='input-field' placeholder="First Name">
                                <i class="material-icons icon">person</i>
                            </div>
                            <div class="input-box">
                                <input type="text" name="lastname" required class='input-field' placeholder="Last Name">
                                <i class="material-icons icon">person</i>
                            </div>
                            <div class="input-box">
                                <input type="text" name="username" required class='input-field' placeholder="Username">
                                <i class="material-icons icon">person</i>
                            </div>
                            <div class="input-box">
                                <input type="mail" name="email" required class='input-field' placeholder="Email">
                                <i class="material-icons icon">mail</i>
                            </div>
                            <div class="input-box">
                                <select name="position" class="select">
                                    <option value="">-- Select your position --</option>
                                    <option value="Principal Investigator">Principal Investigator</option>
                                    <option value="Post-doc">Post-doc</option>
                                    <option value="Engineer">Engineer</option>
                                    <option value="PhD Student">PhD Student</option>
                                    <option value="M2 Student">M2 Student</option>
                                    <option value="M1 Student">M1 Student</option>
                                    <option value="Undergraduate">Undergraduate</option>
                                </select>
                                <i class="material-icons icon">mail</i>
                            </div>
                            <div class="input-box">
                                <input type="password" name="password" id="password" required class='input-field' placeholder="Password">
                                <i class="material-icons icon">lock</i>
                            </div>
                            <div class="input-box">
                                <input type="password" name="password_confirm" id="password_confirm" required class='input-field' placeholder="Confirm password">
                                <i class="material-icons icon">lock</i>
                            </div>
                            <div class="input-box">
                                <button class="input-submit" name="envoi" id="submit-btn">
                                    Sign up
                                </button>
                                <!-- <input type="submit" name="envoi"> -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="../js/signin.js"></script>
</body>
</html>

