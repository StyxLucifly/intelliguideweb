<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factuurpagina - IntelliGuide</title>
    <link rel="stylesheet" href="css/factuur.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo">InovateBlue</div>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="products.php">Product</a></li>
            <li><a href="invoice.php">Factuur</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
    </nav>

    <!-- Hero Sectie -->
    <section class="hero">
        <h1>Factuur & Tarieven</h1>
        <p>Transparante kosten en pakketten voor elk evenement.</p>
    </section>

    <!-- Formulier voor bots en data -->
    <div class="invoice-container">
        <section class="section">
            <h2>Huur IntelliGuide</h2>
            <form action="process_invoice.php" method="POST">
                <label for="bots">Aantal bots:</label>
                <input type="number" id="bots" name="bots" min="1" placeholder="Bijv. 5" required>

                <label for="startdate">Startdatum huur:</label>
                <input type="date" id="startdate" name="startdate" required>

                <label for="enddate">Einddatum huur:</label>
                <input type="date" id="enddate" name="enddate" required>

                <label for="package">Kies een pakket:</label>
                <select id="package" name="package">
                    <option value="basic">Basic-pakket</option>
                    <option value="premium">Premium-pakket</option>
                    <option value="custom">Maatwerk</option>
                </select>

                <button type="submit">Factuur genereren</button>
            </form>
        </section>

        <!-- Kosten en Tarieven -->
        <section class="section">
            <h2>Kosten en Tarieven</h2>
            <p><strong>Flexibele oplossingen voor elk budget.</strong></p>
            <h3>Beschikbare pakketten:</h3>
            <ul>
                <li><strong>Basic-pakket:</strong> Inclusief navigatiefuncties en vraag-antwoordopties.</li>
                <li><strong>Premium-pakket:</strong> Alles uit het Basic-pakket, plus meertalige ondersteuning en gepersonaliseerde instellingen.</li>
                <li><strong>Maatwerk:</strong> Speciaal afgestemd op jouw evenement of locatie, inclusief unieke functies. <em>Prijs op aanvraag.</em></li>
            </ul>
            <p><strong>Waarom investeren in IntelliGuide?</strong></p>
            <p>Met IntelliGuide bespaar je op kosten voor extra personeel en printmateriaal. De meeste klanten verdienen hun investering binnen één tot twee evenementen terug dankzij verbeterde efficiëntie en tevredenheid van bezoekers.</p>
            <p><strong>Neem <a href="contact.php">contact</a> met ons op voor een offerte op maat.</strong></p>
        </section>

        <!-- Facturen -->
        <section class="section">
            <h2>Facturen</h2>
            <p><strong>Overzichtelijke en transparante facturatie.</strong></p>
            <p>Na het boeken van IntelliGuide ontvang je binnen 24 uur een gespecificeerde factuur. Hierin staat:</p>
            <ul>
                <li>De gekozen pakketoptie (Basic, Premium of Maatwerk).</li>
                <li>Eventuele extra diensten zoals support of onderhoud.</li>
                <li>Betalingstermijnen en mogelijkheden voor gespreid betalen.</li>
            </ul>
            <h3>Betalingsopties:</h3>
            <ul>
                <li>iDeal</li>
                <li>Bankoverschrijving</li>
                <li>Creditcard</li>
            </ul>
            <p>Heb je vragen over een factuur? Neem contact met ons op via <a href="mailto:finance@intelliguide.com">finance@intelliguide.com</a>.</p>
        </section>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 InovateBlue. Alle rechten voorbehouden.</p>
    </footer>
</body>
</html>
