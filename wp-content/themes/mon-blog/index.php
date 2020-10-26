<?php get_header()?>

    <!----------------Les premier articles-------------->

    <section></section>

</header>
    <main class="main">
        <div class="main-title">Les news</div>

            <?php if ( have_posts()): ?>
            <div class="row">

                <?php while ( have_posts() ) : the_post();  ?>
                <div class="col-sm-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?php the_title() ?></h5>
                            <small><?php the_time('F jS, Y'); ?></small>
                            <p class="card-text"><?php the_content()?><p>
                            <a href="<?php the_permalink()?>" class="btn btn-primary">Voir plus</a>
                        </div>
                    </div>
                </div>
                        <?php endwhile; ?>
                    <?php else: ?>
                <?php endif; ?>
            </div>
        
    

    </main>

    <!-- ---------------Footer----------------->

<script src="/js/app.js"></script>

</html>
<?php get_footer(); ?>