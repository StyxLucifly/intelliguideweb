<?php
    $conn = new mysqli('localhost', 'root', '', 'intelliguidertoo');

    if ($conn->connect_error) {
        die('Databaseverbinding mislukt: ' . $conn->connect_error);
    }

    $naam = isset($_GET['name']) ? urldecode($_GET['name']) : null;

    if ($naam) {
        $stmt = $conn->prepare('SELECT naam, locatie, image FROM bedrijf WHERE naam = ?');
        $stmt->bind_param('s', $naam);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $bedrijf = $result->fetch_assoc();
        } else {
            echo "Geen bedrijf gevonden.";
            exit;
        }

        $stmt = $conn->prepare('SELECT * FROM evenementen WHERE bedrijf_naam = ?');
        $stmt->bind_param('s', $naam);
        $stmt->execute();
        $eventsResult = $stmt->get_result();
    } else {
        echo "Geen bedrijfsnaam opgegeven.";
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

        <div class="image-container">
            <div class="BedrijfNameContainer">
                <h1 class="BedrijfName"><?php echo htmlspecialchars($bedrijf['naam']); ?></h1>
                <p class="BedrijfLocation"><?php echo htmlspecialchars($bedrijf['locatie']); ?></p>
            </div>
            <div class="overlaydetails"></div>
            <img src="../img/<?php echo htmlspecialchars($bedrijf['image']); ?>" alt="Afbeelding van <?php echo htmlspecialchars($bedrijf['naam']); ?>" class="Detailsimage" />
        </div>
        
        <div class="EventsContainer">
            <img src="../img/calendar.png" alt="" class="CalanderIcon">
                <?php if ($eventsResult->num_rows > 0): ?>
                <?php while ($event = $eventsResult->fetch_assoc()): ?>
                <div class="Event">
                    <a href="event-details.php?name=<?php echo urlencode($event['naam']); ?>" class="event-link">
                        <?php echo htmlspecialchars($event['naam']) . htmlspecialchars($event['datum']) . htmlspecialchars($event['tijd']);; ?>
                    </a>
                </div>
                <?php endwhile; ?>

            <?php else: ?>
                <p>Geen evenementen gevonden voor dit bedrijf.</p>
            <?php endif; ?>
        </div>

        <a href="index.php">Terug naar de homepage</a>

        <?php include 'footer.php'; ?>
    </div>
</body>
</html>
