<?php

session_start();

$errors = [
    'login'=> $_SESSION['login_error'] ?? '',
    'register' => $_SESSION['register_error'] ?? '',

];
$activeForm = $_SESSION['active_form'] ?? 'login';

session_unset();

function showError($error) {
    return !empty($error) ?"<p class='error-message'>$error</p>" :  '';
}

function isActiveForm($formName, $activeForm) {
    return $formName === $activeForm ? 'active' : '';
}

?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>IMS Login - Inventory Management System</title>
</head>
<body>
    <div class="container <?= isActiveForm('login', $activeForm); ?>" id="login-form">
        <div class="loginheader">
            <h1>I.M.S</h1>
            <h3>Inventory Management System</h3>
        </div>
        <div class="loginbody">
            <h2>Login</h2>
            <?= showError($errors['login']); ?>
            <form action="login_register.php" method="post">

                <div class="logininputcontainers">
                    <label id="email">EMAIL:</label>
                    <input type="email" name="email" required>
                </div>
                
                <div class="logininputcontainers">
                    <label id="password">PASSWORD:</label>
                    <input type="password" name="password" required>
                </div>

                <div class="loginbutton">
                    <button type="submit" name="login">Login</button>
                </div>

                <div class="registerp">
                    <p>Don't have an account? <a href="#" onclick="showForm('register-form')">Register</a></p>
                </div>

            </form>
        </div>
    </div>

    <div class="container <?= isActiveForm('register', $activeForm); ?>" id="register-form">
        <div class="loginheader">
            <h1>I.M.S</h1>
            <h3>Inventory Management System</h3>
        </div>
        <div class="loginbody">
            <h2>Register</h2>
            <?= showError($errors['register']); ?>
            <form action="login_register.php" method="post">

                <div class="logininputcontainers">
                    <label id="name">NAME:</label>
                    <input type="text" name="name" required>
                </div>

                <div class="logininputcontainers">
                    <label id="register-email">EMAIL:</label>
                    <input type="email" name="email" required>
                </div>
                
                <div class="logininputcontainers">
                    <label id="register-password">PASSWORD:</label>
                    <input type="password" name="password" required>
                </div>

                <div class="loginbutton">
                    <button type="submit" name="register">register</button>
                </div>

                <div class="registerp">
                    <p>Already have an account? <a href="#" onclick="showForm('login-form')">Login</a></p>
                </div>
            </form>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>