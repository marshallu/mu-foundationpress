<?php

/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WRVRH87');</script>
<!-- End Google Tag Manager -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-144x144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-precomposed.png">

    <link rel='stylesheet' id='foundation-icon-css' href='<?php echo get_stylesheet_directory_uri(); ?>/easy-foundation-shortcodes/styles/foundation-icons.css' type='text/css' media='all' />
    <link rel='stylesheet' id='foundation-norm-css' href='<?php echo get_stylesheet_directory_uri(); ?>/easy-foundation-shortcodes/styles/5/normalize.css' type='text/css' media='all' />
    <link rel='stylesheet' id='foundation-css' href='<?php echo get_stylesheet_directory_uri(); ?>/easy-foundation-shortcodes/styles/5/foundation.min.css' type='text/css' media='all' />
    <script type='text/javascript' src='<?php echo get_stylesheet_directory_uri(); ?>/easy-foundation-shortcodes/js/5/vendor/custom.modernizr.js'></script>
    <?php wp_head(); ?>

    <style>
        body .wooslider .slide-content {
            margin: 0;
        }

        .wooslider {
            margin: 0;
            background: transparent;
            border: none;
            position: relative;
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            -o-border-radius: 0;
            border-radius: 0;
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            -o-box-shadow: none;
            box-shadow: none;
            margin-left: -0.9375rem;
            margin-right: -0.9375rem;
            margin-top: -1.3rem;
        }

        .wooslider p {
            margin-bottom: 0;
        }

        .slidetext {
            padding: .9375rem;
            background: rgba(0, 0, 0, 0.65);
            color: white;
            position: absolute;
            bottom: 0;
            width: 100%;
        }

        .green-box {
            background: #8DC63F;
            color: #5E6959;
            margin-left: -0.9375rem;
            margin-right: -0.9375rem;
            margin-top: -1.3rem;
            padding-top: 1px;
        }

        .green-box a {
            color: white;
        }

        .green-box p {
            margin-left: 0.9375rem;
            margin-right: 0.9375rem;
            margin-top: 0.9375rem;
        }

        body .wooslider .wooslider-control-nav {
            display: none;
        }

        #footer-container #footer,
        #footer-container #footer a {
            color: white;
        }

        .container h1 {
            font-size: 1.5rem;
        }

        .homepage-icons {
            font-size: 4rem;
            padding: 0 5px;

        }

        .left-side-bar-area {
            background: #e1eae7;
            padding-top: 10px;
        }


        .left-side-bar-area ul {
            list-style: none;
        }

        .left-side-bar-area ul a {
            color: #5E6959 !important;
        }

        .left-side-bar-area ul a:hover,
        .left-side-bar-area ul a:active,
        .left-side-bar-area ul a:focus {
            background: #C3D6D0;
            color: white !important;
        }

        /*.container hr {
	border: 0 !important;
    height: 3px;
    color: #5E6959 !important;
    background-color: #5E6959 !important;
    width: 100% !important;
}*/

        hr .socialHR {
            border: solid #5E6959;
            height: 3px;
        }


        #social-media {
            border-left: 5px solid #8DC63F;
            padding-left: 1em;
            padding-bottom: 1em;
            margin-bottom: 1em;
        }

        #social-media span {
            font-weight: 600;
        }

        #social-media i {
            padding-right: 5px;
        }

        @media (min-width: 1150px) {
            .large-3 {
                width: 22%;
            }

            .large-9 {
                width: 78%;
            }
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        p,
        ul,
        ol,
        li,
        span,
        a,
        div {
            font-family: TimesNewRoman, 'Times New Roman', Times, Baskerville, Georgia, serif;
        }

        p,
        blockquote,
        blockquote p,
        div,
        b {
            color: #5E6959;
        }

        blockquote,
        blockquote p {
            line-height: 1.6;
            color: #5E6959;
            border: none;
        }

        #sidebar p {
            color: #9BBBB0;
        }

        .wooslider p {
            color: #fff;
        }

        .wooslider a {
            color: #8DC63F;
            text-decoration: underline;
        }

        .news-archive a {
            color: #8DC63F;
        }

        .news-archive ul {
            list-style: none;
            margin-left: 0 !important;
        }

        .news-archive ul:hover {
            text-decoration: underline;
        }

        .call-out-text {
            color: #00aaa1;
            font-family: lucida, Helvetica, sans-serif;
            font-weight: bold;
            font-size: 1.25em;
        }

        .greenline {
            color: #00aaa1;
            width: 30%;
            border: 0 !important;
            background-color: #00aaa1;
            height: 3px;
            margin: 0 auto;
            clear: both;
        }

        .visual-form-builder fieldset {
            clear: both;
            margin: 0;
            padding: 0;
            border: none;
            border-radius: 0;
            background-color: #fff;
        }

        .page-title {
            color: #00aaa1;
            font-family: lucida, Helvetica, sans-serif;
            font-weight: bold;
            font-size: 1.25em !important;
        }

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

        .about_menu .current-menu-item a {
            font-size: 8rem;
            font-size: 1.1em;
            color: #5E6959 !important;
            font-weight: bold;
            font-family: lucida, Helvetica, sans-serif;
        }

        .row article header h1 {
            padding-top: 0px;
        }


        .page-bar,
        .page-bar .top-bar-section ul li>a,
        .page-bar .top-bar-section ul li>a:hover,
        .page-bar .top-bar-section li:not(.has-form) a:not(.button),
        .page-bar .top-bar-section li:not(.has-form) a:not(.button):hover {
            background: url(//www.marshall.edu/foundation/files/menu_background.png);
        }


        #main-page-nav .row {
            background-color: #5F9638;
            background: url(//www.marshall.edu/foundation/files/menu_background.png) !important;
            height: 3em;
        }
    </style>

</head>

<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WRVRH87"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <?php do_action('foundationpress_after_body'); ?>

    <?php if (!get_theme_mod('wpt_mobile_menu_layout') || get_theme_mod('wpt_mobile_menu_layout') == 'offcanvas') : ?>

        <div class="off-canvas-wrap" data-offcanvas>
            <div class="inner-wrap">
            <?php endif; ?>

            <?php do_action('foundationpress_layout_start'); ?>

            <?php

            if (!get_theme_mod('wpt_mobile_menu_layout') || get_theme_mod('wpt_mobile_menu_layout') == 'offcanvas') :
                get_template_part('parts/off-canvas-menu');
            endif;
            ?>

            <?php get_template_part('parts/top-bar'); ?>

            <section class="container" role="document">
                <?php do_action('foundationpress_after_header'); ?>
