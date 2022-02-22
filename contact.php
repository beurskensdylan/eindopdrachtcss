<!-- Style voor deze file is te vinden in contactstyle.css -->
<!DOCTYPE html>
<html lang="nl-NL">
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-25NRD7SV92"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-25NRD7SV92', { 'anonymize_ip': true });
        </script>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Embed, dé beddenspecialist van Nederland. Wij verkopen bedden en accesoires in alle soorten en maten.">
        <meta name="author" content="Dylan Beurskens">

        <meta property="og:title" content="CSS Eindopdracht - Contact">
        <meta property="og:description" content="Embed Bedden">
        <meta property="og:image" content="https://www.student77.nl/css_eindopdracht/images/embed_logo-min.png">
        <meta property="og:url" content="https://www.student77.nl/css_eindopdracht/index.php">

        <meta name="twitter:title" content="CSS Eindopdracht - Contact">
        <meta name="twitter:description" content="Embed Bedden">
        <meta name="twitter:image" content=" https://www.student77.nl/css_eindopdracht/images/embed_logo-min.png">
        <meta name="twitter:card" content="https://www.student77.nl/css_eindopdracht/images/embed_logo-min.png">

        <link rel="stylesheet" href="css/desktopstyle.css">
        <link rel="stylesheet" href="css/mobilestyle.css">
        <link rel="stylesheet" href="css/contentstyle.css">
        <link rel="stylesheet" href="css/infopaginastyle.css">
        <link rel="stylesheet" href="css/contactstyle.css">

        <link rel="canonical" href="https://www.student77.nl/css_eindopdracht/contact.php">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">

        <title>CSS Eindopdracht - Contact</title>
    </head>
    <body>
        <div id="container">
        <?php include_once "includes/header.php";?>
        <main>  
            <h1>Contact opnemen?</h1>
            <form>
                <fieldset>
                    <legend>Contact</legend>
                    <label>Voornaam:</label>
                    <input type="text" name="voornaam" placeholder="Uw voornaam" required>
                    <label>Achternaam:</label>
                    <input type="text" name="achternaam" placeholder="Uw achternaam" required>
                    <label>Email Adres:</label>
                    <input type="text" name="email" placeholder="Uw email adres" required>
                    <label>Telefoonnummer: </label>
                    <input type="tel" name="telefoon" placeholder="Uw telefoonnummer" required>
                    <label>Onderwerp</label>
                    <div class="form_radio_buttons">
                        <div class="form_radio_button"><input type="radio" id="producten" name="onderwerp" value="producten"><label for="producten">Producten</label></div>
                        <div class="form_radio_button"><input type="radio" id="bezorging" name="onderwerp" value="bezorging"><label for="bezorging">Bezorging</label></div>
                        <div class="form_radio_button"><input type="radio" id="betaling" name="onderwerp" value="betaling"><label for="betaling">Betaling</label></div>
                        <div class="form_radio_button"><input type="radio" id="garantie" name="onderwerp" value="garantie"><label for="garantie">Garantie</label></div>
                    </div>
                    <label>Uw klacht/vraag</label>
                    <textarea></textarea>
                    <input type="submit" name="verstuur" value="Verstuur">
                </fieldset>
            </form>
        </main>
<?php include_once "includes/footer.php";?>