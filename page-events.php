<?php get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <div class="events-wrapper">

                <h1 class="page-title">Other Events...</h1>
                <div class="underline"></div>

                <?php
                // set the "paged" parameter (use 'page' if the query is on a static front page)
                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

                // the query
                $the_query = new WP_Query( 'post_type=event&posts_per_page=5&paged=' . $paged );
                ?>

                <?php if ( $the_query->have_posts() ) : ?>

                <?php
                // the loop
                while ( $the_query->have_posts() ) : $the_query->the_post();
                ?>

                <?php if ($i % 2 == 0) { ?>
                <div class="even-event">
                <?php } else { ?>
                <div class="odd-event">
                <?php } ?>

                <div class="event-title">

                    <h2><?php echo get_field("event_date"); ?></h2>

                    <p><?php echo get_the_title(); ?></p>

                </div>

                <div class="event-content">
                    <?php echo get_the_content(); ?>
                </div>

                <?php if ($i % 2 == 0) { ?>
                </div>
                <?php } else { ?>
                </div>
                <?php } $i++;?>

                <?php endwhile; ?>

                <div class="post-link-wrapper">
                <div class="post-link back-post">
                <?php

                // get_next_posts_link() usage with max_num_pages
                echo get_next_posts_link( 'Older Announcements', $the_query->max_num_pages );?></div>

                <div class="post-link next-post">
                <?php echo get_previous_posts_link( 'Newer Announcements' );
                ?></div>
                </div>

                <?php
                // clean up after our query
                wp_reset_postdata();
                ?>

                <?php else:  ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif; ?>

            </div>

        </main><!-- #main -->
    </div><!-- #primary -->
<?php get_footer(); ?>
