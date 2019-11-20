<?php
/*
Template Name: Post by Year
*/
get_header(); ?>
<style>
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
                    <h1 class="entry-title">News</h1>
                    <img src="//www.marshall.edu/foundation/files/pillarbg.png">
                </header>
                <?php do_action( 'foundationpress_page_before_entry_content' ); ?>
                <div class="entry-content">
                  <?php foreach(posts_by_year() as $year => $posts) : ?>
                    <h1 class="page-title"><?php echo $year; ?></h1>
                    <ul>
                      <?php foreach($posts as $post) : setup_postdata($post); ?>
                        <li>
                          <?php the_time('F j, Y'); ?> - <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </li>
                      <?php endforeach; ?>
                    </ul>
                  <?php endforeach; ?>
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