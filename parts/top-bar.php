<?php
/**
 * Template part for top bar menu
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<div class="top-bar-container contain-to-grid">
    <nav class="top-bar" data-topbar role="navigation">
        <ul class="title-area top-bar-<?php echo apply_filters( 'filter_mobile_nav_position', 'mobile_nav_position' ); ?>">
            <li class="name">
               <a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/images/website_graphics/logo.png"></a>
            </li>
            <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
        </ul>
        <section class="top-bar-section">
<!--             <?php foundationpress_top_bar_r(); ?> -->
            <ul style="float:right;">
                <li><a href="http://www.marshall.edu/" style="padding: 0 .45rem;"><span style="border-top: 3px solid #04954A;line-height: 1rem;">MU Homepage<span></a></li>
                <li><a href="http://www.marshall.edu/alumni" style="padding: 0 .45rem;"><span style="border-top: 3px solid #1c8878;line-height: 1rem;">MU Alumni Association<span></a></li>
                <li><a href="http://www.marshall.edu/foundation/" style="padding: 0 .45rem;"><span style="border-top: 3px solid #8ec63f;line-height: 1rem;">MU Foundation<span></a></li>
                <li><a href="http://www.marshall.edu/foundation/foundationhall" style="padding: 0 .45rem;"><span style="border-top: 3px solid #be6441;line-height: 1rem;">Brad D. Smith Foundation Hall<span></a></li>
            </ul>
    </nav>
</div>

<!-- <div class="menu-container">
    <div class="row">
        <div class="foundation-menu" >
            <?php foundationpress_top_bar_l(); ?>
        </div>
    </div>
</div> -->


                

<!-- Navigation Menu -->
<div id="main-page-nav">
<div class="row show-for-medium-up" >
    <nav class="page-bar" data-topbar role="navigation">
<!--         <ul class="title-area">
            <li class="name hide-for-medium-up">
                <h1>Menu</h1>
            </li>
            <li class="toggle-topbar menu-icon">
                <a href="#"><span></span></a>
            </li>
        </ul> -->
        <section class="top-bar-section">
            <?php foundationpress_top_bar_l(); ?>
        </section>
    </nav>
</div>
</div>

