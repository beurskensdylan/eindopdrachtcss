<!-- Style voor deze file is te vinden in infopaginastyle.css -->
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

        <meta property="og:title" content="CSS Eindopdracht - InfoPagina">
        <meta property="og:description" content="Embed Bedden">
        <meta property="og:image" content="https://www.student77.nl/css_eindopdracht/images/embed_logo-min.png">
        <meta property="og:url" content="https://www.student77.nl/css_eindopdracht/index.php">

        <meta name="twitter:title" content="CSS Eindopdracht - InfoPagina">
        <meta name="twitter:description" content="Embed Bedden">
        <meta name="twitter:image" content=" https://www.student77.nl/css_eindopdracht/images/embed_logo-min.png">
        <meta name="twitter:card" content="https://www.student77.nl/css_eindopdracht/images/embed_logo-min.png">

        <link rel="stylesheet" href="css/desktopstyle.css">
        <link rel="stylesheet" href="css/mobilestyle.css">
        <link rel="stylesheet" href="css/contentstyle.css">
        <link rel="stylesheet" href="css/infopaginastyle.css">
        <link rel="stylesheet" href="css/contactstyle.css">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">

        <link rel="canonical" href="https://www.student77.nl/css_eindopdracht/infopagina.php">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
        
        <title>CSS Eindopdracht - InfoPagina</title>
    </head>
    <body>
        <div id="container">
        <?php include_once "includes/header.php";?>
        <main>
            <article class="algemene_informatie">
                <section class="veelgestelde_vragen">
                    <h1>Hoe kunnen we je helpen?</h1>
                    </h4>Bekijk de meestgestelde vragen</h4>
                    <p>Je hoeft bij ons niet wakker te liggen van vragen over onze producten, service of jouw bestelling. De meestgestelde vragen van onze klanten staan hier onder op een rijtje.</p>
                </section>
                <section class="klantenservice">
                    <h4>Waarom kan ik de klantenservice moeilijk bereiken?</h4>
                    <p>Door een ongekend hoge vraag is onze klantenservice op dit moment drukker dan ooit tevoren. Helaas houdt dit in dat we momenteel niet iedereen zo snel kunnen helpen zoals we dit graag zouden willen. We doen er elke dag alles aan om onze service te verbeteren. De meest gestelde vragen vind je hier, we hopen dat het antwoord op je vraag hierbij staat.</p>
                </section>
                <section class="levertijd">
                    <h4>Wat is de levertijd van mijn bestelling?</h4>
                    <p>De levertijd van je bestelling hangt af van je productkeuze. De meest gangbare maten zijn bij ons op voorraad. Wanneer jouw product een minder gangbare maat heeft, wordt het product speciaal voor jou besteld. Bij het plaatsen van je bestelling wordt de levertijd aangegeven.
                    Heb je online een bestelling geplaatst? Dan wordt je bestelling via pakketpost of vrachtwagen geleverd. Let op: door extreme drukte duurt de bezorging van pakketpost een stuk langer dan je van ons gewend bent. Excuses voor het ongemak.</p>
                </section>
            </article>
            <artcile class="mainpagegrid_info">
                <section class="lentecollectie_info">
                    <div class="lentecollectie_text">
                        <p>Bekijk de nieuwste</p>
                        <p>Lente collectie</p>   
                    </div>
                </section>
                <section class="filmpje_info">
                    <div class="play">
                        <i class="fas fa-play"></i>
                    </div>
                </section>
                <section class="brochure_info">
                    <div class="brochure_text">
                        <p>Bekijk de online</p>
                        <p>Brochure</p>   
                    </div>
                </section>
            </article>
        </main>
<?php include_once "includes/footer.php";?>