<?php
/*
Template Name: Blog Template
*/
get_header(); ?>


<div class="row" >
    <div class="small-12 large-9 columns" role="main" style="background:white;">

        <?php do_action( 'foundationpress_before_content' ); ?>

        <?php while ( have_posts() ) : the_post(); ?>
            <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
                <header>
                    <h1 class="entry-title">News</h1>
                </header>
                <?php do_action( 'foundationpress_page_before_entry_content' ); ?>
                <div class="entry-content">


<div class="large-9 columns news-archive">



<?php add_filter('the_title', 'wpse_the_title', 10, 2); ?>
<ul>
    <?php wp_get_archives('type=postbypost'); ?>
</ul>
<?php remove_filter('the_title', 'wpse_the_title', 10, 2); ?>
                </div>


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
