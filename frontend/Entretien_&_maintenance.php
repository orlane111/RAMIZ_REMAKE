<?php require_once 'header.php'; ?>

<section id="services" class="section services-section">
  <div class="container">
    <h2 class="section-title">Entretiens & Maintenance</h2>
    <div class="services-group group-entretien">
      <div class="services-group-header">
        <span class="services-group-icon"><i class="fas fa-broom"></i></span>
        <h3 class="services-group-title">Entretiens & Maintenance</h3>
      </div>
      <p class="services-group-intro">Propreté, confort et performance : nos équipes assurent l’entretien, le nettoyage et la maintenance de vos locaux et équipements avec expertise.</p>
      <div class="slider-wrapper group-entretien-bg animate-fadein">
        <div class="services-slider" id="servicesSlider3" tabindex="0">
          <?php
          $prestations = array_filter([
            ["cat" => "Entretiens", "icon" => "fa-broom", "nom" => "Nettoyage de locaux", "desc" => "Nettoyage de bureaux, maisons, chantiers et espaces verts.", "tarif" => "Devis"],
            ["cat" => "Entretiens", "icon" => "fa-couch", "nom" => "Nettoyage de fauteuil", "desc" => "Nettoyage professionnel de fauteuils.", "tarif" => "10 000 FCFA / place"],
            ["cat" => "Entretiens", "icon" => "fa-snowflake", "nom" => "Climatisation et chambre froide", "desc" => "Installation et maintenance de climatisations et chambres froides.", "tarif" => "Devis"],
          ], function($p) { return $p['cat'] === 'Entretiens'; });
          include 'service_cards.php';
          ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require_once 'footer.php'; ?>
