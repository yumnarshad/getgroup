<?php

get_header();

$args = array('post_type' => 'events', 'posts_per_page' => 10);
$the_query = new WP_Query($args);
?>
<?php if ($the_query->have_posts()) : ?>
    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <div class="event">
            <h2 class="event-name"><?php the_title(); ?></h2>
            <div class="entry-content">
                <?php the_content(); ?>
                <p><i class="far fa-clock"></i><strong style="padding-left: 10px;">Date from:</strong> <?php echo get_field("date_from"); ?></p>
                <p><i class="far fa-clock"></i><strong style="padding-left: 10px;">Date to:</strong> <?php echo get_field("date_to"); ?></p>
                <p><i class="fas fa-map-marker-alt"></i><strong style="padding-left: 10px;">Location:</strong> <?php echo get_field("location"); ?></p>
            </div>
        </div>
        <hr>
    <?php endwhile;
    wp_reset_postdata(); ?>
<?php else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
<?php
get_footer();
?>