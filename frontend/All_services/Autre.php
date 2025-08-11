<?php
echo '<link rel="stylesheet" href="../../css/style.css">';
echo '<link rel="stylesheet" href="../../css/services.css">';
require_once '../header.php';
?>

<!-- Styles pour corriger l'affichage des packs -->
<style>
    /* Styles pour les packages et cards */
    .packages-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
        margin-top: 30px;
    }
    
    .package-card {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        overflow: hidden;
        position: relative;
        transition: transform 0.3s, box-shadow 0.3s;
    }
    
    .package-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    }
    
    .package-card.featured {
        border: 2px solid #53c600;
    }
    
    .package-badge {
        position: absolute;
        top: 20px;
        right: -30px;
        background: #53c600;
        color: white;
        font-size: 14px;
        font-weight: bold;
        padding: 5px 30px;
        transform: rotate(45deg);
    }
    
    .package-header {
        padding: 25px 25px 15px;
        border-bottom: 1px solid #eee;
        background-color: #f9f9f9;
    }
    
    .package-header h4 {
        margin: 0;
        font-size: 20px;
        color: #333;
    }
    
    .package-price {
        margin-top: 10px;
        font-size: 18px;
        font-weight: bold;
        color: #53c600;
    }
    
    .package-content {
        padding: 25px;
    }
    
    .package-features {
        list-style: none;
        padding: 0;
        margin: 0 0 25px 0;
    }
    
    .package-features li {
        margin-bottom: 12px;
        padding-left: 28px;
        position: relative;
        font-size: 15px;
    }
    
    .package-features li i {
        position: absolute;
        left: 0;
        top: 2px;
        color: #53c600;
    }
    
    .package-action {
        text-align: center;
    }

    /* Styles pour les tables de prix */
    .pricing-table {
        width: 100%;
        border-collapse: collapse;
        margin: 30px 0;
        box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        border-radius: 8px;
        overflow: hidden;
    }

    .pricing-table-header, .pricing-table-row {
        display: grid;
        grid-template-columns: 2fr 1fr 1fr 1fr 1fr;
    }

    .pricing-header-cell, .pricing-cell {
        padding: 15px;
        text-align: center;
    }

    .pricing-header-cell {
        background-color: #53c600;
        color: white;
        font-weight: bold;
    }

    .pricing-table-row {
        border-bottom: 1px solid #eee;
    }

    .pricing-table-row:last-child {
        border-bottom: none;
    }

    .pricing-table-row.featured {
        background-color: rgba(83, 198, 0, 0.1);
    }

    /* Styles pour les options */
    .options-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
        margin-top: 30px;
    }

    .option-card {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        overflow: hidden;
        position: relative;
    }

    .option-card.featured {
        border: 2px solid #53c600;
    }

    .option-badge {
        position: absolute;
        top: 20px;
        right: -30px;
        background: #53c600;
        color: white;
        font-size: 14px;
        font-weight: bold;
        padding: 5px 30px;
        transform: rotate(45deg);
    }
    
    .option-header {
        padding: 20px;
        text-align: center;
        border-bottom: 1px solid #eee;
        background-color: #f9f9f9;
    }
    
    .option-icon {
        font-size: 36px;
        color: #53c600;
        margin-bottom: 15px;
    }
    
    .option-content {
        padding: 20px;
    }
    
    .option-features {
        list-style: none;
        padding: 0;
        margin: 0 0 20px 0;
    }
    
    .option-features li {
        margin-bottom: 10px;
        padding-left: 25px;
        position: relative;
    }
    
    .option-features li i {
        position: absolute;
        left: 0;
        top: 4px;
        color: #53c600;
    }
    
    .option-price {
        font-size: 20px;
        font-weight: bold;
        color: #333;
        text-align: center;
        margin-bottom: 20px;
    }
    
    .option-action {
        text-align: center;
    }

    /* Style pour les plateformes */
    .platforms-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
        margin-top: 30px;
    }

    .platform-card {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        padding: 25px;
        text-align: center;
        transition: transform 0.3s;
    }

    .platform-card:hover {
        transform: translateY(-5px);
    }

    .platform-icon {
        font-size: 36px;
        margin-bottom: 15px;
        color: #53c600;
    }
    
    /* Responsive adjustments */
    @media (max-width: 768px) {
        .pricing-table-header, .pricing-table-row {
            grid-template-columns: 2fr 1fr 1fr;
        }
        
        .pricing-header-cell:nth-child(4),
        .pricing-header-cell:nth-child(5),
        .pricing-cell:nth-child(4),
        .pricing-cell:nth-child(5) {
            display: none;
        }
    }
    
    @media (max-width: 576px) {
        .pricing-table-header, .pricing-table-row {
            grid-template-columns: 1fr;
            text-align: center;
        }
        
        .pricing-cell {
            padding: 10px;
        }
        
        .pricing-cell:not(:last-child) {
            border-bottom: 1px solid #eee;
        }
        
        .pricing-header-cell:not(:first-child),
        .pricing-cell:not(:first-child):not(:last-child) {
            display: none;
        }
    }
</style>

<!-- Hero Section -->
<section class="service-hero" style="background-image: url('../images/services/services_divers_bg.jpg');">
    <div class="container">
        <div class="service-hero-content">
            <h1 class="service-title">Services Divers</h1>
            <p class="service-subtitle">Des solutions spécialisées pour répondre à vos besoins spécifiques</p>
            
            <div class="service-quick-nav">
                <a href="#camera" class="btn btn-light btn-sm">Caméras de surveillance</a>
                <a href="#badge" class="btn btn-light btn-sm">Badge PVC</a>
                <a href="#catalogue" class="btn btn-light btn-sm">Catalogue numérique</a>
                <a href="#reseaux" class="btn btn-light btn-sm">Promotion réseaux sociaux</a>
            </div>
        </div>
    </div>
</section>

<!-- Introduction -->
<section class="section bg-light">
    <div class="container">
        <div class="service-intro">
            <h2 class="section-title">Nos Services Spécialisés</h2>
            <p class="text-center">RAMIZ vous propose une gamme complète de services complémentaires pour répondre à vos besoins spécifiques. De la sécurité de vos locaux à la promotion de votre entreprise, nous mettons notre expertise à votre service.</p>
            
            <div class="service-benefits">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-video"></i>
                    </div>
                    <h3>Sécurité</h3>
                    <p>Des solutions de vidéosurveillance pour la protection de vos locaux et personnel</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-id-badge"></i>
                    </div>
                    <h3>Identification</h3>
                    <p>Badges professionnels pour l'identification de votre personnel et visiteurs</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-book"></i>
                    </div>
                    <h3>Communication</h3>
                    <p>Solutions de présentation digitale pour mettre en valeur vos produits et services</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-share-alt"></i>
                    </div>
                    <h3>Visibilité</h3>
                    <p>Stratégies marketing pour accroître votre présence sur les réseaux sociaux</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 1. Installation de caméra de surveillance -->
<section id="camera" class="service-section section">
    <div class="container">
        <div class="service-header">
            <h2 class="section-title">Installation de Caméra de Surveillance</h2>
            <p class="section-subtitle">Des solutions de vidéosurveillance professionnelles pour protéger vos biens et votre personnel</p>
        </div>
        
        <div class="service-grid">
            <div class="service-content">
                <h3>Sécurisez vos locaux avec des systèmes de vidéosurveillance de pointe</h3>
                <p>RAMIZ vous propose des solutions complètes d'installation de caméras de surveillance pour répondre à vos besoins de sécurité. Nos systèmes de haute qualité vous permettent de surveiller vos locaux en temps réel et d'accéder aux enregistrements à distance.</p>
                <p>Notre équipe de techniciens qualifiés assure l'installation, la configuration et la maintenance de votre système de vidéosurveillance pour une tranquillité d'esprit totale.</p>
                
                <div class="service-features">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-eye"></i>
                        </div>
                        <div class="feature-content">
                            <h4>Surveillance en temps réel</h4>
                            <p>Accès à vos caméras depuis votre smartphone, tablette ou ordinateur</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-moon"></i>
                        </div>
                        <div class="feature-content">
                            <h4>Vision nocturne</h4>
                            <p>Caméras HD avec vision nocturne pour une surveillance 24h/24 et 7j/7</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-hdd"></i>
                        </div>
                        <div class="feature-content">
                            <h4>Stockage sécurisé</h4>
                            <p>Enregistrement et archivage sécurisé des séquences vidéo</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="service-image">
                <img src="../../images/camera_de_surveillance.jpeg" alt="Installation de caméra de surveillance" class="img-fluid rounded shadow">
            </div>
        </div>
        
        <div class="service-packages mt-5">
            <h3 class="text-center mb-4">Nos Packs de Vidéosurveillance</h3>
            <div class="packages-grid">
                <div class="package-card">
                    <div class="package-header">
                        <h4>Pack Essentiel</h4>
                        <div class="package-price">À partir de 250 000 FCFA</div>
                    </div>
                    <div class="package-content">
                        <ul class="package-features">
                            <li><i class="fas fa-check"></i> 4 caméras HD</li>
                            <li><i class="fas fa-check"></i> Enregistreur numérique</li>
                            <li><i class="fas fa-check"></i> Disque dur 1 To</li>
                            <li><i class="fas fa-check"></i> Installation complète</li>
                            <li><i class="fas fa-check"></i> Accès à distance via smartphone</li>
                        </ul>
                        <div class="package-action">
                            <a href="https://wa.me/2250703048518?text=Je%20suis%20intéressé(e)%20par%20votre%20Pack%20Essentiel%20de%20vidéosurveillance" class="btn btn-primary" target="_blank">
                                <i class="fab fa-whatsapp"></i> Demander un devis
                            </a>
                        </div>
                    </div>
                </div>
                <div class="package-card featured">
                    <div class="package-badge">Recommandé</div>
                    <div class="package-header">
                        <h4>Pack Sécurité</h4>
                        <div class="package-price">À partir de 500 000 FCFA</div>
                    </div>
                    <div class="package-content">
                        <ul class="package-features">
                            <li><i class="fas fa-check"></i> 8 caméras Full HD</li>
                            <li><i class="fas fa-check"></i> Enregistreur numérique avancé</li>
                            <li><i class="fas fa-check"></i> Disque dur 2 To</li>
                            <li><i class="fas fa-check"></i> Installation professionnelle</li>
                            <li><i class="fas fa-check"></i> Accès à distance multi-appareils</li>
                            <li><i class="fas fa-check"></i> Détection de mouvement</li>
                            <li><i class="fas fa-check"></i> Formation à l'utilisation</li>
                        </ul>
                        <div class="package-action">
                            <a href="https://wa.me/2250703048518?text=Je%20suis%20intéressé(e)%20par%20votre%20Pack%20Sécurité%20de%20vidéosurveillance" class="btn btn-accent" target="_blank">
                                <i class="fab fa-whatsapp"></i> Demander un devis
                            </a>
                        </div>
                    </div>
                </div>
                <div class="package-card">
                    <div class="package-header">
                        <h4>Pack Entreprise</h4>
                        <div class="package-price">Sur devis</div>
                    </div>
                    <div class="package-content">
                        <ul class="package-features">
                            <li><i class="fas fa-check"></i> Nombre de caméras selon besoins</li>
                            <li><i class="fas fa-check"></i> Caméras haute définition</li>
                            <li><i class="fas fa-check"></i> Système d'enregistrement professionnel</li>
                            <li><i class="fas fa-check"></i> Stockage personnalisé</li>
                            <li><i class="fas fa-check"></i> Installation sur mesure</li>
                            <li><i class="fas fa-check"></i> Intégration avec système d'alarme</li>
                            <li><i class="fas fa-check"></i> Contrat de maintenance</li>
                        </ul>
                        <div class="package-action">
                            <a href="https://wa.me/2250703048518?text=Je%20souhaite%20un%20devis%20personnalisé%20pour%20un%20système%20de%20vidéosurveillance" class="btn btn-primary" target="_blank">
                                <i class="fab fa-whatsapp"></i> Demander un devis
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 2. Badge PVC -->
<section id="badge" class="service-section section bg-light">
    <div class="container">
        <div class="service-header">
            <h2 class="section-title">Badge PVC</h2>
            <p class="section-subtitle">Des badges professionnels pour votre entreprise</p>
        </div>
        
        <div class="service-grid">
            <div class="service-image">
                <img src="../../images/Badge_PVC.jpg" alt="Badges PVC" class="img-fluid rounded shadow">
            </div>
            <div class="service-content">
                <h3>Des badges d'identification professionnels pour votre entreprise</h3>
                <p>RAMIZ vous propose des badges PVC de qualité pour l'identification de votre personnel et de vos visiteurs. Nos badges sont personnalisables selon vos besoins et votre identité visuelle.</p>
                <p>Que ce soit pour des badges d'employés, des cartes d'accès ou des badges événementiels, nous vous offrons des solutions d'impression professionnelles avec une finition de haute qualité.</p>
                
                <div class="service-features">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-palette"></i>
                        </div>
                        <div class="feature-content">
                            <h4>Design personnalisé</h4>
                            <p>Création graphique adaptée à votre charte visuelle</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-print"></i>
                        </div>
                        <div class="feature-content">
                            <h4>Impression haute qualité</h4>
                            <p>Impression couleur haute définition sur PVC durable</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-qrcode"></i>
                        </div>
                        <div class="feature-content">
                            <h4>Options avancées</h4>
                            <p>QR code, code-barres, puce RFID selon vos besoins</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="service-pricing mt-5">
            <h3 class="text-center mb-4">Nos Offres de Badges PVC</h3>
            <div class="pricing-table">
                <div class="pricing-table-header">
                    <div class="pricing-header-cell">Type de badge</div>
                    <div class="pricing-header-cell">10 badges</div>
                    <div class="pricing-header-cell">50 badges</div>
                    <div class="pricing-header-cell">100 badges</div>
                    <div class="pricing-header-cell">Action</div>
                </div>
                <div class="pricing-table-row">
                    <div class="pricing-cell">Badge simple recto</div>
                    <div class="pricing-cell">25 000 FCFA</div>
                    <div class="pricing-cell">100 000 FCFA</div>
                    <div class="pricing-cell">180 000 FCFA</div>
                    <div class="pricing-cell">
                        <a href="https://wa.me/2250703048518?text=Je%20suis%20intéressé(e)%20par%20vos%20badges%20PVC%20simples%20recto" class="btn btn-sm btn-primary" target="_blank">
                            <i class="fab fa-whatsapp"></i> Commander
                        </a>
                    </div>
                </div>
                <div class="pricing-table-row featured">
                    <div class="pricing-cell">Badge recto-verso</div>
                    <div class="pricing-cell">35 000 FCFA</div>
                    <div class="pricing-cell">140 000 FCFA</div>
                    <div class="pricing-cell">250 000 FCFA</div>
                    <div class="pricing-cell">
                        <a href="https://wa.me/2250703048518?text=Je%20suis%20intéressé(e)%20par%20vos%20badges%20PVC%20recto-verso" class="btn btn-sm btn-accent" target="_blank">
                            <i class="fab fa-whatsapp"></i> Commander
                        </a>
                    </div>
                </div>
                <div class="pricing-table-row">
                    <div class="pricing-cell">Badge RFID</div>
                    <div class="pricing-cell">50 000 FCFA</div>
                    <div class="pricing-cell">220 000 FCFA</div>
                    <div class="pricing-cell">400 000 FCFA</div>
                    <div class="pricing-cell">
                        <a href="https://wa.me/2250703048518?text=Je%20suis%20intéressé(e)%20par%20vos%20badges%20PVC%20avec%20RFID" class="btn btn-sm btn-primary" target="_blank">
                            <i class="fab fa-whatsapp"></i> Commander
                        </a>
                    </div>
                </div>
            </div>
            <div class="pricing-note text-center mt-4">
                <p>Autres quantités et options disponibles sur demande. Accessoires (porte-badges, cordons) également disponibles.</p>
                <a href="https://wa.me/2250703048518?text=Je%20souhaite%20un%20devis%20personnalisé%20pour%20des%20badges%20PVC" class="btn btn-primary mt-2" target="_blank">
                    <i class="fab fa-whatsapp"></i> Demander un devis personnalisé
                </a>
            </div>
        </div>
    </div>
</section>

<!-- 3. Catalogue numérique -->
<section id="catalogue" class="service-section section">
    <div class="container">
        <div class="service-header">
            <h2 class="section-title">Catalogue Numérique</h2>
            <p class="section-subtitle">Présentez vos produits et services avec élégance et efficacité</p>
        </div>
        
        <div class="service-grid">
            <div class="service-content">
                <h3>Mettez en valeur votre offre avec un catalogue numérique interactif</h3>
                <p>Le catalogue numérique est une solution moderne et écologique pour présenter vos produits et services. RAMIZ conçoit des catalogues numériques interactifs, accessibles sur tous les appareils et faciles à mettre à jour.</p>
                <p>Notre équipe créative et technique vous accompagne de la conception à la mise en ligne, pour un résultat professionnel qui valorise votre offre et améliore votre image de marque.</p>
                
                <div class="service-features">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-tablet-alt"></i>
                        </div>
                        <div class="feature-content">
                            <h4>Responsive design</h4>
                            <p>Catalogues parfaitement adaptés à tous les appareils</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-mouse-pointer"></i>
                        </div>
                        <div class="feature-content">
                            <h4>Interactivité</h4>
                            <p>Fonctionnalités interactives pour une expérience utilisateur optimale</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-sync-alt"></i>
                        </div>
                        <div class="feature-content">
                            <h4>Mises à jour faciles</h4>
                            <p>Système de gestion de contenu intuitif pour des mises à jour rapides</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="service-image">
                <img src="../../images/catalogue_numerique.png" alt="Catalogue numérique" class="img-fluid rounded shadow">
            </div>
        </div>
        
        <div class="service-options mt-5">
            <h3 class="text-center mb-4">Nos Formules de Catalogue Numérique</h3>
            <div class="options-grid">
                <div class="option-card">
                    <div class="option-header">
                        <div class="option-icon">
                            <i class="fas fa-book-open"></i>
                        </div>
                        <h4>Catalogue Standard</h4>
                    </div>
                    <div class="option-content">
                        <ul class="option-features">
                            <li><i class="fas fa-check"></i> Jusqu'à 20 pages</li>
                            <li><i class="fas fa-check"></i> Design responsive</li>
                            <li><i class="fas fa-check"></i> Navigation simple</li>
                            <li><i class="fas fa-check"></i> Gallerie d'images</li>
                            <li><i class="fas fa-check"></i> Version PDF téléchargeable</li>
                            <li><i class="fas fa-check"></i> Hébergement 1 an inclus</li>
                        </ul>
                        <div class="option-price">350 000 FCFA</div>
                        <div class="option-action">
                            <a href="https://wa.me/2250703048518?text=Je%20suis%20intéressé(e)%20par%20votre%20Catalogue%20Numérique%20Standard" class="btn btn-primary" target="_blank">
                                <i class="fab fa-whatsapp"></i> Demander un devis
                            </a>
                        </div>
                    </div>
                </div>
                <div class="option-card featured">
                    <div class="option-badge">Recommandé</div>
                    <div class="option-header">
                        <div class="option-icon">
                            <i class="fas fa-book"></i>
                        </div>
                        <h4>Catalogue Interactif</h4>
                    </div>
                    <div class="option-content">
                        <ul class="option-features">
                            <li><i class="fas fa-check"></i> Jusqu'à 50 pages</li>
                            <li><i class="fas fa-check"></i> Design premium</li>
                            <li><i class="fas fa-check"></i> Navigation avancée</li>
                            <li><i class="fas fa-check"></i> Zoom sur produits</li>
                            <li><i class="fas fa-check"></i> Vidéos intégrées</li>
                            <li><i class="fas fa-check"></i> Filtres et recherche</li>
                            <li><i class="fas fa-check"></i> Interface de mise à jour</li>
                            <li><i class="fas fa-check"></i> Hébergement 2 ans inclus</li>
                        </ul>
                        <div class="option-price">650 000 FCFA</div>
                        <div class="option-action">
                            <a href="https://wa.me/2250703048518?text=Je%20suis%20intéressé(e)%20par%20votre%20Catalogue%20Numérique%20Interactif" class="btn btn-accent" target="_blank">
                                <i class="fab fa-whatsapp"></i> Demander un devis
                            </a>
                        </div>
                    </div>
                </div>
                <div class="option-card">
                    <div class="option-header">
                        <div class="option-icon">
                            <i class="fas fa-cubes"></i>
                        </div>
                        <h4>Catalogue E-commerce</h4>
                    </div>
                    <div class="option-content">
                        <ul class="option-features">
                            <li><i class="fas fa-check"></i> Catalogue produits illimité</li>
                            <li><i class="fas fa-check"></i> Design premium</li>
                            <li><i class="fas fa-check"></i> Fonctionnalités e-commerce</li>
                            <li><i class="fas fa-check"></i> Panier d'achat</li>
                            <li><i class="fas fa-check"></i> Paiement en ligne</li>
                            <li><i class="fas fa-check"></i> Gestion des stocks</li>
                            <li><i class="fas fa-check"></i> Formation à l'administration</li>
                            <li><i class="fas fa-check"></i> Hébergement et maintenance 2 ans</li>
                        </ul>
                        <div class="option-price">1 200 000 FCFA</div>
                        <div class="option-action">
                            <a href="https://wa.me/2250703048518?text=Je%20suis%20intéressé(e)%20par%20votre%20Catalogue%20E-commerce" class="btn btn-primary" target="_blank">
                                <i class="fab fa-whatsapp"></i> Demander un devis
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4. Promotion sur les réseaux sociaux -->
<section id="reseaux" class="service-section section bg-light">
    <div class="container">
        <div class="service-header">
            <h2 class="section-title">Promotion sur les Réseaux Sociaux</h2>
            <p class="section-subtitle">Boostez votre visibilité et engagez votre audience sur les plateformes sociales</p>
        </div>
        
        <div class="service-grid">
            <div class="service-image">
                <img src="../../images/promotion-b2b-reseaux-sociaux.jpg" alt="Promotion sur les réseaux sociaux" class="img-fluid rounded shadow">
            </div>
            <div class="service-content">
                <h3>Développez votre présence en ligne et attirez de nouveaux clients</h3>
                <p>Les réseaux sociaux sont aujourd'hui incontournables pour développer sa notoriété et atteindre de nouveaux clients. RAMIZ vous propose des stratégies de communication digitale sur mesure pour accroître votre visibilité et votre engagement sur les plateformes sociales.</p>
                <p>Notre équipe de spécialistes en marketing digital gère vos campagnes de A à Z, de la création de contenu à l'analyse des performances, pour des résultats concrets et mesurables.</p>
                
                <div class="service-features">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-bullhorn"></i>
                        </div>
                        <div class="feature-content">
                            <h4>Stratégie de contenu</h4>
                            <p>Création et planification de contenus engageants et adaptés à votre audience</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-ad"></i>
                        </div>
                        <div class="feature-content">
                            <h4>Publicités ciblées</h4>
                            <p>Campagnes publicitaires optimisées pour toucher votre audience cible</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <div class="feature-content">
                            <h4>Analyse et optimisation</h4>
                            <p>Suivi des performances et ajustements continus pour maximiser les résultats</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="service-platforms mt-5">
            <h3 class="text-center mb-4">Nos Plateformes</h3>
            <div class="platforms-grid">
                <div class="platform-card">
                    <div class="platform-icon">
                        <i class="fab fa-facebook"></i>
                    </div>
                    <h4>Facebook</h4>
                    <p>Animation de page, création de contenu, publicités ciblées, groupes et événements</p>
                </div>
                <div class="platform-card">
                    <div class="platform-icon">
                        <i class="fab fa-instagram"></i>
                    </div>
                    <h4>Instagram</h4>
                    <p>Photos et vidéos professionnelles, stories, reels, publicités visuelles</p>
                </div>
                <div class="platform-card">
                    <div class="platform-icon">
                        <i class="fab fa-linkedin"></i>
                    </div>
                    <h4>LinkedIn</h4>
                    <p>Profil professionnel, contenu B2B, réseautage, publicités ciblées</p>
                </div>
                <div class="platform-card">
                    <div class="platform-icon">
                        <i class="fab fa-youtube"></i>
                    </div>
                    <h4>YouTube</h4>
                    <p>Création et optimisation de chaîne, production de vidéos, publicités</p>
                </div>
                <div class="platform-card">
                    <div class="platform-icon">
                        <i class="fab fa-twitter"></i>
                    </div>
                    <h4>Twitter</h4>
                    <p>Veille, interaction, campagnes de tweets, publicités sponsorisées</p>
                </div>
                <div class="platform-card">
                    <div class="platform-icon">
                        <i class="fab fa-tiktok"></i>
                    </div>
                    <h4>TikTok</h4>
                    <p>Contenus viraux, trends, challenges, publicités innovantes</p>
                </div>
            </div>
        </div>
        
        <div class="service-packages mt-5">
            <h3 class="text-center mb-4">Nos Formules de Promotion</h3>
            <div class="packages-grid">
                <div class="package-card">
                    <div class="package-header">
                        <h4>Pack Découverte</h4>
                        <div class="package-price">125 000 FCFA/mois</div>
                    </div>
                    <div class="package-content">
                        <ul class="package-features">
                            <li><i class="fas fa-check"></i> Gestion d'une plateforme</li>
                            <li><i class="fas fa-check"></i> 8 publications par mois</li>
                            <li><i class="fas fa-check"></i> Design graphique basique</li>
                            <li><i class="fas fa-check"></i> Rapport mensuel</li>
                            <li><i class="fas fa-check"></i> Engagement 3 mois minimum</li>
                        </ul>
                        <div class="package-action">
                            <a href="https://wa.me/2250703048518?text=Je%20suis%20intéressé(e)%20par%20votre%20Pack%20Découverte%20pour%20les%20réseaux%20sociaux" class="btn btn-primary" target
="_blank">
                                <i class="fab fa-whatsapp"></i> Demander un devis
                            </a>
                        </div>
                    </div>        

                    <div class="package-footer"></div>
                        <p class="package-note">* Engagement de 2 mois minimum</p>
                    </div>
                </div>
            </div>
    </div>
    </section>
    <?php require_once '../footer.php'; ?>            
