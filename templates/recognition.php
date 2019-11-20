<?php
/*
Template Name: Recognition Template
*/
get_header(); ?>

<style>

.row article header {
    background: #9BBBB0;
    padding-top: 1px;
    margin-left: -15px;
    margin-right: -15px;
    height: 62px;
}
.row article header h1 {
    padding-left: 20px;
}

.recognition_menu a {
    color: #5E6959;
    font-weight: bold;
    text-decoration: none;
}

.left-side-bar-area ul a:hover {
    color: #5E6959 !important;
    background: #e1eae7 !important;
    text-decoration: underline !important;
}

.left-side-bar-area ul {
        margin-bottom: .75rem;
            margin-left: 0;
}

.left-side-bar-area ul li {
        padding: 10px 0;
}
.page-title {
    padding-top: 2px;
}

.entry-content a {
    color: #8DC63F;
    text-decoration: underline;
}
.entry-content a:hover {
    text-decoration: none;
}


</style>

<div class="row">
    <div class="small-12 large-9 columns" role="main" style="background:white;">

        <?php do_action( 'foundationpress_before_content' ); ?>

        <?php while ( have_posts() ) : the_post(); ?>
            <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
                <header>
                    <h1 class="entry-title">Recognition</h1>
                    <img src="//www.marshall.edu/foundation/files/pillarbg.png">
                </header>
                <?php do_action( 'foundationpress_page_before_entry_content' ); ?>


<div class="large-3 columns left-side-bar-area" style="margin-top:10px;">
 <?php foundationpress_recognition_menu(); ?>
</div>

<div class="large-9 columns">
                <div class="entry-content">
                 <h1 class="page-title"><?php the_title(); ?></h1>
                    <?php the_content(); ?>
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
