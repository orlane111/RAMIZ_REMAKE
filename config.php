<?php
  // Configuration des données du site RAMIZ
  
  // Menu de navigation
$menu = [
  [
    "label" => "Accueil",
    "link" => "#accueil"
  ],
  [
    "label" => "Etude & Expertise",
    "link" => "#etude",
    "submenu" => [
      // Colonne 1
      [
        ["section" => "Entreprise"],
          ["label" => "Création d'entreprise", "link" => "#creation-entreprise"],
          ["label" => "Plan d'affaires", "link" => "#business-plan"],
          ["label" => "Étude de marché", "link" => "#etude-marche"],
     ],
      // Colonne 2
      [
        ["section" => "Infographie"],
         ["label" => "Création de site web", "link" => "#creation-site-web"],
         ["label" => "Création de carte de visite", "link" => "#creation-carte-visite"],
         ["label" => "Création de logo", "link" => "#creation-logo"],
      ],
      // Colonne 3
      [
        ["section" => "Assistance"],
          ["label" => "Assistance comptable", "link" => "#assistance-comptable"],
          ["label" => "Assistance informatique", "link" => "#assistance-informatique"],          
      ],
      // Colonne 4
      [
        ["section" => "Autres"],
          ["label" => "Installation de caméra de surveillance", "link" => "#installation-camera-surveillance"],
          ["label" => "Badge PVC", "link" => "#badge-pvc"],
          ["label" => "Catalogue numérique", "link" => "#catalogue-numerique"],
          ["label" => "Promotion sur les réseaux sociaux", "link" => "#promotion-reseaux-sociaux"],
      ],
    ]
  ],
  [
    "label" => "Immobilier & BTP",
    "link" => "#immobilier",
    "submenu" => [
      // Colonne 1
      [
        ["section" => "Immobilier & BTP"],
          ["label" => "Intermediation Immobilière", "link" => "#intermediation-immobiliere"],
          ["label" => "Collecte de loyer", "link" => "#collecte-loyer"],
          ["label" => "Installation de rideaux et stores", "link" => "#installation-rideaux-stores"],
          ["label" => "Construction batiment et travaux divers", "link" => "#construction-batiment-travaux-divers"],
          ["label" => "Recherche de financement projets immobiliers", "link" => "#recherche-financement"],
      ],
    ]
  ],
  [
    "label" => "Entretiens",
    "link" => "#entretiens",
    "submenu" => [
      // Colonne 1
      [
        ["section" => "Entretiens"],
          ["label" => "Nettoyage de locaux", "link" => "#nettoyage-locaux"],
          ["label" => "Nettoyage de fauteuil", "link" => "#nettoyage-fauteuil"],
          ["label" => "Climatisation et chambre froide", "link" => "#climatisation-chambre-froide"],
      ],
    ]
  ],
  [
    "label" => "A propos",
    "link" => "#about"
  ],
  [
    "label" => "Contact",
    "link" => "#contact"
  ]
];

// Informations de contact
$contacts = [
  "+225 27 22 26 43 05",
  "+225 07 03 04 85 18",
  "+225 07 08 41 93 30",
  "+225 05 96 74 22 40",
  "+225 01 02 14 19 88"
];

// Services principaux
$services = [
  [
    "icon" => "search",
    "title" => "Étude & Expertise",
    "description" => "Analyses approfondies et conseils stratégiques pour optimiser vos projets et maximiser vos résultats",
    "color" => "blue"
  ],
  [
    "icon" => "building",
    "title" => "Immobilier & BTP",
    "description" => "Construction, rénovation et gestion immobilière avec des solutions sur mesure et une qualité irréprochable",
    "color" => "green"
  ],
  [
    "icon" => "tools",
    "title" => "Entretiens",
    "description" => "Services de maintenance et d'entretien professionnels pour garantir la pérennité de vos installations",
    "color" => "yellow"
  ]
];


// Section À propos
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
  "address" => "Abidjan, Côte d'Ivoire",
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