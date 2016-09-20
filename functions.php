<?php
function angela_get_background_image($post_id){
    if( has_post_thumbnail($post_id) ){
        $timthumb_src = wp_get_attachment_image_src(get_post_thumbnail_id($post_id),'full');
        $output = $timthumb_src[0];
    } else {
        $content = get_post_field('post_content', $post_id);
        $defaltthubmnail = get_template_directory_uri().'/images/default.jpg';
        preg_match_all('/<img.*?(?: |\\t|\\r|\\n)?src=[\'"]?(.+?)[\'"]?(?:(?: |\\t|\\r|\\n)+.*?)?>/sim', $content, $strResult, PREG_PATTERN_ORDER);
        $n = count($strResult[1]);
        if($n > 0){
            $output = $strResult[1][0];
        } else {
            $output = $defaltthubmnail;
        }
    }

    return $output;
}

function angela_is_has_image($post_id){
    static $has_image;
    global $post;
    if( has_post_thumbnail($post_id) ){
        $has_image = true;
    } else {
        $content = get_post_field('post_content', $post_id);
        preg_match_all('/<img.*?(?: |\\t|\\r|\\n)?src=[\'"]?(.+?)[\'"]?(?:(?: |\\t|\\r|\\n)+.*?)?>/sim', $content, $strResult, PREG_PATTERN_ORDER);
        $n = count($strResult[1]);
        if($n > 0){
            $has_image = true;
        } else {
            $has_image = false;
        }
    }

    return $has_image;

}



function yasuko_setup() {
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'yasuko_setup' );


function yasuko_scripts_styles() {
    /*
     * Adds JavaScript to pages with the comment form to support
     * sites with threaded comments (when in use).
     */
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
        wp_enqueue_script( 'comment-reply' );


    // Loads our main stylesheet.
    wp_enqueue_style( 'yasuko-style', get_stylesheet_uri(), array(), '2013-07-18' );

}
add_action( 'wp_enqueue_scripts', 'yasuko_scripts_styles' );

function yasuko_wp_title( $title, $sep ) {
    global $paged, $page;

    if ( is_feed() )
        return $title;

    // Add the site name.
    $title .= get_bloginfo( 'name', 'display' );

    // Add the site description for the home/front page.
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
        $title = "$title $sep $site_description";

    // Add a page number if necessary.
    if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
        $title = "$title $sep " . sprintf( __( 'Page %s', 'twentythirteen' ), max( $paged, $page ) );

    return $title;
}
add_filter( 'wp_title', 'yasuko_wp_title', 10, 2 );


function get_ssl_avatar($avatar) {
    $avatar = str_replace(array("www.gravatar.com","0.gravatar.com","1.gravatar.com","2.gravatar.com"),"secure.gravatar.com",$avatar);
    return $avatar;
}
add_filter('get_avatar', 'get_ssl_avatar');