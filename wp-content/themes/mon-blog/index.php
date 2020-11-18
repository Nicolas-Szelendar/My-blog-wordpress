<?php get_header() ?>
<!----------------Header-------------->
<section></section>
</header>
<main class="main">
    <div class="main-title">Les derniers articles</div>
    
    <div class="container">
    <div class="row">
    <?php if (have_posts()) : ?>
      <!-- Blog Entries Column -->
      <?php while (have_posts()) : the_post();  ?>
      <div class="col-md-8">

        <h1 class="my-4"><?php the_title() ?></h1>

        <!-- Blog Post -->
        <div class="card mb-4">
          <?php the_post_thumbnail ('post-thumbnail', ['class' => 'card-img-top','alt' => 'style=width:100%; heith:50%;']); ?>
          <div class="card-body">
            <h2 class="card-title"><?php the_title() ?></h2>
            <p class="card-text"><?php the_excerpt() ?></p>
            <a href="<?php the_permalink() ?>" class="btn btn-primary">Voir plus &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            <p>Le<?php the_time(get_option( 'date_format' )); ?></p>
            <?php endwhile; ?>
        <?php else : ?>
    <?php endif; ?>
          </div>
        </div>


    
</main>


<!-- ---------------Footer----------------->
<?php get_footer(); ?>