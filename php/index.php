<?php
    session_start();
    $language = isset($_SESSION['language']) ? $_SESSION['language'] : 'nl';

        $texts = [
            'en' => [
                'search_placeholder' => 'Search',
                'ask_me' => 'You can ask me',
                'Anything' => 'Anything',
                'no_results' => 'No results',
                'Our_product' => 'Our product',
                'Over_ons' => 'About us',
                'Title_Welkom' => 'Welcome to IntelliGuide',
                'Welkom_Text' => 'Welcome to IntelliGuide, the future of visitor experiences! Our AI-powered robot guide ensures your event runs smoothly by assisting visitors quickly and efficiently. Whether its directions, information about courses, or answers to frequently asked questions.',
                'Title_Uniek' => 'What makes IntelliGuide unique?',
                'Uniek_text' => 'Easy navigation: Effortlessly find your way at events with our smart guide. Multilingual assistance: IntelliGuide communicates in various languages, perfect for an international audience. Efficiency and convenience: Reduces staff workload and prevents visitor frustration.',
    
            ],
            'nl' => [
                'search_placeholder' => 'Zoek',
                'ask_me' => 'U kunt mij alles',
                'Anything' => 'Vragen',
                'no_results' => 'Geen resultaten',
                'Our_product' => 'Ons product',
                'Over_ons' => 'Over ons',
                'Title_Welkom' => 'Welkom bij IntelliGuide',
                'Welkom_Text' => 'Welkom bij IntelliGuide, de toekomst van bezoekerservaringen! Onze AI-gestuurde robotgids zorgt ervoor dat uw evenement soepel verloopt door bezoekers snel en efficiënt te helpen. Of het nu gaat om routebeschrijvingen, informatie over opleidingen of antwoorden op veelgestelde vragen.',
                'Title_Uniek' => 'Wat maakt IntelliGuide uniek?',
                'Uniek_text' => 'Eenvoudige navigatie: Vind moeiteloos je weg op evenementen met onze slimme gids. Meertalige assistentie: IntelliGuide communiceert in verschillende talen, perfect voor een internationaal publiek. Efficiëntie en gemak: Vermindert de belasting van medewerkers en voorkomt frustraties bij bezoekers.',
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
    <script src="../js/main.js"></script>
    <title>IntelliGuide • Home</title>
</head>
<body>
    <?php 
        include 'pageup.php';
        $activePage = 'Home';
        include 'db.php';
    ?>

    <div class="gradient">
        <div id="overlay" class="overlay"></div>
        <div class="navbar">
            <nav id="side-nav" class="side-nav">
                <div class="NavHomeLogo">
                    <img src="../img/WhiteLogo.png" alt="" class="NavLogo">
                </div>
                <div class="NavHomeInside">
                    <div class="NavLinkContainer" id="NavActive">
                        <a href="index.php">Home<img src="../img/HomeIcon.png" alt="" class="HomeIconNav" id="IconActive"></a>
                    </div>
                    <div class="NavLinkContainer">
                        <a href="login.php"><?= $texts[$language]['Our_product'] ?><img src="../img/RobotIcon.png" alt="" class="HomeIconNav"></a>
                    </div>
                    <div class="NavLinkContainer">
                        <a href="about.php"><?= $texts[$language]['Over_ons'] ?><img src="../img/InfoIcon.png" alt="" class="HomeIconNav"></a>
                    </div>
                    <div class="NavLinkContainer">
                        <a href="login.php">Contact<img src="../img/ContactIcon.png" alt="" class="HomeIconNav"></a>
                    </div>
                    <div class="NavLinkContainer">
                        <a href="login.php">Login<img src="../img/UserIcon.png" alt="" class="HomeIconNav"></a>
                    </div>
                    <a href="settings.php" class="SettingsLink"><img src="../img/settings.png" alt=""></a>
                    <div id="menu-btn"></div>
                </div>
            </nav>
        </div>

        <div class="HomeContainer">
            <img src="../img/intelliguide_logo_white.png" alt="" class="HomeTopImage">
        </div>

        <div class="CompanysContainer">
            <div id="no-results" style="display: none;"><?= $texts[$language]['no_results'] ?></div>
            <div class="ScrollContainer">
                <?php
                    $sql = "SELECT naam, locatie, image FROM bedrijf";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo '<a href="details.php?name=' . urlencode($row['naam']) . '" class="Company" data-name="' . htmlspecialchars($row['naam']) . '">';
                            echo '<img src="../img/' . htmlspecialchars($row['image']) . '" alt="" class="CompanyImage">';
                            echo '<div class="CompanyInfo">';
                            echo '<h2 class="CompanyName">' . htmlspecialchars($row['naam']) . '</h2>';
                            echo '<h3 class="CompanyLoaction">' . htmlspecialchars($row['locatie']) . '</h3>';
                            echo '</div>';
                            echo '</a>';
                        }
                    } else {
                        echo "Geen bedrijven gevonden.";
                    }
                    ?>
            </div>
            <div class="SearchContainer">
                <div class="group">
                    <svg viewBox="0 0 24 24" aria-hidden="true" class="search-icon">
                        <g>
                            <path d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z"></path>
                        </g>
                    </svg>
                    <input id="query" class="inputfancy" type="search" placeholder="<?= $texts[$language]['search_placeholder'] ?>" name="searchbar"/>
                </div>
            </div>
        </div>

        <div class="AskMeContainer">
            <img src="../img/float.png" alt="" class="FloatImg">
            <div class="AskmeTextContainer">
                <h3><?= $texts[$language]['ask_me'] ?></h3>
                <h2><?= $texts[$language]['Anything'] ?></h2>
            </div>
        </div>

        <div class="Nearby">
            <div class="NearbyEventsContainer">
                <h2 class="EventsNearbyH2">Evenementen in de buurt</h2>
                <div id="events-list">
                    <?php
                        $sql = "SELECT naam, locatie, datum FROM evenementen";
                        $result = $conn->query($sql);
                        
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                $address = urlencode($row['locatie']);
                                $url = "https://nominatim.openstreetmap.org/search?q=$address&format=json&limit=1";
                        
                                $context = stream_context_create([
                                    "http" => [
                                        "header" => "User-Agent: IntelliGuide/1.0 (example@example.com)"
                                    ]
                                ]);
                        
                                $response = file_get_contents($url, false, $context);
                                if ($response) {
                                    $data = json_decode($response, true);
                        
                                    if (!empty($data)) {
                                        $latitude = $data[0]['lat'];
                                        $longitude = $data[0]['lon'];

                                        echo '<a href="event-details.php?name=' . urlencode($row['naam']) . '" class="event" data-latitude="' . htmlspecialchars($latitude) . '" data-longitude="' . htmlspecialchars($longitude) . '">';
                                        echo '<h3>' . htmlspecialchars($row['naam']) . '</h3>';
                                        echo '<div class="eventPlaceDate">';
                                        echo '<p>' . htmlspecialchars($row['locatie']) . '</p>';
                                        echo '<p>' . htmlspecialchars($row['datum']) . '</p>';
                                        echo '</div>';
                                        echo '</a>';
                                        
                                    } else {
                                        echo '<div>Geen coördinaten gevonden voor: ' . htmlspecialchars($row['locatie']) . '</div>';
                                    }
                                } else {
                                    echo '<div>Kon geen gegevens ophalen voor: ' . htmlspecialchars($row['locatie']) . '</div>';
                                }
                            }
                        } else {
                            echo '<div>Geen evenementen gevonden.</div>';
                        }
                        
                        $conn->close();
                    ?>
                </div>
            </div>
        </div>

        <div class="RelativeContainer">
            <div class="InfoTextContainer">
                <div class="TextContainer">
                    <h2><?= $texts[$language]['Title_Welkom'] ?></h2>
                    <p><?= $texts[$language]['Welkom_Text'] ?></p>
                </div>
                <div class="TextContainer">
                    <h2><?= $texts[$language]['Title_Uniek'] ?></h2>
                    <p><?= $texts[$language]['Uniek_text'] ?></p>
                </div>
            </div>
            <img src="../img/RobotRight.png" alt="" class="PeakingRobot">
        </div>

        <script>
            const menuBtn = document.getElementById('menu-btn');
            const sideNav = document.getElementById('side-nav');
            const overlay = document.getElementById('overlay');

            menuBtn.addEventListener('click', () => {
            sideNav.classList.toggle('open');
            overlay.classList.toggle('active');
            document.body.style.overflow = sideNav.classList.contains('open') ? 'hidden' : 'auto';
            });

            overlay.addEventListener('click', () => {
            sideNav.classList.remove('open');
            overlay.classList.remove('active');
            document.body.style.overflow = 'auto';
            });

            const searchInput = document.getElementById('query');
            const companies = document.querySelectorAll('.Company');
            const noResults = document.getElementById('no-results');

            searchInput.addEventListener('input', () => {
                const query = searchInput.value.toLowerCase();
                let hasResults = false;

                companies.forEach(company => {
                    const name = company.dataset.name.toLowerCase();
                    if (name.includes(query)) {
                        company.style.display = 'flex';
                        hasResults = true;
                    } else {
                        company.style.display = 'none';
                    }
                });

                noResults.style.display = hasResults ? 'none' : 'block';
            });
        </script>

        <script>
            const userCoordinates = { latitude: null, longitude: null };

            function calculateDistance(lat1, lon1, lat2, lon2) {
                const R = 6371;
                const dLat = (lat2 - lat1) * (Math.PI / 180);
                const dLon = (lon2 - lon1) * (Math.PI / 180);
                const a = 
                    Math.sin(dLat / 2) * Math.sin(dLat / 2) +
                    Math.cos(lat1 * (Math.PI / 180)) * Math.cos(lat2 * (Math.PI / 180)) *
                    Math.sin(dLon / 2) * Math.sin(dLon / 2);
                const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
                return R * c;
            }
            const eventsList = document.getElementById('events-list');
            const noNearbyEvents = document.createElement('div');
            noNearbyEvents.textContent = 'Geen evenementen in de buurt.';
            noNearbyEvents.style.display = 'none';
            noNearbyEvents.style.textAlign = 'center';
            noNearbyEvents.style.marginTop = '20px';
            eventsList.appendChild(noNearbyEvents);

            if ('geolocation' in navigator) {
                navigator.geolocation.getCurrentPosition(function (position) {
                    userCoordinates.latitude = position.coords.latitude;
                    userCoordinates.longitude = position.coords.longitude;

                    const events = document.querySelectorAll('.NearbyEventsContainer .event');
                    let hasNearbyEvents = false;

                    events.forEach(event => {
                        const eventLat = parseFloat(event.dataset.latitude);
                        const eventLon = parseFloat(event.dataset.longitude);

                        if (!isNaN(eventLat) && !isNaN(eventLon)) {
                            const distance = calculateDistance(
                                userCoordinates.latitude,
                                userCoordinates.longitude,
                                eventLat,
                                eventLon
                            );

                            if (distance <= 1) {
                                event.style.display = 'flex';
                                hasNearbyEvents = true;
                            } else {
                                event.style.display = 'none';
                            }
                        }
                    });

                    if (!hasNearbyEvents) {
                        noNearbyEvents.style.display = 'block';
                    }
                }, function (error) {
                    console.log('Error bij het ophalen van de locatie:', error);
                    noNearbyEvents.style.display = 'block';
                }, {
                    enableHighAccuracy: true,
                    timeout: 5000,
                    maximumAge: 0
                });
            } else {
                console.log('Geolocatie wordt niet ondersteund door uw browser.');
                noNearbyEvents.style.display = 'block';
            }
        </script>

        <script>
            var target = document.getElementById('target');
            var watchId;

            function appendLocation(location, verb) {
                verb = verb || 'updated';
                var latitude = location.coords.latitude;
                var longitude = location.coords.longitude;
                var newLocation = document.createElement('p');
                newLocation.innerHTML = `Location ${verb}: ${latitude}, ${longitude}`;
                target.appendChild(newLocation);

                fetch(`https://nominatim.openstreetmap.org/reverse?format=json&lat=${latitude}&lon=${longitude}`)
                .then(response => response.json())
                .then(data => {
                    var address = document.createElement('p');
                    address.innerHTML = `Address: ${data.address.road || 'N/A'}, ${data.address.city || data.address.town || data.address.village || 'N/A'}, ${data.address.country || 'N/A'}`;
                    target.appendChild(address);
                })
                .catch(error => {
                    console.error('Error with reverse geocoding:', error);
                });
            }

            if ('geolocation' in navigator) {
                document.getElementById('askButton').addEventListener('click', function () {
                navigator.geolocation.getCurrentPosition(function (location) {
                    appendLocation(location, 'fetched');
                });
                watchId = navigator.geolocation.watchPosition(appendLocation);
                });
            } else {
                target.innerText = 'Geolocation API not supported.';
            }
        </script>

        <?php include 'footer.php' ?>
    </div>
</body>
</html>