</section>


<?php require_once 'header.php'; ?>

<!-- Hero Section -->
<section class="hero">
  <div class="container">
    <div class="hero-content">
      <h1 class="hero-title" style="color:#53c600; letter-spacing:2px; font-weight:900; font-size:3.2rem; text-shadow:0 2px 16px rgba(83,198,0,0.10);">RAMIZ</h1>
      <p class="hero-subtitle">Solutions d'excellence pour votre entreprise : du conseil stratégique aux services techniques, nous transformons vos ambitions en réalité.</p>
      <div class="hero-buttons">
        <a href="#services" class="btn btn-accent">Découvrir nos services</a>
        <a href="#contact" class="btn btn-outline">Nous contacter</a>
      </div>
    </div>
  </div>
</section>

<!-- Services Section : Cards pour chaque prestation avec plusieurs CTA (Commander, Discuter, Demander un devis) -->
<section id="services" class="section services-section" style="background: #f8fcf7;">
  <div class="container">
    <h2 class="section-title" style="text-align:center; color:#234d20; font-size:2.1rem; letter-spacing:1px; margin-bottom:18px;">Nos Prestations</h2>
    <div class="slider-wrapper">
      <div class="services-slider" id="servicesSlider" tabindex="0">
        <?php
        $prestations = [
          // Étude & Expertise
          [
            "cat" => "Étude & Expertise",
            "icon" => "fa-search",
            "nom" => "Conception de site web & hébergements",
            "desc" => "Création de sites web professionnels et solutions d’hébergement adaptés à vos besoins.",
            "tarif" => "500 000 – 10 000 000 FCFA"
          ],
          [
            "cat" => "Étude & Expertise",
            "icon" => "fa-paint-brush",
            "nom" => "Création de logo",
            "desc" => "Un logo professionnel pour votre identité visuelle.",
            "tarif" => "35 000 FCFA"
          ],
          [
            "cat" => "Étude & Expertise",
            "icon" => "fa-id-card",
            "nom" => "Carte de visite",
            "desc" => "Impression de cartes de visite personnalisées.",
            "tarif" => "20 000 FCFA / lot de 100"
          ],
          [
            "cat" => "Étude & Expertise",
            "icon" => "fa-address-card",
            "nom" => "Badge PVC",
            "desc" => "Conception et impression de badges PVC pour entreprise.",
            "tarif" => "1 000 – 2 500 FCFA"
          ],
          [
            "cat" => "Étude & Expertise",
            "icon" => "fa-book",
            "nom" => "Catalogue numérique",
            "desc" => "Création de catalogues digitaux pour vos produits et services.",
            "tarif" => "100 000 FCFA"
          ],
          [
            "cat" => "Étude & Expertise",
            "icon" => "fa-bullhorn",
            "nom" => "Promotion sur les réseaux sociaux",
            "desc" => "Stratégies et campagnes pour booster votre visibilité.",
            "tarif" => "30 000 – 100 000 FCFA"
          ],
          [
            "cat" => "Étude & Expertise",
            "icon" => "fa-envelope",
            "nom" => "Emailing",
            "desc" => "Campagnes de mailing professionnelles.",
            "tarif" => "Devis"
          ],
          [
            "cat" => "Étude & Expertise",
            "icon" => "fa-video",
            "nom" => "Installation caméras de surveillance",
            "desc" => "Sécurisation de vos locaux par vidéosurveillance.",
            "tarif" => "Devis"
          ],
          [
            "cat" => "Étude & Expertise",
            "icon" => "fa-desktop",
            "nom" => "Assistance informatique",
            "desc" => "Support technique et maintenance informatique.",
            "tarif" => "50 000 – 150 000 FCFA"
          ],
          [
            "cat" => "Étude & Expertise",
            "icon" => "fa-calculator",
            "nom" => "Assistance comptable",
            "desc" => "Accompagnement et gestion comptable.",
            "tarif" => "50 000 – 150 000 FCFA"
          ],
          [
            "cat" => "Étude & Expertise",
            "icon" => "fa-file-alt",
            "nom" => "Business plan",
            "desc" => "Réalisation de business plan personnalisé.",
            "tarif" => "50 000 – 200 000 FCFA"
          ],
          [
            "cat" => "Étude & Expertise",
            "icon" => "fa-chart-line",
            "nom" => "Étude de marché",
            "desc" => "Analyse du marché pour orienter votre stratégie.",
            "tarif" => "À partir de 300 000 FCFA"
          ],
          [
            "cat" => "Étude & Expertise",
            "icon" => "fa-briefcase",
            "nom" => "Création d'entreprise",
            "desc" => "Accompagnement pour la création de votre société.",
            "tarif" => "100 000 – 200 000 FCFA"
          ],
          // Immobilier & BTP
          [
            "cat" => "Immobilier & BTP",
            "icon" => "fa-building",
            "nom" => "Intermédiation immobilière",
            "desc" => "Gestion et mise en relation pour vos transactions immobilières.",
            "tarif" => "Devis"
          ],
          [
            "cat" => "Immobilier & BTP",
            "icon" => "fa-coins",
            "nom" => "Collecte de loyer",
            "desc" => "Gestion et collecte de loyers pour propriétaires.",
            "tarif" => "8 – 10 %"
          ],
          [
            "cat" => "Immobilier & BTP",
            "icon" => "fa-window-blinds",
            "nom" => "Installation de rideaux et stores",
            "desc" => "Pose de rideaux et stores sur mesure.",
            "tarif" => "Devis"
          ],
          [
            "cat" => "Immobilier & BTP",
            "icon" => "fa-hard-hat",
            "nom" => "Construction bâtiments et travaux divers",
            "desc" => "Réalisation de tous travaux de construction et rénovation.",
            "tarif" => "Devis"
          ],
          [
            "cat" => "Immobilier & BTP",
            "icon" => "fa-search-dollar",
            "nom" => "Recherche de financement projets immobiliers",
            "desc" => "Accompagnement dans la recherche de financements.",
            "tarif" => "Devis"
          ],
          // Entretiens
          [
            "cat" => "Entretiens",
            "icon" => "fa-broom",
            "nom" => "Nettoyage de locaux",
            "desc" => "Nettoyage de bureaux, maisons, chantiers et espaces verts.",
            "tarif" => "Devis"
          ],
          [
            "cat" => "Entretiens",
            "icon" => "fa-couch",
            "nom" => "Nettoyage de fauteuil",
            "desc" => "Nettoyage professionnel de fauteuils.",
            "tarif" => "10 000 FCFA / place"
          ],
          [
            "cat" => "Entretiens",
            "icon" => "fa-snowflake",
            "nom" => "Climatisation et chambre froide",
            "desc" => "Installation et maintenance de climatisations et chambres froides.",
            "tarif" => "Devis"
          ],
        ];
        foreach (array_merge($prestations, $prestations) as $presta) {
          $bg = ($presta['cat'] === "Étude & Expertise") ? "#aaf740" : (($presta['cat'] === "Immobilier & BTP") ? "#61bb6a" : "#ffe56c");
          echo '<div class="service-card">
            <div class="service-card-header" style="background:'.$bg.';padding:36px 0 18px 0;text-align:center;">
              <i class="fas '.$presta['icon'].'" style="font-size:3.2rem;opacity:0.7;"></i>
            </div>
            <div class="service-card-body" style="padding:28px 26px 0 26px;display:flex;flex-direction:column;flex:1 1 auto;">
              <h3 style="color:#234d20;font-size:1.3rem;font-weight:700;margin-bottom:12px;">'.$presta['nom'].'</h3>
              <p style="color:#62696d;font-size:1.05rem;margin-bottom:16px;flex:1 1 auto;">'.$presta['desc'].'</p>
              <div style="font-size:1.08rem;font-weight:600;color:#27ae60;margin-bottom:22px;">Tarif : <span style="color:#2b7d2b;">'.$presta['tarif'].'</span></div>
              <div style="display:flex;gap:10px;margin-bottom:7px;flex-wrap:wrap;justify-content:center;">
                '.(
                  strtolower(trim($presta['tarif'])) === 'devis'
                  ? '<a href="#contact" class="btn" style="background:#ffd600;color:#234d20;font-weight:700;padding:11px 18px;border-radius:7px;font-size:1.04rem;text-decoration:none;">Demander un devis</a>'
                    .'<a href="#contact" class="btn" style="background:#fff;border:2px solid #53c600;color:#53c600;font-weight:700;padding:11px 18px;border-radius:7px;font-size:1.04rem;text-decoration:none;">Discuter</a>'
                  : '<a href="#contact" class="btn" style="background:#53c600;color:#fff;font-weight:700;padding:11px 20px;border-radius:7px;font-size:1.04rem;text-decoration:none;">Commander</a>'
                    .'<a href="#contact" class="btn" style="background:#fff;border:2px solid #53c600;color:#53c600;font-weight:700;padding:11px 18px;border-radius:7px;font-size:1.04rem;text-decoration:none;">Discuter</a>'
                ).'
              </div>
            </div>
          </div>';
        }
        ?>
      </div>
    </div>
  </div>
</section>
<style>
/* --- Slider & Cards --- */
.services-slider {
  display: flex;
  gap: 32px;
  overflow-x: auto;
  scrollbar-width: none !important;
  -ms-overflow-style: none !important;
  will-change: scroll-position;
  scroll-behavior: smooth;
}
.services-slider:hover,
.services-slider:focus {
  cursor: grab;
}
.services-slider:active {
  cursor: grabbing;
}
.services-slider::-webkit-scrollbar {
  display: none !important;
}
.slider-wrapper {
  position: relative;
  overflow: hidden;
  background: linear-gradient(90deg, #e3f0e3 0%, #f8fcf7 100%);
  border-radius: 18px;
  padding: 32px 0 32px 0;
}
.service-card {
  min-width: 350px;
  max-width: 350px;
  height: 480px;
  background: linear-gradient(135deg, #f8fcf7 0%, #fff 100%);
  border-radius: 18px;
  box-shadow: 0 6px 24px rgba(102,204,0,0.09);
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  margin-bottom: 14px;
  align-items: stretch;
  transition: transform 0.38s cubic-bezier(.22,1.1,.36,1), box-shadow 0.38s cubic-bezier(.22,1.1,.36,1);
}
.service-card:hover {
  transform: scale(1.22) translateY(-28px) rotateZ(-1.5deg);
  box-shadow: 0 40px 120px 0 rgba(83,198,0,0.25), 0 12px 40px 0 rgba(0,0,0,0.15);
  z-index:2;
  border: 2.5px solid #53c600;
}
.btn {
  transition: background 0.22s, color 0.22s, box-shadow 0.22s, border 0.22s;
  box-shadow: 0 2px 8px 0 rgba(83,198,0,0.07);
}
.btn:hover, .btn:focus {
  background: #53c600 !important;
  color: #fff !important;
  border-color: #53c600 !important;
  box-shadow: 0 6px 24px 0 rgba(83,198,0,0.18);
  transform: translateY(-2px) scale(1.04);
}
@media (max-width: 600px) {
  .service-card { min-width: 80vw; max-width: 95vw; }
  .services-slider { gap: 12px; }
  .service-card:hover { transform: scale(1.08) translateY(-8px) !important; }
}
</style>

<script>
// Auto-scroll JS fluide, pause au survol ou scroll manuel, puis reprise douce
document.addEventListener('DOMContentLoaded', function() {
  const slider = document.getElementById('servicesSlider');
  if (!slider) return;
  let isPaused = false;
  let scrollSpeed = 1.5; // px/frame
  let pauseTimeout = null;
  let lastScrollLeft = slider.scrollLeft;
  const resetAt = slider.scrollWidth / 2;

  function autoScroll() {
    if (!isPaused) {
      lastScrollLeft += scrollSpeed;
      slider.scrollLeft += (lastScrollLeft - slider.scrollLeft) * 0.25;
      // Reset pour effet infini
      if (slider.scrollLeft >= resetAt) {
        slider.scrollLeft = 0;
        lastScrollLeft = 0;
      }
    } else {
      lastScrollLeft = slider.scrollLeft;
    }
    requestAnimationFrame(autoScroll);
  }
  autoScroll();

  // Pause auto-scroll au survol
  slider.addEventListener('mouseenter', () => { isPaused = true; });
  slider.addEventListener('mouseleave', () => { isPaused = false; });

  // Pause auto-scroll lors du scroll manuel (souris/tactile)
  let lastScroll = 0;
  slider.addEventListener('scroll', () => {
    isPaused = true;
    lastScroll = Date.now();
    if (pauseTimeout) clearTimeout(pauseTimeout);
    pauseTimeout = setTimeout(() => {
      if (Date.now() - lastScroll > 700) isPaused = false;
    }, 800);
  }, { passive: true });

  // Drag horizontal à la souris (desktop)
  let isDown = false;
  let startX, scrollLeftStart;
  slider.addEventListener('mousedown', (e) => {
    isDown = true;
    slider.classList.add('dragging');
    startX = e.pageX - slider.offsetLeft;
    scrollLeftStart = slider.scrollLeft;
    isPaused = true;
  });
  slider.addEventListener('mouseleave', () => {
    isDown = false;
    slider.classList.remove('dragging');
    isPaused = false;
  });
  slider.addEventListener('mouseup', () => {
    isDown = false;
    slider.classList.remove('dragging');
    setTimeout(() => { isPaused = false; }, 400);
  });
  slider.addEventListener('mousemove', (e) => {
    if (!isDown) return;
    e.preventDefault();
    const x = e.pageX - slider.offsetLeft;
    const walk = (x - startX) * 1.2;
    slider.scrollLeft = scrollLeftStart - walk;
  });
});
</script>


<!-- About Section -->
<section id="about" class="section about-section" style="padding: 80px 0 60px;">
  <div class="container">
    <h2 class="section-title" style="text-align:center; font-size:2.3rem; color:var(--primary-dark); margin-bottom:40px;">À propos de RAMIZ</h2>
    <div style="max-width: 950px; margin: 0 auto; background: #fff; border-radius: 18px; box-shadow: 0 12px 48px 0 rgba(102,204,0,0.22); padding: 48px 32px; display: flex; flex-wrap: wrap; gap: 40px; align-items: flex-start;">
      <div style="flex: 1 1 320px; min-width: 260px; display: flex; flex-direction: column; align-items: flex-start;">
        <div style="background: linear-gradient(135deg, var(--primary-light) 0%, var(--primary) 100%); border-radius: 50%; width: 70px; height: 70px; display: flex; align-items: center; justify-content: center; margin-bottom: 24px; box-shadow: 0 4px 16px rgba(102,204,0,0.10);">
          <i class="fas fa-users" style="color: #fff; font-size: 2.2rem;"></i>
        </div>
        <h2 class="section-title" style="font-size: 2.1rem; color: var(--primary-dark); margin-bottom: 18px;">Qui sommes-nous ?</h2>
        <p class="section-description" style="color: var(--neutral-dark); font-size: 1.13rem; margin-bottom: 1.2rem;">
          Chez <span style="color: var(--primary); font-weight: 600;">RAMIZ</span>, nous sommes bien plus qu'une simple société de services. Nous sommes des partenaires passionnés, animés par une expertise solide, dédiés à transformer vos défis en opportunités. Spécialisés dans des domaines variés tels que l'immobilier, l'assistence à la creation d'entreprise, l'informatique, et la promotion en ligne, nous nous engageons à vous accompagner à chaque étape de votre parcours.
        </p>
      </div>
      <div style="flex: 1 1 340px; min-width: 260px;">
        <div style="background: var(--primary-ultra-light); border-radius: 12px; padding: 32px 28px; box-shadow: 0 2px 12px rgba(102,204,0,0.06);">
          <h3 class="section-title" style="margin-top:0; color:var(--primary-dark); font-size:1.35rem; margin-bottom: 18px;">Notre mission</h3>
          <p class="section-description" style="color: var(--neutral); font-size: 1.08rem; margin-bottom: 1rem;">
            Notre mission est claire : vous aider à tracer votre chemin. Nous croyons fermement que chaque entreprise mérite de savoir où elle va, d'optimiser sa gestion et d'atteindre ses objectifs avec efficacité et confiance.
          </p>
          <p class="section-description" style="color: var(--neutral); font-size: 1.08rem;">
            Nous vous proposons des solutions sur mesure, allant de la gouvernance d'entreprise à l'implémentation opérationnelle. Chaque action que nous entreprenons vise un seul but : vous rendre plus performant sur votre marché. <span style="color: var(--primary); font-weight: 600;">Ensemble, construisons un avenir où vos ambitions deviennent réalité.</span>
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
          <div class="contact-icon">
            <i class="fas fa-map-marker-alt"></i>
          </div>
          <div class="contact-details">
            <h4>Adresse</h4>
            <p><?= $company_info['address'] ?></p>
          </div>
        </div>
        <div class="contact-item">
          <div class="contact-icon">
            <i class="fas fa-envelope"></i>
          </div>
          <div class="contact-details">
            <h4>Email</h4>
            <p><?= $company_info['email'] ?></p>
          </div>
        </div>
        <div class="contact-item">
          <div class="contact-icon">
            <i class="fas fa-phone"></i>
          </div>
          <div class="contact-details">
            <h4>Téléphone</h4>
            <?php foreach (array_slice($contacts, 0, 3) as $contact): ?>
              <p><?= $contact ?></p>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
      <div class="contact-form">
        <form id="contactForm">
          <div class="form-group">
            <label for="name" class="form-label">Nom complet</label>
            <input type="text" id="name" class="form-control" placeholder="Votre nom">
          </div>
          <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input type="email" id="email" class="form-control" placeholder="Votre email">
          </div>
          <div class="form-group">
            <label for="subject" class="form-label">Sujet</label>
            <input type="text" id="subject" class="form-control" placeholder="Sujet de votre message">
          </div>
          <div class="form-group">
            <label for="message" class="form-label">Message</label>
            <textarea id="message" class="form-control" placeholder="Votre message"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Envoyer le message</button>
        </form>
      </div>
    </div>
  </div>
</section>

<?php require_once 'footer.php'; ?>