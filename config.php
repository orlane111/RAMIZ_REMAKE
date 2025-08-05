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
        ["label" => "Assistance informatique", "link" => "#assistance-informatique"],
        ["label" => "Création de carte de visite", "link" => "#creation-carte-visite"],
        ["section" => "Autres"],
        ["label" => "Installation de caméra de surveillance", "link" => "#installation-camera-surveillance"]
      ],
      // Colonne 2
      [
        ["label" => "Plan d'affaires", "link" => "#business-plan"],
        ["section" => "Assistance"],
        ["label" => "Assistance comptable", "link" => "#assistance-comptable"],
        ["section" => "Infographie"],
        ["label" => "Création de site web", "link" => "#creation-site-web"],
        ["label" => "Catalogue numérique", "link" => "#catalogue-numerique"]
      ],
      // Colonne 3
      [
        ["label" => "Étude de marché", "link" => "#etude-marche"],
        ["label" => "Assistance comptable", "link" => "#assistance-comptable"],
        ["label" => "Création de logo", "link" => "#creation-logo"],
        ["label" => "Insigne PVC", "link" => "#badge-pvc"],
        ["label" => "Promotion sur les réseaux sociaux", "link" => "#promotion-reseaux-sociaux"]
      ]
    ]
  ],
  [
    "label" => "Immobilier & BTP",
    "link" => "#immobilier"
  ],
  [
    "label" => "Entretiens",
    "link" => "#entretiens"
  ],
  [
    "label" => "A propos",
    "link" => "#apropos"
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

  // Actualités et événements
  $actualites = [
    [
      "type" => "Séminaire • 19-24 Août 2024",
      "title" => "Vous voulez maîtriser Excel en un temps record ?",
      "description" => "Notre formation intensive, du 19 au 24 août, est faite pour vous ! De l'initiation aux fonctionnalités avancées, vous apprendrez tout ce qu'il faut savoir pour devenir un pro.",
      "image" => "excel-formation.jpg",
      "color" => "green"
    ],
    [
      "type" => "Conseil • Août 2024",
      "title" => "Business Plan | Plan d'affaires",
      "description" => "Vous êtes entrepreneurs ou porteurs de projets ? Nous vous accompagnons dans l'élaboration de votre business plan et la recherche de financements.",
      "image" => "business-plan.jpg",
      "color" => "blue"
    ],
    [
      "type" => "Service • Disponible",
      "title" => "Nous collectons vos loyers",
      "description" => "RAMIZ, votre partenaire de confiance pour la collecte de loyers ! Gérez vos biens immobiliers en toute sérénité.",
      "image" => "collecte-loyers.jpg",
      "color" => "purple"
    ]
  ];

  // Informations de l'entreprise
  $company_info = [
    "name" => "RAMIZ",
    "tagline" => "Votre partenaire de confiance",
    "description" => "Bâtir l'avenir avec sérénité",
    "long_description" => "Solutions d'excellence pour votre entreprise : du conseil stratégique aux services techniques, nous transformons vos ambitions en réalité.",
    "email" => "contact@ramiz-ci.com",
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
      "number" => "24/7",
      "label" => "Support Client"
    ]
  ];
?> 