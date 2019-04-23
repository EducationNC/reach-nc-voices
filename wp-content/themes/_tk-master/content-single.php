<?php
/**
 * @package _tk
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="entry-content">
        <div class="entry-content-thumbnail">
            <h1 class="page-title single"><?php the_title(); ?></h1>
            <h4 class="subtitle">By: <?php the_field('subtitle'); ?></h4>
            <!--            --><?php //the_post_thumbnail(); ?>
        </div>
        <?php the_content(); ?>
        <?php _tk_link_pages(); ?>


        <?php

        /*
        $name = get_author_name();

        if (!empty($name)): ?>

                <div class="custom-autor">
                    <div class="custom-wrap">
                        <div class="custom-photo">
                            <?php echo get_avatar(get_the_author_meta('user_email'), 140) ?>
                            <div class="custom-name">
                                <h3><?php echo $name?></h3>
                            </div>
                        </div>
                        <div class="custom-caption">
                            <p><?php the_author_description(); ?></p>
                        </div>
                    </div>
                </div>



        <?php endif; */ ?>

    </div><!-- .entry-content -->

    <?php
    the_post_navigation(array(
        'next_text' => '<span class="meta-nav" aria-hidden="true">Next</span>' .
            '<span class="post-title">%title</span>',
        'prev_text' => '<span class="meta-nav" aria-hidden="true">Previous</span>' .
            '<span class="post-title">%title</span>',
    ));
    ?>





    <div class="related-posts">
        <h3>Related Posts</h3>
        <?php
          $related = new WP_Query(
                array(
                    'category__in'   => wp_get_post_categories( $post->ID ),
                    'posts_per_page' => 3,
                    'post__not_in'   => array( $post->ID )
                )
            );

            if( $related->have_posts() ) {
                while( $related->have_posts() ) {
                    $related->the_post();
                    /*whatever you want to output*/
                }
                wp_reset_postdata();
            }
          ?>
    </div>



    <div class="related-posts">
        <h3>Related Posts</h3>
        <?php// get_related_posts_thumbnails(); ?>
    </div>

</article><!-- #post-## -->
