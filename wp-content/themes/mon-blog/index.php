<?php get_header()?>

    <!----------------Les premier articles-------------->

    <section></section>

</header>
    <main class="main">
        <div class="main-title">Les news</div>
        <?php if ( have_posts()): ?>
            <?php while ( have_posts() ) : the_post();  ?>
            <div class="card">
                <div class="img">
                    <img src="/image/image3.jpeg">
                </div>
                <div class="top-text">
                    <div class="name">
                        <?php the_author()?></div>
                    <p><?php the_title()?></p>
                    <h3><?php the_time()?></h3>
                </div>
                <div class="bottom-text">
                    <div class="text">
                        <?php the_excerpt()?></div>
                    <div class="btn">
                        <a href="#">Lire la suite</a>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php else: ?>
<?php endif; ?>
            
        
        

    </main>

    <!-- ---------------Footer----------------->

<script src="/js/app.js"></script>

</html>
<?php get_footer(); ?>