<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="../css/pageup.css">
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var button = document.querySelector(".button");

            button.addEventListener("click", function () {
            // Smooth scroll naar boven
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
            });

            // Voeg deze event listener toe om de zichtbaarheid van de knop te controleren
            window.addEventListener("scroll", function () {
            if (
                document.documentElement.scrollTop > 20 // For Chrome, Firefox, IE, and Opera
            ) {
                button.style.display = "flex";
            } else {
                button.style.display = "none";
            }
            });

            // Voeg deze controle toe bij het laden van de pagina
            if (
            document.documentElement.scrollTop <= 20 // For Chrome, Firefox, IE, and Opera
            ) {
            button.style.display = "none";
            }
        });
    </script>
</head>
<body>

    <button class="button">
        <svg class="svgIcon" viewBox="0 0 384 512">
            <path
            d="M214.6 41.4c-12.5-12.5-32.8-12.5-45.3 0l-160 160c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 141.2V448c0 17.7 14.3 32 32 32s32-14.3 32-32V141.2L329.4 246.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-160-160z"
            ></path>
        </svg>
    </button>

</body>
</html>