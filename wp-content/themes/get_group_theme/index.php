<?php get_header(); ?>

    <div class="blog-main">
        <div class="row">
            <?php
            if (have_posts()) {
                while (have_posts()) : the_post();
                    ?>
                    <div class="col-lg-4">
                        <div class="card">
                            <!--                    <img src="..." class="card-img-top" alt="...">-->
                            <?php the_post_thumbnail('full', array('class' => 'card-img-top')); ?>
                            <div class="card-body">
                                <h5 class="card-title"><?php the_title(); ?></h5>
                                <!--                        <p class="card-text">--><?php //the_content(); ?><!--</p>-->
                                <a href="<?php get_permalink(); ?>" class="btn btn-outline-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                <?php
                endwhile;
            }
            ?>
        </div>
    </div><!-- /.blog-main -->
<?php get_footer(); ?>