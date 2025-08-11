<?php
  // Inclusion de la configuration
  require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RAMIZ - Votre partenaire de confiance</title>
  <!-- CSS avec chemins directs -->
<?php if ($is_in_services): ?>
  <!-- Nous sommes dans All_services/ -->
  <link href="../../css/style.css" rel="stylesheet">
  <link href="../../css/animations.css" rel="stylesheet">
  <link href="../../css/responsive.css" rel="stylesheet">
  <link href="../../css/services.css" rel="stylesheet">
  <link href="../../css/variables.css" rel="stylesheet">
<?php else: ?>
  <!-- Nous sommes dans le répertoire racine -->
  <link href="../css/style.css" rel="stylesheet">
  <link href="../css/animations.css" rel="stylesheet">
  <link href="../css/responsive.css" rel="stylesheet">
  <link href="../css/services.css" rel="stylesheet">
  <link href="../css/variables.css" rel="stylesheet">
<?php endif; ?>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
    /* Styles améliorés pour les sous-menus */
    .icon-primary {
      color: #53c600;
    }
    .icon-secondary {
      color: #234d20;
    }
    .icon-accent {
      color: #ffd600;
    }
    .icon-success {
      color: #27ae60;
    }
    .dropdown {
      position: relative;
    }
    
    .dropdown-menu {
      display: none;
      position: absolute;
      top: 100%;
      left: 0;
      background-color: white;
      box-shadow: 0 8px 20px rgba(0,0,0,0.15);
      border-radius: 8px;
      z-index: 1000;
      padding: 20px 10px;
      min-width: 680px;
      transition: all 0.3s ease;
      opacity: 0;
      transform: translateY(10px);
    }
    
    .dropdown:hover .dropdown-menu {
      display: flex;
      opacity: 1;
      transform: translateY(0);
    }
    
    .dropdown-menu-column {
      padding: 0 20px;
      min-width: 160px;
      border-right: 1px solid #f0f0f0;
    }
    
    .dropdown-menu-column:last-child {
      border-right: none;
    }
    
    .dropdown-section {
      display: block;
      font-weight: 700;
      color: #333;
      margin-bottom: 15px;
      font-size: 0.9em;
      text-transform: uppercase;
      position: relative;
      padding-bottom: 8px;
    }
    
    .dropdown-section:after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 30px;
      height: 2px;
      background-color: #66cc00;
    }
    
    .dropdown-menu-column a {
      display: block;
      padding: 8px 0;
      color: #666;
      font-size: 0.95em;
      text-decoration: none;
      transition: all 0.2s;
      position: relative;
      padding-left: 0;
    }
    
    .dropdown-menu-column a:hover {
      color: #66cc00;
      padding-left: 5px;
      background: rgba(102, 204, 0, 0.18);
      border-radius: 4px;
    }
    
    .dropdown-menu-column a:before {
      content: '';
      position: absolute;
      left: -10px;
      top: 50%;
      width: 0;
      height: 1px;
      background-color: #27ae60;
      transition: all 0.2s;
      opacity: 0;
    }
    
    .dropdown-menu-column a:hover:before {
      width: 5px;
      opacity: 1;
    }
    
    /* Pour les sous-menus avec moins de colonnes */
    .dropdown-menu.single-column {
      min-width: 250px;
    }
    
    /* Ajustements pour différentes tailles d'écran */
    @media (max-width: 992px) {
      .dropdown-menu {
        min-width: 90vw;
        left: 50%;
        transform: translateX(-50%) translateY(10px);
        flex-wrap: wrap;
      }
      
      .dropdown:hover .dropdown-menu {
        transform: translateX(-50%) translateY(0);
      }
      
      .dropdown-menu-column {
        min-width: 45%;
        margin-bottom: 20px;
      }
    }
  </style>
</head>
<body>
  <!-- Header -->
  <header class="header">
    <div class="container">
      <div class="header-content">
        <div class="logo">
          <?php
            // Chemin de l'image du logo
            $img_path = $is_in_services ? '../../images/Ramiz_Logo.png' : '../images/Ramiz_Logo.png';
          ?>
          <img src="<?= $img_path ?>" alt="RAMIZ Logo" class="logo-image">
        </div>

        <nav class="nav">
          <?php foreach ($menu as $item): ?>
            <?php if (isset($item['submenu'])): ?>
              <div class="dropdown">
                <a href="<?= $item['link'] ?>" class="nav-link">
                  <?php if (!empty($item['icon'])): ?>
                    <i class="fas <?= $item['icon'] ?> icon-primary"></i>
                  <?php endif; ?>
                  <?= $item['label'] ?> <i class="fa-solid fa-chevron-down"></i>
                </a>
                <div class="dropdown-menu <?= count($item['submenu']) <= 1 ? 'single-column' : '' ?>">
                  <?php foreach ($item['submenu'] as $column): ?>
                    <div class="dropdown-menu-column">
                      <?php foreach ($column as $sub): ?>
                        <?php if (isset($sub['section'])): ?>
                          <span class="dropdown-section"><?= $sub['section'] ?></span>
                        <?php elseif (!empty($sub['label'])): ?>
                          <a href="<?= $sub['link'] ?>">
                            <?php if (!empty($sub['icon'])): ?>
                              <i class="fas <?= $sub['icon'] ?> icon-secondary"></i>
                            <?php endif; ?>
                            <?= $sub['label'] ?>
                          </a>
                        <?php endif; ?>
                      <?php endforeach; ?>
                    </div>
                  <?php endforeach; ?>
                </div>
              </div>
            <?php else: ?>
              <a href="<?= $item['link'] ?>" class="nav-link">
                <?php if (!empty($item['icon'])): ?>
                  <i class="fas <?= $item['icon'] ?> icon-primary"></i>
                <?php endif; ?>
                <?= $item['label'] ?>
              </a>
            <?php endif; ?>
          <?php endforeach; ?>
        </nav>
      </div>
    </div>
  </header>