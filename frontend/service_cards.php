<?php
// Inclusion des prestations si besoin
if (!isset($prestations)) {
  // On peut inclure config ou définir $prestations ici si besoin
}
$features_map = [
  "Assistance informatique" => ["Support 24/7", "Maintenance préventive", "Formation utilisateurs"],
  "Installation caméras de surveillance" => ["Caméras HD", "Vision nocturne", "Accès à distance"],
  "Assistance comptable" => ["Logiciels certifiés", "Déclarations fiscales", "Conseil financier"],
  "Nettoyage de locaux" => ["Techniques spécialisées", "Produits adaptés", "Séchage rapide"],
  "Nettoyage de fauteuil" => ["Traitement anti-taches", "Désinfection", "Séchage rapide"],
  "Climatisation et chambre froide" => ["Installation", "Maintenance", "Dépannage rapide"],
  "Conception de site web & hébergements" => ["Site vitrine ou e-commerce", "Hébergement sécurisé", "Maintenance incluse"],
  "Création de logo" => ["Design sur mesure", "Livraison rapide", "Fichiers HD"],
  "Carte de visite" => ["Impression premium", "Design personnalisé", "Livraison rapide"],
  "Badge PVC" => ["Personnalisation", "Impression HD", "Livraison rapide"],
  "Catalogue numérique" => ["Design interactif", "Consultation en ligne", "Mise à jour facile"],
  "Promotion sur les réseaux sociaux" => ["Stratégie ciblée", "Création de contenu", "Rapports de performance"],
  "Emailing" => ["Campagnes ciblées", "Reporting", "Gestion des contacts"],
  "Business plan" => ["Analyse financière", "Étude de marché", "Plan d’action"],
  "Étude de marché" => ["Analyse sectorielle", "Sondages", "Rapport détaillé"],
  "Création d'entreprise" => ["Accompagnement juridique", "Démarches administratives", "Conseil personnalisé"],
  "Intermédiation immobilière" => ["Gestion locative", "Recherche de biens", "Accompagnement personnalisé"],
  "Collecte de loyer" => ["Gestion automatisée", "Suivi des paiements", "Rapports mensuels"],
  "Installation de rideaux et stores" => ["Pose sur mesure", "Large choix", "Intervention rapide"],
  "Construction bâtiments et travaux divers" => ["Étude technique", "Suivi de chantier", "Garantie décennale"],
  "Recherche de financement projets immobiliers" => ["Montage de dossier", "Recherche de partenaires", "Suivi personnalisé"],
];
foreach (array_merge($prestations, $prestations) as $presta) {
  $bg = ($presta['cat'] === "Étude & Expertise") ? "etude" : (($presta['cat'] === "Immobilier & BTP") ? "immobilier" : "entretiens");
  $features = isset($features_map[$presta['nom']]) ? $features_map[$presta['nom']] : ["Service professionnel", "Accompagnement personnalisé", "Satisfaction garantie"];
  echo '<div class="service-card">'
    .'<div class="service-card-header ' . $bg . '"><i class="fas '.$presta['icon'].'"></i></div>'
    .'<div class="service-card-title">'.$presta['nom'].'</div>'
    .'<div class="service-card-desc">'.$presta['desc'].'</div>'
    .'<ul class="service-card-features" style="display:flex;flex-direction:column;align-items:stretch;justify-content:space-between;text-align:justify;">'
      .implode('', array_map(function($f) { return '<li style="width:100%;display:flex;align-items:center;justify-content:space-between;text-align:justify;"><i class="fas fa-check" style="margin-right:7px;"></i> <span style="flex:1;">'.htmlspecialchars($f).'</span></li>'; }, $features))
    .'</ul>'
    .'<div class="service-card-tarif" style="display:flex;align-items:center;justify-content:center;text-align:center;font-weight:700;font-size:1.08rem;background:#eafbe0;color:#234d20;border-radius:10px;padding:12px 0;margin:0 22px 18px 22px;box-shadow:0 2px 8px rgba(83,198,0,0.07);border:1.5px solid #53c600;">Tarif : <span style="margin-left:8px;color:#53c600;font-weight:900;">'.($presta['tarif'] ? htmlspecialchars($presta['tarif']) : 'Sur mesure').'</span></div>'
    .'<div class="service-card-actions">'
      .(
        strtolower(trim($presta['tarif'])) === 'devis'
        ? '<a href="#contact" class="btn btn-accent devis"><i class="fas fa-file-signature"></i> Demander un devis</a>'
          .'<a href="#contact" class="btn btn-outline discuter"><i class="fas fa-comments"></i> Discuter</a>'
        : '<a href="#contact" class="btn btn-primary"><i class="fas fa-shopping-cart"></i> Commander</a>'
          .'<a href="#contact" class="btn btn-outline discuter"><i class="fas fa-comments"></i> Discuter</a>'
      )
    .'</div>'
  .'</div>';
}
