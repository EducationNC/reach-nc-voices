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
      <div class="container" id="related-posts">
          <div class="row">
            <div class="col-md-12">
              <h3>Related Posts</h3>
            </div>
          </div>
          <div class="row">
              <?php
                $related_args = array(
                	'post_type' => 'post',
                	'posts_per_page' => 3,
                  'post__not_in'   => array( $post->ID )
                );
                $related = new WP_Query( $related_args );

                if( $related->have_posts() ) :
                ?>

                		<?php while( $related->have_posts() ): $related->the_post();
                      $categories = get_the_category($post->ID); ?>
                      <div class="col-md-4 col-sm-6 portfolio-item">
                          <a class="portfolio-link"
                             href="<?php the_permalink(); ?>">
                              <div class="portfolio-hover">
                                  <div class="portfolio-hover-content">
                                      <i class="fa fa-plus fa-3x"></i>
                                  </div>
                              </div>
                              <img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>" alt="">
                          </a>
                          <div class="portfolio-caption">
                              <h5><?php the_title(); ?></h5>
                              <!-- <p class="text-muted"><?php //echo $category->cat_name; ?></p> -->
                          </div>
                      </div>
                		<?php endwhile; ?>

                <?php endif;
                wp_reset_postdata();?>
            </div>
        </div>
    </div>

    <div class="related-posts">
        <!-- <h3>Related Posts</h3> -->
        <?php// get_related_posts_thumbnails(); ?>
    </div>

</article><!-- #post-## -->
