        <?php get_header() ?>
        <!----------------Header-------------->
        <section></section>
        </header>
        <main class="main">
          <div class="main-title">Les derniers articles</div>
          
              <div class="container">
                <div class="row">
                <?php if (have_posts()) : while (have_posts()) : the_post();  ?>
                  <div class="col">
                    <div class="card" style="width: 20rem;">
                      <img class="img-fluid rounded" src="<?php the_post_thumbnail_url(); ?>" alt="">
                      <div class="card-body">
                        <h5 class="card-title"><?php the_title() ?></h5>
                        <p>Le<?php the_time(get_option('date_format')); ?></p>
                        <p class="card-text"><?php the_excerpt() ?></p>
                        <a href="<?php the_permalink() ?>" class="btn btn-primary">Voir plus</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            <?php endwhile; ?>
          <?php else : ?>
          <?php endif; ?>
        </main>
        <!-- ---------------Footer----------------->
        <?php get_footer(); ?>