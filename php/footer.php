<?php
    $language = isset($_SESSION['language']) ? $_SESSION['language'] : 'nl';

        $texts = [
            'en' => [
                'Quick_links' => 'Quick links',
                'Info' => 'Our info',
                'Send' => 'Send',
                'Privacy' => 'Privacy settings',    
            ],
            'nl' => [
                'Quick_links' => 'Snelle links',
                'Info' => 'Onze info',
                'Send' => 'Verstuur',
                'Privacy' => 'Privacy instellingen',
            ],
        ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/footer.css">
</head>
<body>
    <footer>
        <div class="FooterTop">
            <img src="../img/WhiteLogo.png" alt="">
            <h2>Stay excited, get guided</h2>
        </div>
        <div class="InputContainer">
            <img src="../img/LyingRobot.png" alt="" class="InputRobot">
            <input type="text" placeholder="E-mail" class="InputFooter">
            <button class="SendBtnFooter"><?= $texts[$language]['Send'] ?></button>
        </div>
        <div class="FooterBothLinks">
            <div class="LinksContainer">
                <h2><?= $texts[$language]['Quick_links'] ?></h2>
                <a href="#">Home</a>
                <a href="#">About</a>
                <a href="#">Product</a>
                <a href="#">Login</a>
            </div>
            <div class="LinksContainer">
                <h2><?= $texts[$language]['Info'] ?></h2>
                <a href="#">Eindhoven</a>
                <a href="#">intelliguide@robot.com</a>
                <a href="#">+31 6 12 34 56 78</a>
            </div>
        </div>
        <div class="FooterBottomContainer">
            <h2>Copyright © 2024</h2>
            <div class="BottomRight">
                <h2>Cookies</h2>
                <h2>|</h2>
                <h2><?= $texts[$language]['Privacy'] ?></h2>
            </div>
        </div>
    </footer>
</body>
</html>