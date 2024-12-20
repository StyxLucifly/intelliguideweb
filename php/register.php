<?php
    session_start();
    $language = isset($_SESSION['language']) ? $_SESSION['language'] : 'nl';

    $texts = [
        'en' => [
            'member' => 'Not a member?',
            'signin' => 'sign in',
            'password' => 'Password',
            'Already' => 'Already a member?',
            'Register' => 'Register',
            'Phone' => 'Phone number',


        ],
        'nl' => [
            'member' => 'Nog geen lid?',
            'signin' => 'log in',
            'password' => 'Wachtwoord',
            'Already' => 'Bent u al lid?',
            'Register' => 'Registreer',
            'Phone' => 'Telefoon nummer',



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
    <title>IntelliGuide • Register</title>
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
                <form action="" class="LoginForm">
                    <div class="InputContainer">
                        <div class="IconContainer">
                            <img src="../img/mail.png" alt="" class="FormIcon">
                        </div>
                        <input type="text" placeholder="E-mail" class="InputLogin">
                    </div>
                    <div class="InputContainer">
                        <div class="IconContainer">
                            <img src="../img/phone.png" alt="" class="FormIcon">
                        </div>
                        <input type="text" placeholder="<?= $texts[$language]['Phone'] ?>" class="InputLogin">
                    </div>
                    <div class="InputContainer">
                        <div class="IconContainer">
                            <img src="../img/padlock.png" alt="" class="FormIcon">
                        </div>
                        <input type="text" placeholder="<?= $texts[$language]['password'] ?>" class="InputLogin">
                    </div>
                    <button class="LoginButton"><?= $texts[$language]['Register'] ?></button>
                    <p class="NotAMemberText"><?= $texts[$language]['Already'] ?> <a href="login.php" class="SignupLink"><?= $texts[$language]['signin'] ?></a></p>
                </form>
                <img src="../img/RobotLeft.png" alt="" class="FormRobotRegister">
            </div>
        </div>
    </div>
</body>
</html>