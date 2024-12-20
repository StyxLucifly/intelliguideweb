

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.typekit.net/biq6ldp.css">
    <link rel="stylesheet" href="../css/navbar.css">
</head>
<body>
    <script>
        function toggleMenu() {
            const menu = document.getElementById("menu");
            const overlay = document.getElementById("overlay");

            menu.classList.toggle("active");
            overlay.classList.toggle("active");
        }
    </script>
    <div onclick="toggleMenu()"><img src="../img/menu.png" alt="" class="menusImg"></div>

    <div class="menu" id="menu">
        <nav id="side-nav" class="side-navv">
            <div class="NavHomeLogo">
                <img src="../img/WhiteLogo.png" alt="" class="NavLogo">
            </div>
            <div class="NavHomeInside">
                <div class="NavLinkContainer <?= ($activePage == 'Home') ? 'active' : ''; ?>">
                    <a href="index.php">Home<img src="../img/HomeIcon.png" alt="" class="HomeIconNav"></a>
                </div>
                <div class="NavLinkContainer <?= ($activePage == 'Product') ? 'active' : ''; ?>">
                    <a href="product.php">Our product<img src="../img/RobotIcon.png" alt="" class="HomeIconNav"></a>
                </div>
                <div class="NavLinkContainer <?= ($activePage == 'About') ? 'active' : ''; ?>">
                    <a href="about.php">About us<img src="../img/InfoIcon.png" alt="" class="HomeIconNav"></a>
                </div>
                <div class="NavLinkContainer <?= ($activePage == 'Contact') ? 'active' : ''; ?>">
                    <a href="contact.php">Contact<img src="../img/ContactIcon.png" alt="" class="HomeIconNav"></a>
                </div>
                <div class="NavLinkContainer <?= ($activePage == 'Login') ? 'active' : ''; ?>">
                    <a href="login.php">Login<img src="../img/UserIcon.png" alt="" class="HomeIconNav"></a>
                </div>
                
                <a href="settings.php" class="SettingsLink <?= ($activePage == 'Settings') ? 'active' : ''; ?>"><img src="../img/settings.png" alt=""></a>
            </div>
        </nav>
    </div>
    <div class="overlay" id="overlay" onclick="toggleMenu()"></div>
</body>
</html>