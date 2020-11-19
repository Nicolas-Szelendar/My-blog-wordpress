<?php get_header() ?>
<!----------------Header-------------->
<!-- Page Content -->
<div class="container">
  <?php if (have_posts()) : while (have_posts()) : the_post();  ?>
      <div class="row justify-content-md-center">

        <!-- Post Content Column -->
        <div class="col-lg-24">

          <!-- Title -->
          <h1 class="mt-4"><?php the_title() ?></h1>

          <!-- Author -->
          <p class="lead">
            
            <p>De <?php the_author()?></p>
          </p>

          <hr>

          <!-- Date/Time -->
          <p>Le <?php the_time(get_option( 'date_format' )); ?></p>

          <hr>

          <!-- Preview Image -->
          <img class="img-fluid rounded" src="<?php the_post_thumbnail_url(); ?>" alt="">

          <hr>

          <!-- Post Content -->
          <p class="lead"><?php the_content() ?></p>

          <hr>

        <!-- Single Comment -->
        <div class="post">
      <?php comments_template(); // Par ici les commentaires ?>
    </div>


        <?php endwhile; ?>
      <?php else : ?>
      <?php endif; ?>

        </div>
        <!-- ---------------Footer----------------->
        <?php get_footer(); ?>