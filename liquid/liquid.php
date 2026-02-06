<?php
/*
Template Name: LIQUID
*/
?>
<?php get_header(); ?>

<div class="detail page simple">
    <div class="container">
        <div class="row">
            <div class="col-12 mainarea">

                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>

                <div class="detail_text">

                    <?php if ( is_active_sidebar( 'page_head' ) ) { ?>
                    <div class="row widgets">
                        <?php dynamic_sidebar( 'page_head' ); ?>
                    </div>
                    <?php } ?>

                    <div class="post_body">
                        <?php the_content(); ?>
                    </div>

                    <?php if ( is_active_sidebar( 'page_foot' ) ) { ?>
                    <div class="row widgets">
                        <?php dynamic_sidebar( 'page_foot' ); ?>
                    </div>
                    <?php } ?>

                </div>
                <?php endwhile; ?>
                <?php else : ?>
                <?php get_search_form(); ?>
                <?php endif; ?>

                <?php
                // ページング
                $args = array(
                    'before' => '<nav><ul class="page-numbers">',
                    'after' => '</ul></nav>',
                    'link_before' => '<li>',
                    'link_after' => '</li>'
                );
                wp_link_pages( $args );
                ?>

            </div><!-- /col -->
        </div><!-- /row -->
    </div><!-- /container -->
</div><!-- /detail -->

<?php get_footer(); ?>