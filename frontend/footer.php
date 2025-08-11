  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="footer-content">
        <div class="footer-section">
          <div class="footer-logo">
            <?php
            // Chemin de l'image du logo
            $img_path = $is_in_services ? '../../images/Ramiz_Logo.png' : '../images/Ramiz_Logo.png';
          ?>
          <img src="<?= $img_path ?>" alt="RAMIZ Logo" class="logo-image">
          </div>
          <p class="footer-description">
            Votre partenaire d'excellence pour transformer vos ambitions en succès durables.
          </p>
        </div>

        <div class="footer-section">
          <h3>Services</h3>
          <ul class="footer-links">
            <li><a href="Etudes_&_Expertise.php">Étude & Expertise</a></li>
            <li><a href="Immobilier_&_BTP.php">Immobilier & BTP</a></li>
            <li><a href="Entretien.php">Entretiens</a></li>
            <li><a href="#apropos">À propos</a></li>
          </ul>
        </div>

        <div class="footer-section">
          <h3>Contact</h3>
          <div class="footer-contact">
            <div class="contact-item">
              <div class="contact-icon-small">
                <i class="fas fa-phone"></i>
              </div>
              <span>+225 27 22 26 43 05</span>
            </div>
            <div class="contact-item">
              <div class="contact-icon-small">
                <i class="fas fa-envelope"></i>
              </div>
              <span>contact@ramiz-ci.com</span>
            </div>
            <div class="contact-item">
              <div class="contact-icon-small">
                <i class="fas fa-map-marker-alt"></i>
              </div>
              <span>Akouédo-Ancien, 37 abidjan, Côte d'Ivoire</span>
            </div>
          </div>
        </div>

        <div class="footer-section">
          <h3>Suivez-nous</h3>
          <div class="social-buttons">
            <a href="https://www.facebook.com/ramizci" target="_blank">
              <button class="btn btn-social">
                <i class="fab fa-facebook-f"></i>
                Facebook
              </button>
            </a>
            <a href="https://www.linkedin.com/company/ramizci/" target="_blank">
              <button class="btn btn-social">
                <i class="fab fa-linkedin-in"></i>
                LinkedIn
              </button>
            </a>
          </div>
        </div>
      </div>

      <div class="footer-bottom">
        <p>&copy; 2024 RAMIZ. Tous droits réservés. Conçu avec excellence.</p>
      </div>
    </div>
  </footer>

  <script>
    // Smooth scrolling pour les liens d'ancrage
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
          target.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
          });
        }
      });
    });

    // Animation des cartes au scroll
    const observerOptions = {
      threshold: 0.1,
      rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('animate-in');
        }
      });
    }, observerOptions);

    document.querySelectorAll('.service-card, .news-card, .stat-item').forEach(element => {
      observer.observe(element);
    });

    // Header sticky effect
    window.addEventListener('scroll', () => {
      const header = document.querySelector('.header');
      if (window.scrollY > 100) {
        header.classList.add('header-scrolled');
      } else {
        header.classList.remove('header-scrolled');
      }
    });
    
    // Validation du formulaire
    document.getElementById('contactForm')?.addEventListener('submit', function(e) {
      e.preventDefault();
      // Ajoutez ici votre logique de validation et d'envoi du formulaire
      alert('Merci pour votre message ! Nous vous répondrons dans les plus brefs délais.');
      this.reset();
    });
  </script>
</body>
</html>