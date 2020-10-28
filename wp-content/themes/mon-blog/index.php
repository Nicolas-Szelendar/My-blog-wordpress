<?php get_header() ?>
<!----------------Header-------------->
<section></section>
</header>
<main class="main">
    <div class="main-title">Les news</div>

    <?php if (have_posts()) : ?>
        <div class="row">

            <?php while (have_posts()) : the_post();  ?>
                <div class="col-sm-4">
                    <div class="card">
                        <img class="<?php the_post_thumbnail('post_thumbnail') ?>" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?php the_title() ?></h5>
                            <small><?php the_time('F jS, Y'); ?></small>
                            <p class="card-text"><?php the_content() ?><p>
                                    <a href="<?php the_permalink() ?>" class="btn btn-primary">Voir plus</a>
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