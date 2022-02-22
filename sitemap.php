<!-- De styling voor deze pagina staat helemaal onderaan in desktopstyle.css -->
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

        <meta property="og:title" content="CSS Eindopdracht - Sitemap">
        <meta property="og:description" content="Embed Bedden">
        <meta property="og:image" content="https://www.student77.nl/css_eindopdracht/images/embed_logo-min.png">
        <meta property="og:url" content="https://www.student77.nl/css_eindopdracht/index.php">

        <meta name="twitter:title" content="CSS Eindopdracht - Sitemap">
        <meta name="twitter:description" content="Embed Bedden">
        <meta name="twitter:image" content=" https://www.student77.nl/css_eindopdracht/images/embed_logo-min.png">
        <meta name="twitter:card" content="https://www.student77.nl/css_eindopdracht/images/embed_logo-min.png">

        <link rel="stylesheet" href="css/desktopstyle.css">
        <link rel="stylesheet" href="css/mobilestyle.css">
        <link rel="stylesheet" href="css/contentstyle.css">
        <link rel="stylesheet" href="css/infopaginastyle.css">
        <link rel="stylesheet" href="css/contactstyle.css">

        <link rel="canonical" href="https://www.student77.nl/css_eindopdracht/sitemap.php">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
        
        <title>CSS Eindopdracht - Sitemap</title>
    </head>
    <body>
        <div id="container">
            <?php include_once "includes/header.php";?>
            <main class="sitemap_mainpage">
            <h1>Sitemap</h1>
            <article class="sitemap">
                <section class="assortiment_sitemap">
                    <h2>Assortiment</h2>
                    <ul>
                        <a href="content.php"><li>Interieur</li></a>
                        <a href="content.php"><li>Dekbedden</li></a>
                        <a href="content.php"><li>Dekbedovertrekken</li></a>
                        <a href="content.php"><li>Kussens</li></a>
                        <a href="content.php"><li>Hoeslakens</li></a>
                    </ul>
                </section>
                <section class="brochure_sitemap">
                <h2>Brochure</h2>
                    <ul>
                        <a href="content.php"><li>Brochure</li></a>
                    </ul>
                </section>
                <section class="nieuws_sitemap">
                <h2>Nieuws</h2>
                    <ul>
                        <a href="content.php"><li>Nieuws</li></a>
                    </ul>
                </section>
                <section class="onzewinkels_sitemap">
                <h2>Onze Winkels</h2>
                    <ul>
                        <a href="onze_winkels.php"><li>Onze Winkels</li></a>
                    </ul>
                </section>
                <section class="contact_sitemap">
                <h2>Contact</h2>
                    <ul>
                        <a href="contact.php"><li>Contact</li></a>
                    </ul>
                </section>
                <section class="header_sitemap">
                <h2>Header Links</h2>
                    <ul>
                        <a href="infopagina.php"><li>Aanbiedingen</li></a>
                        <a href="infopagina.php"><li>Service</li></a>
                        <a href="infopagina.php"><li>In uw winkel</li></a>
                        <a href="infopagina.php"><li>Sitemap</li></a>
                        <a href="infopagina.php"><li>Disclaimer</li></a>
                        <hr>
                        <a href="infopagina.php"><li>Mijn Account</li></a>
                        <a href="infopagina.php"><li>Winkelwagen</li></a>
                        <a href="infopagina.php"><li>Klantenservice</li></a>
                    </ul>
                </section>
            </article>
            </main>
<?php include_once "includes/footer.php";?>