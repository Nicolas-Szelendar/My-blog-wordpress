
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body>
<header class="header">
        <nav>
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn"><i class="fa fa-bars"></i></label>
            <label class="logo"><a href="<?= home_url(); ?>">D'albi à Quebec <h4>le blog</h4>

            </label>
            <?php if ( has_custom_logo() ) : ?>

        <div class="site-logo"><?php the_custom_logo(); ?></div>
      <?php endif; ?>
      <?php wp_nav_menu(['theme_location' => 'header','container' => 'false']) ?>
          
            <!-- 
              <ul>
                <li><a class="active" href=#>Accueil</a></li>
                <li><a href=#>Les news</a></li>
                <li><a href=#>Nous contacter</a></li>
            </ul>-->
        </nav>
        
        <section></section>

    </header>