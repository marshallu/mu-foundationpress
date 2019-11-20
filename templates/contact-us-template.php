<?php
/*
Template Name: Contact Us Template
*/
get_header(); ?>

<style>
.about_menu ul {
    text-decoration: none;
    list-style: none;
    padding-top: 10px;
    padding-bottom: 15px;
    margin-left: 0;
}

.about_menu a {
    float: left;
    padding-right: 15px;
    color: #afc9c0;
    font-family: lucida, Helvetica, sans-serif;
    font-size: 1.1em;
}

.about_menu a:hover {
    text-decoration: underline;
}


.current-menu-item a {
    font-size: 8rem;
    font-size: 1.1em;
    color: #5E6959 !important; 
    font-weight: bold;
    font-family: lucida, Helvetica, sans-serif;
}
</style>

<div class="row">
    <div class="small-12 large-9 columns" role="main" style="background:white;">

        <?php do_action( 'foundationpress_before_content' ); ?>

        <?php while ( have_posts() ) : the_post(); ?>
            <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
                <header>
                    <h1 class="entry-title">Contact Us</h1>
                    <img src="//www.marshall.edu/foundation/files/pillarbg.png">
                </header>
                <?php do_action( 'foundationpress_page_before_entry_content' ); ?>
                <div class="entry-content">
                <div class="about_menu">
                 <?php foundationpress_contact_menu(); ?>
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
