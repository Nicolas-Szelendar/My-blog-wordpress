<?php get_header() ?>
<!----------------Header-------------->
<div class="container-fluid">
    <?php if (have_posts()) : while (have_posts()) : the_post();  ?>
            <div class="card" style="max-width:80%;">
                <img src="<?php the_post_thumbnail_url(); ?> " alt="" style="width:100%; heith:50%;">
                <div class="card-body">
                    <h5 class="card-title"><?php the_title() ?></h5>
                    <h6>Publié le <?php the_time(get_option( 'date_format' )); ?></h6>
                    <p class="card-text"><?php the_content() ?></p>
                </div>
        <?php endwhile;
    endif; ?>
            </div>
</div>
<!-- ---------------Footer----------------->
<!--test-->
<?php get_footer(); ?>