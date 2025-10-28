<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php get_header(); ?>
<body>
    

    <div id="slideshow">
    <div class="slide fade">
        <img src="<?php echo get_template_directory_uri(); ?>/vietnam.jpg" alt="Vietnam">
    </div>
    <div class="slide fade">
        <img src="<?php echo get_template_directory_uri(); ?>/thailand.jpg" alt="Thailand">
    </div>
</div>

<section class="bestemmingen">
    <div class="bestemmingen-header">
        <h2>Populaire bestemmingen</h2><br><br>
        <a href="/alle-bestemmingen" class="alle-link">ALLE BESTEMMINGEN &gt;</a> 
    </div>

        <div class="bestemmingen-grid">
            <div class="bestemming">
                <img src="<?php echo get_template_directory_uri(); ?>/vietnam.jpg" alt="Maleisië">
                <h3>Maleisië</h3>
                <p>Bruisend Kuala Lumpur, tropisch Langkawi, Cameron Highlands.</p>
            </div>
            <div class="bestemming">
                <img src="<?php echo get_template_directory_uri(); ?>/vietnam.jpg" alt="Thailand">
                <h3>Thailand</h3>
                <p>Tempels in Chiang Mai, stranden in Krabi, streetfood in Bangkok.</p>
            </div>
            <div class="bestemming">
                <img src="<?php echo get_template_directory_uri(); ?>/vietnam.jpg" alt="Indonesië">
                <h3>Indonesië</h3>
                <p>Bali, Java, Sumatra — een mix van natuur en cultuur.</p>
            </div>
            <div class="bestemming">
                <img src="<?php echo get_template_directory_uri(); ?>/vietnam.jpg" alt="Vietnam">
                <h3>Vietnam</h3>
                <p>Halong Bay, rijstvelden in Sapa, bruisend Hanoi.</p>
            </div>
            <div class="bestemming">
                <img src="<?php echo get_template_directory_uri(); ?>/vietnam.jpg" alt="Filipijnen">
                <h3>Filipijnen</h3>
                <p>Palawan, Cebu, witte stranden en helderblauw water.</p>
            </div>
        </div>
    </section>

    <!-- Overzicht Maleisië -->
   <main class="maleisie-sectie">

    <!-- Grote foto bovenaan -->
    <div class="hero-image">
        <img src="<?php echo get_template_directory_uri(); ?>/vietnam.jpg" alt="Maleisië">
    </div>

    <!-- Content in twee kolommen -->
    <div class="maleisie-content">
        <!-- Linkerkolom: pluspunten -->
        <div class="pluspunten">
            <h2>Leuke pluspunten om te weten</h2>
            <ul>
                <li>✔ Bruisend Kuala Lumpur</li>
                <li>✔ Hooggelegen Cameron Highlands</li>
                <li>✔ Koloniaal Penang</li>
                <li>✔ Tropisch koraaleiland Langkawi</li>
                <li>✔ Entreegelden bij genoemde excursies inclusief</li>
            </ul>
            <img src="<?php echo get_template_directory_uri(); ?>/vietnam.jpg" alt="Maleisië sfeer" class="kleine-foto">
        </div>

        <!-- Rechterkolom: informatie -->
        <div class="informatie">
            <h2>Informatie</h2>
            <p>
                Een reis door Maleisië is een belevenis die je meeneemt langs een mix van culturen, indrukken en schitterende natuur. Tijdens deze individuele rondreis word je door een Engelssprekende chauffeur langs de vele bezienswaardigheden gebracht, die het land rijk is en verblijf je in goede middenklasse hotels.
            </p>
            <h3>Kuala Lumpur en de Cameron Highlands</h3>
            <p>
                Beleef de bruisende hoofdstad Kuala Lumpur door te dwalen langs prachtige koloniale gebouwen of door het altijd levendige Chinatown. Daarna reis je verder naar de hooggelegen Cameron Highlands. Het landschap is hier een aaneenschakeling van eindeloze theevelden, oude koloniale gebouwen en aardbeien- en rozenkwekerijen.
            </p>
            <h3>Historisch Penang en tropisch Langkawi</h3>
            <p>
                Dan is het tijd om de indrukwekkende brug van 13,5 kilometer over te steken naar het eiland Penang, ook wel 'Pearl of the Orient' genoemd.
                Als afsluiter van deze prachtige rondreis ga je heerlijk genieten op het schitterende koraaleiland Langkawi, een waar tropisch paradijs!
            </p>
        </div>
    </div>

    <!-- Google Maps -->
    <div class="maps-embed">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127487.7468130846!2d101.5952759!3d3.1390036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc4b3b5b6b6b6b%3A0x6b6b6b6b6b6b6b6b!2sKuala%20Lumpur%2C%20Malaysia!5e0!3m2!1snl!2snl!4v1660000000000!5m2!1snl!2snl" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>

    <main class="thailand-sectie">

    <!-- Grote foto bovenaan -->
    <div class="hero-image">
        <img src="<?php echo get_template_directory_uri(); ?>/vietnam.jpg" alt="Thailand">
    </div>

    <!-- Content in twee kolommen -->
    <div class="thailand-content">
        <!-- Linkerkolom: pluspunten -->
        <div class="pluspunten">
            <h2>Leuke pluspunten om te weten</h2>
            <ul>
                <li>🚲 Maak een onvergetelijke fietstocht door lokaal Bangkok</li>
                <li>🚉 Bezoek de bijzondere treinmarkt</li>
                <li>🏖️ Geniet van de gezellige badplaats Hua Hin</li>
                <li>🚆 Reis per nachttrein naar het zuiden</li>
                <li>🌴 Geniet van een ontspannen strandverblijf op het tropische Koh Samui</li>
                <li>🎟️ Entreegelden bij genoemde excursies inclusief</li>
            </ul>
            <img src="<?php echo get_template_directory_uri(); ?>/vietnam.jpg" alt="Thailand sfeer" class="kleine-foto">
        </div>

        <!-- Rechterkolom: informatie -->
        <div class="informatie">
            <h2>Informatie</h2>
            <p>
                Deze scherp geprijsde rondreis Thailand neemt je mee van de hoofdstad Bangkok in zuidelijke richting, via Hua Hin naar het tropische eiland Koh Samui.
            </p>
            <h3>Fietsen in Bangkok</h3>
            <p>
                De rondreis begint in de wereldstad Bangkok. Je hebt hier voldoende tijd om zelf op pad te gaan en de mooiste bezienswaardigheden te gaan bekijken. Maar je maakt hier ook een bijzondere fietstour, die je meeneemt naar het echte, lokale Bangkok. Zo fiets je onder andere dwars door een woonwijkje met kleine woningen en zie je hoe het dagelijkse leven hier zijn gangetje gaat.
            </p>
            <h3>Authentieke markten in Thailand</h3>
            <p>
                Dan begint je reis naar het zuiden. Ook hier zie je het lokale leven van dichtbij. Zo bezoek je onder andere een treinmarkt, waar kooplui midden op het spoor hun waar aan de man brengen. Wanneer de trein moet passeren, moeten zij zo snel mogelijk zorgen dat het spoor weer vrij is. Een bijzondere manier van handel drijven! Indien het weekend is, bezoek je ook een authentieke drijvende markt.
            </p>
            <h3>Ontspanning in Hua Hin</h3>
            <p>
                Het is tijd voor ontspanning wanneer je aankomt in de koninklijke badplaats Hua Hin. Hier kun je genieten van het strand en van het gezellige centrum met winkels en uitstekende restaurantjes. Houd je van golf, dan moet je hier zeker een balletje gaan slaan, want hier vind je enkele van de beste golfbanen van Thailand.
            </p>
            <h3>Strandvakantie Koh Samui</h3>
            <p>
                Tenslotte reis je per nachttrein verder in zuidelijke richting, om na een bootovertocht aan te komen op het tropische eiland Koh Samui. Hier kun je gaan genieten van een welverdiend strandverblijf.
            </p>
        </div>
    </div>

    <!-- Google Maps Zuid-Thailand -->
    <div class="maps-embed">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126934.49723593465!2d99.9366054!3d9.5120256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3053dffb0f1e9e3f%3A0x5f0e3f0e3f0e3f0e!2sKoh%20Samui%2C%20Thailand!5e0!3m2!1snl!2snl!4v1660000000000!5m2!1snl!2snl" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>

</main>


</main>






   <?php get_footer(); ?> 
</body>

<script>
    let slides = document.querySelectorAll('.slide');
    let current = 0;

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.classList.remove('active');
            if (i === index) slide.classList.add('active');
        });
    }

    function nextSlide() {
        current = (current + 1) % slides.length;
        showSlide(current);
    }

    showSlide(current);
    setInterval(nextSlide, 4000); // wissel elke 4 seconden
</script>


</html>


