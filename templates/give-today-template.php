<?php
/*
Template Name: Give Today Template
*/
get_header(); ?>

<div class="row">
    <div class="small-12 large-9 columns" role="main" style="background:white;">

        <?php do_action( 'foundationpress_before_content' ); ?>

        <?php while ( have_posts() ) : the_post(); ?>
            <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
                <header>
                    <h1 class="entry-title">Give Today</h1>
                    <img src="//www.marshall.edu/foundation/files/pillarbg.png">
                </header>
                <?php do_action( 'foundationpress_page_before_entry_content' ); ?>
                <div class="entry-content">
                <div class="about_menu">
                 <?php foundationpress_givetoday_menu(); ?>
                </div>
                <hr style="margin: 1.25rem -14px 1.1875rem;">
                <h1 class="page-title"><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                </div>
                <footer>
                    <?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
                    <p><?php the_tags(); ?></p>
                </footer>
                <?php do_action( 'foundationpress_page_before_comments' ); ?>
                <?php comments_template(); ?>
                <?php do_action( 'foundationpress_page_after_comments' ); ?>
            </article>
        <?php endwhile;?>

        <?php do_action( 'foundationpress_after_content' ); ?>

    </div>
    <?php get_sidebar( 'right' ); ?>
</div>
<?php get_footer(); ?>
