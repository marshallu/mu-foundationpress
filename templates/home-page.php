<?php
/*
Template Name: Home Page Template
*/
get_header(); ?>

<style>
.wooslider {
  margin-left: 0;
    margin-right: 0;
}

.entry-content hr {
      color: #5E6959 !important;
          border: solid #5E6959;
    border-width: 3px 0 0;
}

.entry-content a {
  color: #8DC63F;
}

.entry-content h1 {
      text-transform: uppercase;
    font-size: 16px;
    color: #5E6959;
    font-weight: bold;
}

.green_background_section,
.green_background_section p {
  color: #5E6959 !important;
}


.green_background_section a {
  color: #fff;
  text-decoration: underline;
}

.green_background_section a:hover {
  color: #fff;
  text-decoration: none;
}

.green_background_section .button {
  background: #14AAA1;;
  border-radius: 10px;
  text-decoration: none;
      padding: 7px 14px;
}


@media (min-width: 1150px) {
.large-3 {
    width: 22%;
}

.large-9 {
    width: 78%;
}
}

.sidebar p {
      color: #9BBBB0;
    font-size: .9em;
}


</style>

<div class="row">

<div class="content-padding" style="padding-top: 30px;">

  <div class="large-12 columns" style="    padding-left: 0;">

    <!-- Main Content Area -->
    <div class="large-9 columns" style="    padding-left: 0;">

      <!-- Slideshow Custom Field -->
      <div class="slideshow_header">
        <?php the_field('slideshow_header'); ?>
      </div>


      <!-- Green Background Custom Field -->
      <div class="green_background_section" style="background: #8DC63F;color: #222;    padding: 0.9375rem;">
        <?php the_field('green_background_section'); ?>
      </div>

      <!-- WordPress Content Area -->
      <div class="entry-content" style="background: #fff;margin-top: -20px;    padding: 0.9375rem;">
        <?php the_content(); ?>
      </div>

    </div>

    <!-- Sidebar Area -->
    <div class="large-3 columns">

      <!-- Main Sidebar -->
      <div class="sidebar">
        <?php do_action( 'foundationpress_before_sidebar' ); ?>
        <?php dynamic_sidebar( 'sidebar-widgets' ); ?>
        <?php do_action( 'foundationpress_after_sidebar' ); ?>
      </div>

    </div>

  </div>

</div>

</div>

<!-- Footer -->
<?php get_footer(); ?>
