<!-- Style voor deze file is te vinden in contentstyle.css -->
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

        <meta property="og:title" content="CSS Eindopdracht - Content Pagina">
        <meta property="og:description" content="Embed Bedden">
        <meta property="og:image" content="https://www.student77.nl/css_eindopdracht/images/embed_logo-min.png">
        <meta property="og:url" content="https://www.student77.nl/css_eindopdracht/index.php">

        <meta name="twitter:title" content="CSS Eindopdracht - Content Pagina">
        <meta name="twitter:description" content="Embed Bedden">
        <meta name="twitter:image" content=" https://www.student77.nl/css_eindopdracht/images/embed_logo-min.png">
        <meta name="twitter:card" content="https://www.student77.nl/css_eindopdracht/images/embed_logo-min.png">

        <link rel="stylesheet" href="css/desktopstyle.css">
        <link rel="stylesheet" href="css/mobilestyle.css">
        <link rel="stylesheet" href="css/contentstyle.css">
        <link rel="stylesheet" href="css/infopaginastyle.css">
        <link rel="stylesheet" href="css/contactstyle.css">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">

        <link rel="canonical" href="https://www.student77.nl/css_eindopdracht/content.php">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
        <title>CSS Eindopdracht - Content Pagina</title>
    </head>
    <body>
        <div id="container">
        <?php include_once "includes/header.php";?>
        <main>
            <article class="contentslaapkamer">
                <section class="buttonsslaapkamer">
                    <button class="first_button">-</button>
                    <button class="second_button">-</button>
                    <button class="third_button">-</button>
                    <button class="fourth_button">-</button>
                    <button class="fifth_button">-</button>
                    <button class="sixth_button">-</button>
                    <button class="seventh_button">+</button>
                </section>
                <section class="slaapkamercatalogus">
                    <div class="catalogus"><button>-</button> Bed &euro;199,95</div>
                    <div class="catalogus"><button>+</button> Nachtkastje &euro;49,95</div>
                    <div class="catalogus"><button>-</button> Bureaulamp &euro;19,95</div>
                    <div class="catalogus"><button>-</button> Ladekast &euro;79,95</div>
                    <div class="catalogus"><button>-</button> Dekbedovertrek &euro;19,95</div>
                    <div class="catalogus"><button>-</button> Sierkussens &euro;19,95</div>
                    <div class="catalogus"><button>-</button> Schilderij &nbsp;<del>&euro;99,95</del>&nbsp;<span>&euro;79,95</span></div>
                </section>
            </article>
            <article class="informatie">
                <section class="bed_info">
                    <img src="images/bed-min.png" alt="Foto van een bed">
                    <div class="bed_info_text">
                        <h2>Onze bedden garanderen een goede nachtrust</h2>
                        <h4>Lorem ipsum</h4>
                        <p>Dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.</p>
                        <p>Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat</p>
                    </div>
                </section>
                <section class="kastje_info">
                    <div class="kastje_info_text">
                        <h2>Een nachtkastje passend bij elk interieur</h2>
                        <h4>Lorem ipsum</h4>
                        <p>Dolor sit amet, consectetuer adipiscing elit. <span>Aenean commodo</span> ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. <span>Integer tincidunt</span>. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque </p>
                    </div>
                    <img src="images/kastje-min.png" alt="Foto van een kastje">
                </section>
            </article>
            <article class="mainpagegrid_content">
                <section class="lentecollectie_content">
                    <div class="lentecollectie_text">
                        <p>Bekijk de nieuwste</p>
                        <p>Lente collectie</p>   
                    </div>
                </section>
                <section class="filmpje_content">
                    <div class="play">
                        <i class="fas fa-play"></i>
                    </div>
                </section>
                <section class="brochure_content">
                    <div class="brochure_text">
                        <p>Bekijk de online</p>
                        <p>Brochure</p>   
                    </div>
                </section>
            </article> 
        </main>
<?php include_once "includes/footer.php";?>