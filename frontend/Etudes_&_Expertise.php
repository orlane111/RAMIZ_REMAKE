
<?php require_once 'header.php'; ?>

<section id="services" class="section services-section">
  <div class="container">
    <h2 class="section-title">Nos Prestations</h2>
    <!-- Groupe 1 : Étude & Expertise -->
    <div class="services-group group-etude">
      <div class="services-group-header">
        <span class="services-group-icon"><i class="fas fa-search"></i></span>
        <h3 class="services-group-title">Expertise & Étude</h3>
      </div>
      <p class="services-group-intro">Optimisez vos projets et maximisez vos résultats grâce à notre accompagnement stratégique, nos analyses pointues et nos solutions sur-mesure.</p>
      <div class="slider-wrapper group-etude-bg animate-fadein">
        <div class="services-slider" id="servicesSlider1" tabindex="0">
          <?php
          $prestations = array_filter([
            ["cat" => "Étude & Expertise", "icon" => "fa-search", "nom" => "Conception de site web & hébergements", "desc" => "Création de sites web professionnels et solutions d’hébergement adaptés à vos besoins.", "tarif" => "500 000 – 10 000 000 FCFA"],
            ["cat" => "Étude & Expertise", "icon" => "fa-paint-brush", "nom" => "Création de logo", "desc" => "Un logo professionnel pour votre identité visuelle.", "tarif" => "35 000 FCFA"],
            ["cat" => "Étude & Expertise", "icon" => "fa-id-card", "nom" => "Carte de visite", "desc" => "Impression de cartes de visite personnalisées.", "tarif" => "20 000 FCFA / lot de 100"],
            ["cat" => "Étude & Expertise", "icon" => "fa-briefcase", "nom" => "Création d'entreprise", "desc" => "Accompagnement pour la création de votre société.", "tarif" => "100 000 – 200 000 FCFA"],
          ], function($p) { return $p['cat'] === 'Étude & Expertise'; });
          include 'service_cards.php';
          ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require_once 'footer.php'; ?>
