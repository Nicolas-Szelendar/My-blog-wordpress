<?php get_header()?>

    <!----------------Les premier articles-------------->

    <section></section>

</header>
    <main class="main">
        <div class="main-title">Les news</div>
        <?php if ( have_posts() ) : /* S'il y a des articles */ ?>
            <?php while ( have_posts() ) : the_post(); /* Tant qu'il y a des articles : j'instancie le pointeur d'articles (the_post()) sur le post en question */ ?>
        <div class="container">
            <div class="card">
                <div class="img">
                    <img src="/image/image3.jpeg">
                </div>
                <div class="top-text">
                    <div class="name">
                        Annie Lea</div>
                    <p>
                        Apps Developer</p>
                </div>
                <div class="bottom-text">
                    <div class="text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem quaerat iusto adipisci reprehenderit quasi cum perspiciatis, minima reiciendis magni quam!</div>
                    <div class="btn">
                        <a href="#">Lire la suite</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="img">
                    <img src="/image/image1.jpg">
                </div>
                <div class="top-text">
                    <div class="name">
                        Eliana Maia</div>
                    <p>
                        Website Developer</p>
                </div>
                <div class="bottom-text">
                    <div class="text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem quaerat iusto adipisci reprehenderit quasi cum perspiciatis, minima reiciendis magni quam!</div>
                    <div class="btn">
                        <a href="#">Lire la suite</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="img">
                    <img src="/image/image2.jpg">
                </div>
                <div class="top-text">
                    <div class="name">
                        Harley Briana</div>
                    <p>
                        Graphic Developer</p>
                </div>
                <div class="bottom-text">
                    <div class="text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem quaerat iusto adipisci reprehenderit quasi cum perspiciatis, minima reiciendis magni quam!</div>
                    <div class="btn">
                        <a href="#">Lire la suite</a>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
<?php endif; ?>
        </div>

    </main>

    <!-- ---------------Footer----------------->

<script src="/js/app.js"></script>

</html>
<?php get_footer(); ?>