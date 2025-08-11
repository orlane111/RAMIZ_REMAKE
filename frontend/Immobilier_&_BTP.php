
<?php require_once 'header.php'; ?>

<section id="services" class="section services-section">
  <div class="container">
    <h2 class="section-title">Immobilier & BTP</h2>
    <div class="services-group group-immo">
      <div class="services-group-header">
        <span class="services-group-icon"><i class="fas fa-building"></i></span>
        <h3 class="services-group-title">Immobilier & BTP</h3>
      </div>
      <p class="services-group-intro">Confiez-nous vos projets immobiliers et de construction : gestion, rénovation, financement et accompagnement sur-mesure pour bâtir l’avenir.</p>
      <div class="slider-wrapper group-immo-bg animate-fadein">
        <div class="services-slider" id="servicesSlider2" tabindex="0">
          <?php
          $prestations = array_filter([
            ["cat" => "Immobilier & BTP", "icon" => "fa-building", "nom" => "Intermédiation immobilière", "desc" => "Gestion et mise en relation pour vos transactions immobilières.", "tarif" => "Devis"],
            ["cat" => "Immobilier & BTP", "icon" => "fa-coins", "nom" => "Collecte de loyer", "desc" => "Gestion et collecte de loyers pour propriétaires.", "tarif" => "8 – 10 %"],
            ["cat" => "Immobilier & BTP", "icon" => "fa-window-blinds", "nom" => "Installation de rideaux et stores", "desc" => "Pose de rideaux et stores sur mesure.", "tarif" => "Devis"],
            ["cat" => "Immobilier & BTP", "icon" => "fa-hard-hat", "nom" => "Construction bâtiments et travaux divers", "desc" => "Réalisation de tous travaux de construction et rénovation.", "tarif" => "Devis"],
            ["cat" => "Immobilier & BTP", "icon" => "fa-search-dollar", "nom" => "Recherche de financement projets immobiliers", "desc" => "Accompagnement dans la recherche de financements.", "tarif" => "Devis"],
          ], function($p) { return $p['cat'] === 'Immobilier & BTP'; });
          include 'service_cards.php';
          ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require_once 'footer.php'; ?>
