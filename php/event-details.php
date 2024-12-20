<?php
    include 'db.php';

    $eventName = isset($_GET['name']) ? urldecode($_GET['name']) : '';
    if ($eventName) {
        $stmt = $conn->prepare('SELECT naam, datum, locatie FROM evenementen WHERE naam = ?');
        $stmt->bind_param('s', $eventName);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $event = $result->fetch_assoc();
        } else {
            echo "Geen evenement gevonden.";
            exit;
        }
    } else {
        echo "Geen evenement opgegeven.";
        exit;
    }
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.typekit.net/biq6ldp.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="../img/favicon.png" type="image/x-icon">
    <title>IntelliGuide • <?php echo htmlspecialchars($bedrijf['naam']); ?></title>
</head>
<body>
    <div class="gradient">
        <?php 
            include 'pageup.php';
            include 'navbar.php';
        ?>

    <h1 id="eventName"><?php echo htmlspecialchars($event['naam']); ?></h1>
    <p><strong>Datum:</strong> <?php echo htmlspecialchars($event['datum']); ?></p>
    <p><strong>Locatie:</strong> <?php echo htmlspecialchars($event['locatie']); ?></p>

    <?php
        $startTime = date('Ymd\THis', strtotime($event['datum']));
        $eventTitle = urlencode($event['naam']);
        $eventLocation = urlencode($event['locatie']);
        $googleCalendarUrl = "https://calendar.google.com/calendar/render?action=TEMPLATE&text=$eventTitle&dates=$startTime/&location=$eventLocation";
    ?>
    <a href="<?php echo $googleCalendarUrl; ?>" target="_blank" class="buttonAgenda">
        <img src="../img/calendar.png" alt="" class="AgendaImg">
        Zet in agenda
    </a>
</body>
</html>