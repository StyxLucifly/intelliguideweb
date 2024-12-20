<!-- contact.php -->
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact & Support</title>
    <link rel="stylesheet" href="css/contact.css">
</head>
<body>
    <header>
        <h1>Contact & Support</h1>
        <p>Heb je hulp nodig? Wij staan voor je klaar.</p>
    </header>

    <section class="contact-info">
        <h2>Contactgegevens</h2>
        <p>Algemene vragen: <a href="mailto:info@intelliguide.com">info@intelliguide.com</a></p>
        <p>Technische ondersteuning: <a href="mailto:support@intelliguide.com">support@intelliguide.com</a></p>
        <p>Telefoonnummer: <strong>+31 123 456 789</strong></p>
        <p>Openingstijden:</p>
        <ul>
            <li>Maandag tot vrijdag: 09:00 – 18:00 uur</li>
            <li>Zaterdag: 10:00 – 14:00 uur</li>
        </ul>
    </section>

    <section class="faq-link">
        <h3>Veelgestelde vragen</h3>
        <p>Bezoek onze <a href="faq.php">FAQ-sectie</a> voor snelle antwoorden.</p>
    </section>

    <section class="contact-form">
        <h2>Laat een bericht achter</h2>
        <form action="process_contact.php" method="POST">
            <label for="name">Naam</label>
            <input type="text" id="name" name="name" required placeholder="Je naam...">
            
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" required placeholder="Je e-mailadres...">
            
            <label for="message">Bericht</label>
            <textarea id="message" name="message" rows="5" required placeholder="Je bericht..."></textarea>
            
            <button type="submit">Verstuur bericht</button>
        </form>
    </section>
</body>
</html>
