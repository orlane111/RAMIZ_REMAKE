<?php require_once 'header.php'; ?>

<!-- Hero Section -->

<section class="hero">
  <div class="container">
    <div class="hero-content">
      <h1 class="hero-title">Créer, gérer et faire grandir votre business en Afrique et ailleurs dans le monde</h1>
      <p class="hero-subtitle">Nous avons imaginé ce qu'il vous faut pour créer et étendre votre entreprise partout en Afrique : <span class="hero-highlight">conseil stratégique, assistance bancaire, formalités post-création</span> et plus encore.</p>
      <div class="hero-list-row">
        <div class="hero-list-item"><i class="fas fa-building icon-success"></i> Création d'entreprise</div>
        <div class="hero-list-item"><i class="fas fa-university icon-success"></i> Gestion locative</div>
        <div class="hero-list-item"><i class="fas fa-file-signature icon-success"></i> Formation</div>
      </div>
      <div class="hero-buttons-row">
  <a href="#services" class="btn btn-accent"><i class="fas fa-rocket"></i> Créez une entreprise</a>
  <a href="#services-details" class="btn btn-outline"><i class="fas fa-graduation-cap"></i> Se former</a>
  <a href="#services" class="btn btn-outline"><i class="fas fa-globe"></i> Créer un site Web</a>
      </div>
      <div class="hero-stats">
        <div class="hero-stat-block">
          <span class="hero-stat-icon"><i class="fas fa-users"></i></span>
          <span class="hero-stat-text">Plus de 100 entreprises clientes</span>
        </div>
        <div class="hero-stat-block">
          <span class="hero-stat-icon"><i class="fas fa-file-alt"></i></span>
          <span class="hero-stat-text">Plus de 2000 Business Plan délivrés</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Services Section : Nos Prestations -->
<section id="services" class="section services-section">
  <section class="services-showcase">
    <div class="container">
      <h2 class="section-title">Nos Domaines d'Expertise</h2>

      <!-- Études & Expertise -->
      <div class="service-showcase-item grid-service">
        <div class="service-showcase-left">
          <div class="service-showcase-header">
            <div class="service-icon"><i class="fas fa-lightbulb"></i></div>
            <h3><a href="#etudes-expertise">Études & Expertise</a></h3>
          </div>
          <div class="etudes-expertise-text">
            Boostez votre activité avec RAMIZ !<br><br>
            Nos experts vous accompagnent pour :<br>
            <strong>Créer votre entreprise</strong>,<br>
            <strong>Élaborer un business plan gagnant</strong>,<br>
            <strong>Réaliser une étude de marché précise</strong>.<br><br>
            Nous proposons aussi des solutions d'infographie (site web, logo, carte de visite), une assistance comptable et informatique, et des services techniques innovants.<br><br>
            RAMIZ, c'est l'assurance de solutions sur mesure pour concrétiser vos ambitions !
          </div>
          <div class="cta-row">
            <a href="All_services/Entreprise.php" class="btn btn-accent"><i class="fas fa-handshake"></i> Commencez votre projet</a>
            <a href="Etudes_&_Expertise.php" class="btn btn-outline"><i class="fas fa-eye"></i> Voir les prestations</a>
          </div>
        </div>
        <div class="service-showcase-right">
          <div class="service-showcase-image business-plan-circle">
            <img src="../images/business_plan.jpg" alt="Business Plan" class="circle-img-gradient" />
          </div>
        </div>
      </div>

      <!-- Immobilier & BTP -->
      <div class="service-showcase-item grid-service" style="margin-top: 60px;">
        <div class="service-showcase-right">
          <div class="immo-deco-bg" style="background:url('../images/construire_renover.jpg') center/cover no-repeat;"></div>
        </div>
        <div class="service-showcase-left">
          <div class="service-showcase-header">
            <div class="service-icon"><i class="fas fa-building"></i></div>
            <h3>Immobilier & BTP</h3>
          </div>
          <div class="service-description">
            <strong>Votre partenaire pour tous vos projets immobiliers et BTP</strong><br><br>
            <span class="service-description">RAMIZ vous accompagne dans la gestion, la construction et la rénovation de vos biens, avec des solutions sur mesure.</span>
          </div>
          <ul class="service-features-list">
            <li><strong>Gestion immobilière</strong> : Intermédiation, collecte de loyers, suivi personnalisé</li>
            <li><strong>Construction & Rénovation</strong> : Travaux tous corps d'état, qualité garantie</li>
            <li><strong>Financement de projets</strong> : Recherche de financements adaptés</li>
            <li><strong>Installation professionnelle</strong> : Rideaux, stores et équipements techniques</li>
          </ul>
          <a href="#contact" class="btn btn-primary">Recevoir une offre personnalisée</a>
        </div>
      </div>

      <!-- Formation -->
      <div class="service-showcase-item" style="margin-top: 60px;">
        <div class="full-width-card">
          <div class="formation-content">
            <div class="formation-badges">
              <span class="formation-card-badge">Certifié</span>
              <span class="formation-card-badge">Flexible</span>
              <span class="formation-card-badge">100% pratique</span>
            </div>
            <div class="formation-header">
              <div class="service-icon"><i class="fas fa-graduation-cap"></i></div>
              <h3>Formation Professionnelle</h3>
            </div>
            <div class="formation-desc">
              <strong>Formez-vous avec RAMIZ et boostez votre carrière !</strong><br>
              Modules pratiques pour maîtriser l'informatique, le marketing digital et la gestion d'entreprise.<br>
              <span class="formation-desc-highlight">Des formateurs experts, des résultats concrets, une montée en compétences immédiate.</span>
            </div>
            <div class="formation-categories">
              <div class="formation-category"><span class="formation-category-icon">💻</span><span class="formation-category-label">Bureautique & Informatique</span></div>
              <div class="formation-category"><span class="formation-category-icon">📱</span><span class="formation-category-label">Marketing Digital</span></div>
              <div class="formation-category"><span class="formation-category-icon">📊</span><span class="formation-category-label">Gestion & Comptabilité</span></div>
            </div>
            <div class="cta-row">
              <a href="#services-details" class="btn btn-outline">Voir plus</a>
              <a href="#contact" class="btn btn-accent">Commencer une formation</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Entretien & Maintenance -->
      <section class="service-showcase-item grid-service" aria-labelledby="titre-entretien" role="region" style="margin-top: 60px;">
        <div class="entretien-card-modern entretien-deco-bg">
          <div class="entretien-content">
            <div class="entretien-overlay"></div>
            <div class="service-showcase-header">
              <div class="entretien-broom-icon" aria-hidden="true"><i class="fas fa-broom"></i></div>
              <h2 id="titre-entretien">Entretien & Maintenance</h2>
            </div>
            <div class="entretien-desc">
              <strong>Des locaux impeccables, sans effort.</strong><br>
              Nettoyage professionnel, climatisation et maintenance préventive pour garantir la propreté et le confort de vos espaces.<br>
              <span class="entretien-desc-highlight">Interventions rapides, équipe qualifiée, résultats visibles dès la première visite.</span>
            </div>
            <div class="cta-row" style="margin-top: 25px;">
              <a href="Entretien_&_maintenance.php" class="btn btn-outline" aria-label="Voir les prestations"><i class="fas fa-eye"></i> Voir les prestations</a>
              <a href="All_services/Entretien.php" class="btn btn-accent" aria-label="Demander un devis"><i class="fas fa-handshake"></i> Demander un devis</a>
            </div>
          </div>
        </div>
      </section>
    </div>
  </section>
</section>

<!-- About Section -->
<section id="about" class="section about-section" style="margin-top: 60px; padding-top: 60px;">
  <div class="container">
    <h2 class="section-title">À propos de RAMIZ</h2>
    <div class="about-content">
      <div class="about-block">
        <div class="about-icon"><i class="fas fa-users"></i></div>
        <h2 class="about-title">Qui sommes-nous ?</h2>
        <p class="about-description">
          Chez <span class="about-highlight">RAMIZ</span>, nous sommes bien plus qu'une simple société de services. Nous sommes des partenaires passionnés, animés par une expertise solide, dédiés à transformer vos défis en opportunités. Spécialisés dans des domaines variés tels que l'immobilier, l'assistence à la creation d'entreprise, l'informatique, et la promotion en ligne, nous nous engageons à vous accompagner à chaque étape de votre parcours.
        </p>
      </div>
      <div class="about-block">
        <div class="about-mission">
          <h3 class="about-mission-title">Notre mission</h3>
          <p class="about-mission-desc">
            Notre mission est claire : vous aider à tracer votre chemin. Nous croyons fermement que chaque entreprise mérite de savoir où elle va, d'optimiser sa gestion et d'atteindre ses objectifs avec efficacité et confiance.
          </p>
          <p class="about-mission-desc">
            Nous vous proposons des solutions sur mesure, allant de la gouvernance d'entreprise à l'implémentation opérationnelle. Chaque action que nous entreprenons vise un seul but : vous rendre plus performant sur votre marché. <span class="about-highlight">Ensemble, construisons un avenir où vos ambitions deviennent réalité.</span>
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Contact Section -->
<section id="contact" class="section contact-section">
  <div class="container">
    <h2 class="section-title">Contactez-nous</h2>
    <div class="contact-container">
      <div class="contact-info">
        <h3 class="contact-title">Nous sommes à votre écoute</h3>
        <p class="contact-subtitle">N'hésitez pas à nous contacter pour toute question ou pour discuter de vos projets.</p>
        <div class="contact-item">
          <div class="contact-icon"><i class="fas fa-map-marker-alt"></i></div>
          <div class="contact-details"><h4>Adresse</h4><p>Akouédo-Ancien 37, Abidjan, Côte d'Ivoire</p></div>
        </div>
        <div class="contact-item">
          <div class="contact-icon"><i class="fas fa-envelope"></i></div>
          <div class="contact-details"><h4>Email</h4><p><?= $company_info['email'] ?></p></div>
        </div>
        <div class="contact-item">
          <div class="contact-icon"><i class="fas fa-phone"></i></div>
          <div class="contact-details"><h4>Téléphone</h4><?php foreach (array_slice($contacts, 0, 3) as $contact): ?><p><?= $contact ?></p><?php endforeach; ?></div>
        </div>
      </div>
      <div class="contact-form">
        <form id="contactForm">
          <div class="form-group">
            <label for="name" class="form-label">Nom complet</label>
            <input type="text" id="name" class="form-control" placeholder="Votre nom" required aria-required="true">
          </div>
          <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input type="email" id="email" class="form-control" placeholder="Votre email" required aria-required="true">
          </div>
          <div class="form-group">
            <label for="subject" class="form-label">Sujet</label>
            <input type="text" id="subject" class="form-control" placeholder="Sujet de votre message" required aria-required="true">
          </div>
          <div class="form-group">
            <label for="message" class="form-label">Message</label>
            <textarea id="message" class="form-control" placeholder="Votre message" required aria-required="true"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Envoyer le message</button>
        </form>
      </div>
    </div>
  </div>
</section>

<?php require_once 'footer.php'; ?>