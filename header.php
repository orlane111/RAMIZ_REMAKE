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
  <link href="style.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
  <!-- Header -->
  <header class="header">
    <div class="container">
      <div class="header-content">
        <div class="logo">
          <img src="images/Ramiz_Logo.png" alt="RAMIZ Logo" class="logo-image">
        </div>

        <nav class="nav">
          <?php foreach ($menu as $item): ?>
            <?php if (isset($item['submenu'])): ?>
              <div class="dropdown">
                <a href="<?= $item['link'] ?>" class="nav-link"><?= $item['label'] ?> <i class="fa-solid fa-chevron-down"></i></a>
                <div class="dropdown-menu">
                  <?php foreach ($item['submenu'] as $column): ?>
                    <div class="dropdown-menu-column">
                      <?php foreach ($column as $sub): ?>
                        <?php if (isset($sub['section'])): ?>
                          <span class="dropdown-section"> <?= $sub['section'] ?> </span>
                        <?php else: ?>
                          <a href="<?= $sub['link'] ?>"><?= $sub['label'] ?></a>
                        <?php endif; ?>
                      <?php endforeach; ?>
                    </div>
                  <?php endforeach; ?>
                </div>
              </div>
            <?php else: ?>
              <a href="<?= $item['link'] ?>" class="nav-link"><?= $item['label'] ?></a>
            <?php endif; ?>
          <?php endforeach; ?>
        </nav>
      </div>
    </div>
  </header> 