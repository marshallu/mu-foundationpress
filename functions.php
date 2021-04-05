<?php
/**
 * Author: Ole Fredrik Lie
 * URL: http://olefredrik.com
 *
 * FoundationPress functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

/** Various clean up functions */
require_once( 'library/cleanup.php' );

/** Required for Foundation to work properly */
require_once( 'library/foundation.php' );

/** Register all navigation menus */
require_once( 'library/navigation.php' );

/** Add desktop menu walker */
require_once( 'library/menu-walker.php' );

/** Add off-canvas menu walker */
require_once( 'library/offcanvas-walker.php' );

/** Create widget areas in sidebar and footer */
require_once( 'library/widget-areas.php' );

/** Return entry meta information for posts */
require_once( 'library/entry-meta.php' );

/** Enqueue scripts */
require_once( 'library/enqueue-scripts.php' );

/** Add theme support */
require_once( 'library/theme-support.php' );

/** Add Nav Options to Customer */
require_once( 'library/custom-nav.php' );

require_once( 'easy-foundation-shortcodes/shortcode/functions.php' );

// Shortcode for Slideshow Text



add_shortcode('greenline' , 'greenline' );

// Shortcode for News Archive
function wpse_the_title($title, $id){
    if( $date = get_the_date('l, F j, Y', $id) ){
        $title = sprintf('%s - %s', $date, $title);
    }
    return $title;
}


function posts_by_year() {
  // array to use for results
  $years = array();

  // get posts from WP
  $posts = get_posts(array(
    'numberposts' => -1,
    'orderby' => 'post_date',
    'order' => 'ASC',
    'post_type' => 'post',
    'post_status' => 'publish'
  ));

  // loop through posts, populating $years arrays
  foreach($posts as $post) {
    $years[date('Y', strtotime($post->post_date))][] = $post;
  }

  // reverse sort by year
  krsort($years);

  return $years;
}

/** If your site requires protocol relative url's for theme assets, uncomment the line below */
// require_once( 'library/protocol-relative-theme-assets.php' );


/**
 * MU YouTube to embed mobile responsive YouTube videos in WordPress
 *
 * @link https://www.marshall.edu/marsha/docs/youtube/
 *
 * @param array  $atts The array of attributes included with the shortcode.
 * @param string $content The HTML string for the shortcode.
 * @return string
 */
function mu_youtube( $atts, $content = null ) {
	$data = shortcode_atts(
		array(
			'youtube_id' => '',
			'id'         => '',
			'text'       => 'Play Video',
			'class'      => '',
			'type'       => 'embed',
			'spaced'     => 'false',
			'autoplay'   => false,
			'url'        => '',
		),
		$atts
	);

	if ( $data['youtube_id'] ) {
		$id = $data['youtube_id'];
	}

	if ( $data['spaced'] ) {
		$spacing = ' my-6 ';
	} else {
		$spacing = '';
	}

	if ( $data['url'] ) {
		$id = str_replace( '?autoplay=1', '', $data['url'] );
		$id = explode( '?v=', $id );

		$data['id']   = $id[1];
		$data['type'] = 'embed';
	}

	$youtube_url = 'https://www.youtube.com/watch?v=' . esc_attr( $data['id'] );

	if ( $data['autoplay'] ) {
		$youtube_url .= '?autoplay=1';
	}

	if ( 'link' === $data['type'] ) {
		$html  = '<a href="' . esc_url( $youtube_url ) . '" class="' . esc_attr( $data['class'] ) . '">';
		$html .= '<div class="h-full w-full relative bg-no-repeat bg-cover" style="padding-bottom: 56.25%; height: 0; background-image: url(http://i3.ytimg.com/vi/' . $data['id'] . '/maxresdefault.jpg);">';
		$html .= '<div class="cursor-pointer absolute inset-0 bg-black-overlay-40 lg:bg-black-overlay-40 hover:bg-green-overlay-40 flex flex-col pt-8">';
		$html .= '<div class="flex items-center px-4 text-white">';
		$html .= '<svg class="fill-current h-8 w-8 lg:h-10 lg:w-10 mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm115.7 272l-176 101c-15.8 8.8-35.7-2.5-35.7-21V152c0-18.4 19.8-29.8 35.7-21l176 107c16.4 9.2 16.4 32.9 0 42z"></path></svg>';
		$html .= '<span class="text-xl lg:text-2xl font-semibold uppercase text-shadow-strong">' . esc_attr( $data['text'] ) . '</span>';
		$html .= '</div>';
		$html .= '</div>';
		$html .= '</div>';
		$html .= '</a>';
	} elseif ( 'embed' === $data['type'] ) {
		$html  = '<div class="yt relative h-0 ' . esc_attr( $data['class'] ) . ' ' . $spacing . '" style="padding-bottom: 56.25%;">';
		$html .= '<iframe class="absolute top-0 left-0 h-full w-full" width="560" height="315" src="https://www.youtube.com/embed/' . esc_attr( $data['id'] ) . '" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
		$html .= '</div>';
	} elseif ( 'holiday' === $data['type'] ) {
		$html  = '<div>';
		$html .= '<div class="relative h-0 ' . esc_attr( $data['class'] ) . '" style="padding-bottom: 56.25%;">';
		$html .= '<iframe class="absolute top-0 left-0 h-full w-full" width="560" height="315" src="https://www.youtube.com/embed/' . esc_attr( $data['id'] ) . '" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
		$html .= '</div>';
		$html .= '<div class="py-4 px-4 flex items-start border border-t-0 bg-green border-green-dark text-white rounded-b">';
		$html .= '<div class="text-white mr-3"><svg class="h-6 w-6 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M440.3 345.2l-33.8-19.5 26-7c8.2-2.2 13.1-10.7 10.9-18.9l-4-14.9c-2.2-8.2-10.7-13.1-18.9-10.9l-70.8 19-63.9-37 63.8-36.9 70.8 19c8.2 2.2 16.7-2.7 18.9-10.9l4-14.9c2.2-8.2-2.7-16.7-10.9-18.9l-26-7 33.8-19.5c7.4-4.3 9.9-13.7 5.7-21.1L430.4 119c-4.3-7.4-13.7-9.9-21.1-5.7l-33.8 19.5 7-26c2.2-8.2-2.7-16.7-10.9-18.9l-14.9-4c-8.2-2.2-16.7 2.7-18.9 10.9l-19 70.8-62.8 36.2v-77.5l53.7-53.7c6.2-6.2 6.2-16.4 0-22.6l-11.3-11.3c-6.2-6.2-16.4-6.2-22.6 0L256 56.4V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v40.4l-19.7-19.7c-6.2-6.2-16.4-6.2-22.6 0L138.3 48c-6.3 6.2-6.3 16.4 0 22.6l53.7 53.7v77.5l-62.8-36.2-19-70.8c-2.2-8.2-10.7-13.1-18.9-10.9l-14.9 4c-8.2 2.2-13.1 10.7-10.9 18.9l7 26-33.8-19.5c-7.4-4.3-16.8-1.7-21.1 5.7L2.1 145.7c-4.3 7.4-1.7 16.8 5.7 21.1l33.8 19.5-26 7c-8.3 2.2-13.2 10.7-11 19l4 14.9c2.2 8.2 10.7 13.1 18.9 10.9l70.8-19 63.8 36.9-63.8 36.9-70.8-19c-8.2-2.2-16.7 2.7-18.9 10.9l-4 14.9c-2.2 8.2 2.7 16.7 10.9 18.9l26 7-33.8 19.6c-7.4 4.3-9.9 13.7-5.7 21.1l15.5 26.8c4.3 7.4 13.7 9.9 21.1 5.7l33.8-19.5-7 26c-2.2 8.2 2.7 16.7 10.9 18.9l14.9 4c8.2 2.2 16.7-2.7 18.9-10.9l19-70.8 62.8-36.2v77.5l-53.7 53.7c-6.3 6.2-6.3 16.4 0 22.6l11.3 11.3c6.2 6.2 16.4 6.2 22.6 0l19.7-19.7V496c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16v-40.4l19.7 19.7c6.2 6.2 16.4 6.2 22.6 0l11.3-11.3c6.2-6.2 6.2-16.4 0-22.6L256 387.7v-77.5l62.8 36.2 19 70.8c2.2 8.2 10.7 13.1 18.9 10.9l14.9-4c8.2-2.2 13.1-10.7 10.9-18.9l-7-26 33.8 19.5c7.4 4.3 16.8 1.7 21.1-5.7l15.5-26.8c4.3-7.3 1.8-16.8-5.6-21z"></path></svg></div>';
		$html .= '<div class="">' . $data['text'] . '</div>';
		$html .= '</div>';
		$html .= '</div>';
	}

	return $html;
}
add_shortcode( 'mu_youtube', 'mu_youtube' );
add_shortcode( 'efsflexvideo', 'mu_youtube' );
