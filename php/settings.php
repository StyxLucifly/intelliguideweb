
<?php
    session_start();
    $language = isset($_SESSION['language']) ? $_SESSION['language'] : 'nl';

    $texts = [
        'en' => [
            'taal' => 'Language',
            'darkmode' => 'Darkmode',
            'logout' => 'Sign out',
        ],
        'nl' => [
            'taal' => 'Taal',
            'darkmode' => 'Donkere modus',
            'logout' => 'Uitloggen',
        ],
    ];


    if (!isset($_SESSION['language'])) {
        $_SESSION['language'] = 'nl';
    }

    if (isset($_GET['toggle_language'])) {
        $_SESSION['language'] = ($_SESSION['language'] === 'en') ? 'nl' : 'en';
        header("Location: settings.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>IntelliGuide • Settings</title>
</head>
<body>
    <?php 
        $activePage = 'Settings';
        include 'navbar.php';
    ?>
    <div class="AllSettings">
        <div>
            <label class="ui-switch">
                <h2 class="SettingH2"><?= $texts[$language]['taal'] ?></h2>
                <input type="checkbox" id="languageSwitch" <?= ($_SESSION['language'] === 'en') ? 'checked' : '' ?>>
                <div class="slider">
                    <div class="flag"></div>
                </div>
            </label>
            <label class="ui-switch">
                <h2 class="SettingH2"><?= $texts[$language]['darkmode'] ?></h2>
                <input type="checkbox">
                <div class="slider">
                    <div class="circle"></div>
                </div>
            </label>
        </div>
        <button class="LogoutBtn">
            <div class="LogoutBtnDiv">
            <h2><?= $texts[$language]['logout'] ?></h2>
            <img src="../img/logout.png" alt="" class="LogoutImg">
            </div>

        </button>

    </div>

    <script>
        document.getElementById('languageSwitch').addEventListener('change', function() {
            toggleLanguage();
        });

        function toggleLanguage() {
            let newLanguage = document.getElementById('languageSwitch').checked ? 'nl' : 'en';
            window.location.href = '?toggle_language=true';
        }
    </script>
</body>
</html>
