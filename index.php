<?php
  // Inclusion de la configuration
  require_once 'config.php';
  
  // Inclusion de l'en-tête
  include 'header.php';
?>

  <!-- Hero Section -->
  <section class="hero" id="accueil">
    <div class="hero-bg"></div>
    <div class="container">
      <div class="hero-content">
        <div class="hero-text">
          <div class="hero-badge">
            <i class="fas fa-star"></i>
            <?= $company_info['tagline'] ?>
          </div>
          <h1 class="hero-title"><?= $company_info['name'] ?></h1>
          <p class="hero-subtitle">
            <?= $company_info['description'] ?> <span class="highlight">sérénité</span>.
          </p>
          <p class="hero-description">
            <?= $company_info['long_description'] ?>
          </p>
          <div class="hero-buttons">
            <button class="btn btn-primary btn-large">
              Découvrir nos services
              <i class="fas fa-arrow-right"></i>
            </button>
            <button class="btn btn-outline btn-large">Nous contacter</button>
          </div>
        </div>

        <div class="hero-visual">
          <div class="hero-image-container">
            <div class="hero-decoration hero-decoration-1"></div>
            <div class="hero-decoration hero-decoration-2"></div>
            <div class="hero-image">
              <img src="images/a_modern_business_image_.jpeg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <section class="services" id="services">
    <div class="container">
      <div class="section-header">
        <div class="section-badge">
          <i class="fas fa-award"></i>
          Excellence & Innovation
        </div>
        <h2 class="section-title">
          Nos <span class="highlight">Services</span>
        </h2>
        <p class="section-description">
          Une gamme complète de solutions premium pour propulser votre entreprise vers de nouveaux sommets
        </p>
      </div>

      <div class="services-grid">
        <?php foreach ($services as $service): ?>
          <div class="service-card" data-color="<?= $service['color'] ?>">
            <div class="service-icon">
              <i class="fas fa-<?= $service['icon'] ?>"></i>
            </div>
            <h3 class="service-title"><?= $service['title'] ?></h3>
            <p class="service-description"><?= $service['description'] ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- News & Events Section -->
  <section class="news" id="actualites">
    <div class="container">
      <div class="section-header">
        <h2 class="section-title">Nos Actualités et Événements</h2>
        <p class="section-description">Restez informé de nos dernières nouvelles et formations</p>
      </div>

      <div class="news-grid">
        <?php foreach ($actualites as $actualite): ?>
          <div class="news-card" data-color="<?= $actualite['color'] ?>">
            <div class="news-image">
              <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="<?= $actualite['title'] ?>">
            </div>
            <div class="news-content">
              <div class="news-badge"><?= $actualite['type'] ?></div>
              <h3 class="news-title"><?= $actualite['title'] ?></h3>
              <p class="news-description"><?= $actualite['description'] ?></p>
              <button class="btn btn-outline btn-full">Lire plus</button>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- À propos Section -->
  <section class="about" id="apropos">
    <div class="container">
      <div class="section-header">
        <div class="section-badge">
          <i class="fas fa-users"></i>
          Qui sommes-nous ?
        </div>
        <h2 class="section-title">
          À propos de <span class="highlight"><?= $company_info['name'] ?></span>
        </h2>
        <p class="section-description">
          Une société de prestation de service motivée par l'expertise, spécialisée dans l'immobilier, la formation, l'informatique et bien plus encore
        </p>
      </div>

      <div class="about-content">
        <div class="about-text">
          <div class="about-item">
            <div class="about-icon">
              <i class="fas fa-building"></i>
            </div>
            <div>
              <h3>Qui sommes-nous ?</h3>
              <p>RAMIZ est une société de prestation de service motivée par l'expertise, spécialisée dans l'immobilier, la formation, l'informatique, la promotion en ligne, les études, l'assistance à la création d'entreprise avec documents de transport, la production des badges PVC, le nettoyage et travaux divers.</p>
            </div>
          </div>
          
          <div class="about-item">
            <div class="about-icon">
              <i class="fas fa-briefcase"></i>
            </div>
            <div>
              <h3>Notre métier</h3>
              <p>Notre métier est d'aider les entreprises à savoir où elles vont, comment optimiser leur gestion et de quelle manière atteindre leurs objectifs efficacement. Nous offrons des solutions allant de la gouvernance d'entreprise jusqu'à l'implémentation opérationnelle, toujours dans le même but : être plus performant sur son marché.</p>
            </div>
          </div>
          
          <div class="about-item">
            <div class="about-icon">
              <i class="fas fa-target"></i>
            </div>
            <div>
              <h3>Notre approche</h3>
              <p>Nous accompagnons nos clients avec expertise et professionnalisme, en leur offrant des solutions sur mesure dans tous les domaines de leurs activités, de la stratégie à l'exécution opérationnelle.</p>
            </div>
          </div>
        </div>
        
        <div class="about-stats">
          <?php foreach ($stats as $stat): ?>
            <div class="stat-item">
              <div class="stat-number"><?= $stat['number'] ?></div>
              <div class="stat-label"><?= $stat['label'] ?></div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

<?php
  // Inclusion du pied de page
  include 'footer.php';
?>
