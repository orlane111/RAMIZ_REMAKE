<?php
/**
 * Configuration principale du site RAMIZ
 */

// Détection du répertoire courant
$script_path = $_SERVER['SCRIPT_FILENAME'];
$is_in_services = (strpos($script_path, 'All_services') !== false);

// Chemins pour les ressources statiques
$css_path = $is_in_services ? "../../css/" : "../css/";
$img_path = $is_in_services ? "../../images/" : "../images/";

// Chemins pour les liens entre pages
$base_path = $is_in_services ? '../' : '';
$services_path = 'All_services/'; // Toujours inclure All_services/ dans les liens vers les pages de service

// Validation des données
function validateMenuItem($item) {
    $required = ['label', 'link'];
    foreach ($required as $field) {
        if (!isset($item[$field]) || empty($item[$field])) {
            throw new Exception("Menu item missing required field: {$field}");
        }
    }
    // Valider les sous-menus récursivement
    if (isset($item['submenu'])) {
        foreach ($item['submenu'] as $submenu) {
            foreach ($submenu as $subitem) {
                if (isset($subitem['label'])) { // Skip section headers
                    validateMenuItem($subitem);
                }
            }
        }
    }
    return true;
}

// Structure du menu avec les chemins corrects
$menu = [
  [
    "label" => "Accueil",
    "link" => "{$base_path}index.php",
    "icon" => "fa-solid fa-home"
  ],
  [
    "label" => "Formations",
    "link" => "#formations",
    "icon" => "fa-solid fa-graduation-cap"
  ],
  [
    "label" => "Business plan",
    "link" => "{$base_path}{$services_path}Entreprise.php#business-plan",
    "icon" => "fa-solid fa-chart-line"
  ],
  [
    "label" => "Création d'entreprise",
    "link" => "{$base_path}{$services_path}Entreprise.php#creation",
    "icon" => "fa-solid fa-building"
  ],
  [
    "label" => "Collecte de loyer",
    "link" => "{$base_path}{$services_path}Immobilier.php#collecte",
    "icon" => "fa-solid fa-coins"
  ],
  [
    "label" => "Badge PVC",
    "link" => "{$base_path}{$services_path}Autre.php#badge",
    "icon" => "fa-solid fa-id-badge"
  ],
  [
    "label" => "Autres",
    "link" => "{$base_path}{$services_path}Etudes_&_Expertise.php",
    "icon" => "fa-solid fa-lightbulb",
    "submenu" => [
      [
        ["section" => "Entreprise"],
        ["label" => "Étude de marché", "link" => "{$base_path}{$services_path}Entreprise.php#etude-marche", "icon" => "fa-solid fa-search-dollar"],
      ],
      [
        ["section" => "Infographie"],
        ["label" => "Création de site web", "link" => "{$base_path}{$services_path}Infographie.php#site-web", "icon" => "fa-solid fa-globe"],
        ["label" => "Création de carte de visite", "link" => "{$base_path}{$services_path}Infographie.php#carte-visite", "icon" => "fa-solid fa-id-card"],
        ["label" => "Création de logo", "link" => "{$base_path}{$services_path}Infographie.php#logo", "icon" => "fa-solid fa-paint-brush"],
      ],
      [
        ["section" => "Assistance"],
        ["label" => "Assistance comptable", "link" => "{$base_path}{$services_path}Assistance.php#comptable", "icon" => "fa-solid fa-calculator"],
        ["label" => "Assistance informatique", "link" => "{$base_path}{$services_path}Assistance.php#informatique", "icon" => "fa-solid fa-laptop"],
      ],
      [
        ["section" => "Autres"],
        ["label" => "Installation de caméra de surveillance", "link" => "{$base_path}{$services_path}Autre.php#camera", "icon" => "fa-solid fa-video"],
        ["label" => "Catalogue numérique", "link" => "{$base_path}{$services_path}Autre.php#catalogue", "icon" => "fa-solid fa-book"],
        ["label" => "Promotion sur les réseaux sociaux", "link" => "{$base_path}{$services_path}Autre.php#reseaux", "icon" => "fa-solid fa-share-alt"],
      ],
      [
        ["section" => "Immobilier & BTP"],
        ["label" => "Intermédiation Immobilière", "link" => "{$base_path}{$services_path}Immobilier.php#intermediation", "icon" => "fa-solid fa-handshake"],
        ["label" => "Installation de rideaux et stores", "link" => "{$base_path}{$services_path}Immobilier.php#rideaux", "icon" => "fa-solid fa-window-maximize"],
        ["label" => "Construction bâtiment et travaux divers", "link" => "{$base_path}{$services_path}Immobilier.php#construction", "icon" => "fa-solid fa-hard-hat"],
        ["label" => "Recherche de financement projets immobiliers", "link" => "{$base_path}{$services_path}Immobilier.php#financement", "icon" => "fa-solid fa-search-dollar"],
      ],
      [
        ["section" => "Entretiens"],
        ["label" => "Nettoyage de locaux", "link" => "{$base_path}{$services_path}Entretien.php#nettoyage-locaux", "icon" => "fa-solid fa-broom"],
        ["label" => "Nettoyage de fauteuil", "link" => "{$base_path}{$services_path}Entretien.php#nettoyage-fauteuil", "icon" => "fa-solid fa-couch"],
        ["label" => "Climatisation et chambre froide", "link" => "{$base_path}{$services_path}Entretien.php#climatisation", "icon" => "fa-solid fa-snowflake"],
      ],
    ]
  ],
  [
    "label" => "A propos",
    "link" => "#about",
    "icon" => "fa-solid fa-info-circle"
  ],
  [
    "label" => "Contact",
    "link" => "#contact",
    "icon" => "fa-solid fa-envelope"
  ]
];

/**
 * Numéros de téléphone de contact
 */
function validatePhoneNumber($phone) {
    // Validation format téléphone Côte d'Ivoire
    if (!preg_match('/^\+225 \d{2} \d{2} \d{2} \d{2} \d{2}$/', $phone)) {
        throw new Exception("Invalid phone number format: {$phone}");
    }
    return true;
}

$contacts = [
  "+225 27 22 26 43 05",
  "+225 07 03 04 85 18",
  "+225 07 08 41 93 30",
  "+225 05 96 74 22 40",
  "+225 01 02 14 19 88"
];

/**
 * Configuration des services principaux
 */
function validateService($service) {
    $required = ['icon', 'title', 'description', 'color'];
    $allowedColors = ['blue', 'green', 'yellow'];
    foreach ($required as $field) {
        if (!isset($service[$field]) || empty($service[$field])) {
            throw new Exception("Service missing required field: {$field}");
        }
    }
    if (!in_array($service['color'], $allowedColors)) {
        throw new Exception("Invalid service color: {$service['color']}");
    }
    return true;
}

$services = [
  [
    "icon" => "fa-solid fa-search",
    "title" => "Étude & Expertise",
    "description" => "Analyses approfondies et conseils stratégiques pour optimiser vos projets et maximiser vos résultats",
    "color" => "blue"
  ],
  [
    "icon" => "fa-solid fa-building",
    "title" => "Immobilier & BTP",
    "description" => "Construction, rénovation et gestion immobilière avec des solutions sur mesure et une qualité irréprochable",
    "color" => "green"
  ],
  [
    "icon" => "fa-solid fa-tools",
    "title" => "Entretiens",
    "description" => "Services de maintenance et d'entretien professionnels pour garantir la pérennité de vos installations",
    "color" => "yellow"
  ]
];

// Validation des données configurées
try {
    // Valider le menu
    foreach ($menu as $item) {
        validateMenuItem($item);
    }
    // Valider les numéros de téléphone
    foreach ($contacts as $phone) {
        validatePhoneNumber($phone);
    }
    // Valider les services
    foreach ($services as $service) {
        validateService($service);
    }
} catch (Exception $e) {
    error_log("Configuration error: " . $e->getMessage());
    if (defined('ENVIRONMENT') && ENVIRONMENT === 'development') {
        die("Configuration error: " . $e->getMessage());
    } else {
        die("Une erreur de configuration est survenue. Veuillez contacter l'administrateur.");
    }
}

/**
 * Section À propos
 */
$a_propos = [
  "title" => "À propos de RAMIZ",
  "subtitle" => "Votre partenaire de confiance",
  "description" => "RAMIZ accompagne les entreprises et porteurs de projets dans leur développement, de la stratégie à la réalisation concrète. Notre équipe pluridisciplinaire met son expertise au service de votre réussite, avec des solutions sur-mesure, innovantes et adaptées à vos besoins.",
  "values" => [
    "Excellence professionnelle",
    "Proximité et écoute",
    "Innovation continue",
    "Intégrité et transparence"
  ],
  "mission" => "Bâtir l'avenir avec sérénité, en apportant des solutions fiables et performantes à nos clients."
];

// Informations de l'entreprise
$company_info = [
  "name" => "RAMIZ",
  "tagline" => "Votre partenaire de confiance",
  "description" => "Bâtir l'avenir avec sérénité",
  "long_description" => "Solutions d'excellence pour votre entreprise : du conseil stratégique aux services techniques, nous transformons vos ambitions en réalité.",
  "email" => "info@ramiz-ci.com",
  "address" => "Akouédo-Ancien, 37 abidjan, Côte d'Ivoire",
  "partners_text" => "Partenaires | Entrepreneurs"
];

// Statistiques de l'entreprise
$stats = [
  [
    "number" => "500+",
    "label" => "Projets Réalisés"
  ],
  [
    "number" => "200+",
    "label" => "Clients Satisfaits"
  ],
  [
    "number" => "10+",
    "label" => "Années d'Expérience"
  ],
  [
    "number" => "8h-17h sur 5j / 7j",
    "label" => "Support Client"
  ]
];
?>