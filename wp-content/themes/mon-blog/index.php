<?php get_header() ?>
<!----------------Header-------------->
<section></section>
</header>
<main class="main">
    <div class="main-title">Les news</div>

    <?php if (have_posts()) : ?>
        <div class="card-deck">

            <?php while (have_posts()) : the_post();  ?>
                <div class="col-sm-4">
                    <div class="w-80 p-8">
                        <div class="card">
                        
                    <?php the_post_thumbnail ('post-thumbnail', ['class' => 'card-img-top','alt' => 'style=width:100%; heith:50%;']); ?>
                            <div class="card-body">
                                <h5 class="card-title"><?php the_title() ?></h5>
                                <h6>Publié le <?php the_time(get_option( 'date_format' )); ?></h6>
                                <p class="card-text"><?php the_excerpt() ?><p>
                                        <a href="<?php the_permalink() ?>" class="btn btn-primary">Voir plus</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else : ?>
    <?php endif; ?>
        </div>
</main>
<!-- ---------------Footer----------------->
<?php get_footer(); ?>