<!-- Style voor deze file is te vinden in desktopstyle.css en mobilestyle.css -->
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

        <meta property="og:title" content="CSS Eindopdracht - Home">
        <meta property="og:description" content="Embed Bedden">
        <meta property="og:image" content="https://www.student77.nl/css_eindopdracht/images/embed_logo-min.png">
        <meta property="og:url" content="https://www.student77.nl/css_eindopdracht/index.php">

        <meta name="twitter:title" content="CSS Eindopdracht - Home">
        <meta name="twitter:description" content="Embed Bedden">
        <meta name="twitter:image" content=" https://www.student77.nl/css_eindopdracht/images/embed_logo-min.png">
        <meta name="twitter:card" content="https://www.student77.nl/css_eindopdracht/images/embed_logo-min.png">

        <link rel="stylesheet" href="css/desktopstyle.css">
        <link rel="stylesheet" href="css/mobilestyle.css">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">

        <link rel="canonical" href="https://www.student77.nl/css_eindopdracht/index.php">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">

        <script type="application/ld+json">
            {
                "@context": "https://schema.org/",
                "@type": "LocalBusiness",
                "name": "Embed",
                "description": "Bedden en benodigdheden voor alle soorten en maten",
                "image": "images/embed_logo.png",
                "openingHours": "Mo,Tu,We,Th,Fr 08:00-20:00",
                "address": {
                    "@context": "https://schema.org/",
                    "@type": "PostalAddress",
                    "streetAddress": "Parallelweg 102",
                    "postalCode": "9822RH",
                    "addressLocality": "Weert"
                },
                "priceRange": "$$"
            }
        </script>

        <title>CSS Eindopdracht - Home</title>
    </head>
    <body>
        <div id="container">
        <?php include_once "includes/header.php";?>
        <main>
            <article class="slaapkamer_slideshow">
                <section class="slaapkamer_ss_content">
                    <p>&#8249;</p>
                    <div class="korting_message">
                        <p>Nu 10% korting op al het <span>beddengoed!</span></p>
                    </div>
                    <p>&#8250;</p>
                </section>
                <section class="dotsandtext">
                    <div class="dotwrap">
                        <div class="dots"></div>
                        <div class="dots"></div>
                        <div class="dots"></div>
                        <div class="dots"></div>
                        <div class="dots"></div>
                    </div>
                    <p>Bekijk beddengoed &#8250;</p>
                </section>
            </article>
            <article class="mainpagegrid">
                <section class="lentecollectie">
                    <div class="lentecollectie_text">
                        <p>Bekijk de nieuwste</p>
                        <p>Lente collectie</p>   
                    </div>
                </section>
                <section class="filmpje">
                    <div class="play">
                        <i class="fas fa-play"></i>
                    </div>
                </section>
                <section class="brochure">
                    <div class="brochure_text">
                        <p>Bekijk de online</p>
                        <p>Brochure</p>   
                    </div>
                </section>
                <section class="lamp">
                <p>&#8249;</p>
                    <div class="lamp_beschrijving"> 
                        <h1>Nieuw!</h1>
                        <h3>Bureaulamp Philips-522</h3>
                        <p>Nieuw in ons assortiment. Stalen bureaulamp van Philips met handige buigarm. Nu verkrijgbaar in 4 verschillende kleuren.</p>
                        <button>Meer informatie</button>
                    </div>
                    <img src="images/lampje-min.png" alt="Philips Bureaulamp">
                <p>&#8250;</p>
                </section>
                <section class="review">
                    <div class="review_titel">
                        <h2>Geweldig!</h2><img src="images/sterren-min.png" alt="Review Sterren">            
                    </div>
                    <div class="review_text">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim</p>
                    </div>
                    <div class="review_naam_plus_button">
                        <p>Maarten Peters / 20-25 jaar</p>
                        <button>Lees meer reviews</button>
                    </div>
                </section>
            </article>
        </main>
<?php include_once "includes/footer.php";?>