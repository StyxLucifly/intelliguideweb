<?php
    session_start();
    $language = isset($_SESSION['language']) ? $_SESSION['language'] : 'nl';

    $texts = [
        'en' => [
            'member' => 'Not a member?',
            'signup' => 'Sign up',
            'password' => 'Password',
            'email' => 'E-mail or phone',
        ],
        'nl' => [
            'member' => 'Nog geen lid?',
            'signup' => 'Registreer',
            'password' => 'Wachtwoord',
            'email' => 'E-mail of telefoon',
        ],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.typekit.net/biq6ldp.css">
    <link rel="icon" href="../img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
    <title>IntelliGuide • Login</title>
</head>
<body>
    <?php 
        $activePage = 'Login';
        include 'navbar.php';
        include 'pageup.php';
    ?>

    <div class="gradient">
        <div class="LoginContainer">
            <img src="../img/intelliguide_logo_white.png" alt="" class="LoginLogo">
            <div class="RobotContainer">
                <img src="../img/RobotRight.png" alt="" class="FormRobot">
                <form action="" class="LoginForm">
                    <div class="InputContainer">
                        <div class="IconContainer">
                            <img src="../img/UserIcon.png" alt="" class="FormIcon">
                        </div>
                        <input type="text" placeholder="<?= $texts[$language]['email'] ?>" class="InputLogin">
                    </div>
                    <div class="InputContainer">
                        <div class="IconContainer">
                            <img src="../img/padlock.png" alt="" class="FormIcon">
                        </div>                        
                        <input type="text" placeholder="<?= $texts[$language]['password'] ?>" class="InputLogin">
                    </div>
                    <button class="LoginButton">Login</button>
                    <p class="NotAMemberText"><?= $texts[$language]['member'] ?> <a href="register.php" class="SignupLink"><?= $texts[$language]['signup'] ?></a></p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>