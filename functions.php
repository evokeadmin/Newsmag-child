<?php


/*  ----------------------------------------------------------------------------
    WordPress booster framework - this is our theme framework - all the content and settings are there
    It is not necessary to include it in the child theme only if you want to use the API
*/
if (!defined('TD_THEME_WP_BOOSTER')) {
	include TEMPLATEPATH . '/includes/td_config.php';
	include TEMPLATEPATH . '/includes/wp_booster/td_wp_booster_functions.php';
}

/*-----------------------------------------------------------------------------------*/
# Automatically add foobox rel attributes to embedded images
/*-----------------------------------------------------------------------------------*/
add_filter( 'the_content', 'insert_foobox_rel' );
function insert_foobox_rel($content) {
	$pattern = '/<a(.*?)href="(.*?).(bmp|gif|jpeg|jpg|png)"(.*?)>/i';
  	$replacement = '<a$1href="$2.$3" rel=\'foobox\'$4>';
	$content = preg_replace( $pattern, $replacement, $content );
	return $content;
}

/*-----------------------------------------------------------------------------------*/
# Restrict image uploads to Jpeg and Gif's only
/*-----------------------------------------------------------------------------------*/

add_filter('upload_mimes','restrict_mime'); 
function restrict_mime($mimes) { 
$mimes = array( 
                'jpg|jpeg|jpe' => 'image/jpeg', 
);
return $mimes;
}

/*-----------------------------------------------------------------------------------*/
# Display Post Views Column In WordPress Dashboard
/*-----------------------------------------------------------------------------------*/

//Gets the  number of Post Views to be used later.
function get_PostViews($post_ID){
    $count_key = 'post_views_count';
    //Returns values of the custom field with the specified key from the specified post.
    $count = get_post_meta($post_ID, $count_key, true);
 
    return $count;
}
 
//Function that Adds a 'Views' Column to your Posts tab in WordPress Dashboard.
function post_column_views($newcolumn){
    //Retrieves the translated string, if translation exists, and assign it to the 'default' array.
    $newcolumn['post_views'] = __('Views');
    return $newcolumn;
}
 
//Function that Populates the 'Views' Column with the number of views count.
function post_custom_column_views($column_name, $id){
     
    if($column_name === 'post_views'){
        // Display the Post View Count of the current post.
        // get_the_ID() - Returns the numeric ID of the current post.
        echo get_PostViews(get_the_ID());
    }
}
//Hooks a function to a specific filter action.
//applied to the list of columns to print on the manage posts screen.
add_filter('manage_posts_columns', 'post_column_views');
 
//Hooks a function to a specific action. 
//allows you to add custom columns to the list post/custom post type pages.
//'10' default: specify the function's priority.
//and '2' is the number of the functions' arguments.
add_action('manage_posts_custom_column', 'post_custom_column_views',10,2);

/**
 * Enqueue scripts Hammer for swipe between posts
 */

function vsgt_enqueue_scripts() {
    // Register Hammer.js 
    wp_register_script( 'hammer', get_stylesheet_directory_uri() . '/js/hammer/hammer.js' );
 
    // Register jQuery Hammer 
    // Set jQuery and Hammer as dependencies 
    wp_register_script( 'jquery_hammer', get_stylesheet_directory_uri() . '/js/hammer/jquery.hammer.js', array( 'jquery', 'hammer' ) );
 
    // Enqueue scripts
    wp_enqueue_script( 'jquery_hammer' );
    
    // Register Custom JS Script
wp_register_script( 'custom_js', get_stylesheet_directory_uri() . '/js/hammer/jquery.custom.js', array( 'jquery_hammer' ), '1.0', true );
wp_enqueue_script( 'custom_js' );
}
add_action( 'wp_enqueue_scripts', 'vsgt_enqueue_scripts' );


/**
 * Browser detection
 */


function browser_body_class($classes) {
    global $is_lynx, $is_gecko, $is_IE, $is_opera, $is_NS4, $is_safari, $is_chrome, $is_iphone;
 
    if($is_lynx) $classes[] = 'lynx';
    elseif($is_gecko) $classes[] = 'gecko';
    elseif($is_opera) $classes[] = 'opera';
    elseif($is_NS4) $classes[] = 'ns4';
    elseif($is_safari) $classes[] = 'safari';
    elseif($is_chrome) $classes[] = 'chrome';
    elseif($is_IE) $classes[] = 'ie';
    else $classes[] = 'unknown';
 
    if($is_iphone) $classes[] = 'iphone';
 
    return $classes;
}
 
add_filter( 'body_class', 'browser_body_class' );




/**
 * Enqueue scripts ADTECH for pages & single articles
 */

 
add_action( 'wp_enqueue_scripts', 'adtech_scripts' );
 
function adtech_scripts() {

    wp_register_script('dac', 'http://aka-cdn-ns.adtech.de/dt/common/DAC.js');
  wp_enqueue_script('dac');
  
  wp_register_script( 'home', get_stylesheet_directory_uri() . '/js/adtech/home.js', '1.0', true );
  
  wp_register_script( 'news', get_stylesheet_directory_uri() . '/js/adtech/news.js', '1.0', true );
  wp_register_script( 'news-articles', get_stylesheet_directory_uri() . '/js/adtech/news-articles.js', '1.0', true );

  
  wp_register_script( 'showbiz', get_stylesheet_directory_uri() . '/js/adtech/showbiz.js', '1.0', true );
  wp_register_script( 'showbiz-articles', get_stylesheet_directory_uri() . '/js/adtech/showbiz-articles.js', '1.0', true );
  
  wp_register_script( 'style', get_stylesheet_directory_uri() . '/js/adtech/style.js', '1.0', true );
  wp_register_script( 'style-articles', get_stylesheet_directory_uri() . '/js/adtech/style-articles.js', '1.0', true );
  
  wp_register_script( 'beauty', get_stylesheet_directory_uri() . '/js/adtech/beauty.js', '1.0', true );
  wp_register_script( 'beauty-articles', get_stylesheet_directory_uri() . '/js/adtech/beauty-articles.js', '1.0', true );
  
  wp_register_script( 'health', get_stylesheet_directory_uri() . '/js/adtech/health.js', '1.0', true );
  wp_register_script( 'health-articles', get_stylesheet_directory_uri() . '/js/adtech/health-articles.js', '1.0', true );
  
  wp_register_script( 'food', get_stylesheet_directory_uri() . '/js/adtech/food.js', '1.0', true );
  wp_register_script( 'food-articles', get_stylesheet_directory_uri() . '/js/adtech/food-articles.js', '1.0', true );
  
  wp_register_script( 'travel', get_stylesheet_directory_uri() . '/js/adtech/travel.js', '1.0', true );
  wp_register_script( 'travel-articles', get_stylesheet_directory_uri() . '/js/adtech/travel-articles.js', '1.0', true );
  
  wp_register_script( 'events', get_stylesheet_directory_uri() . '/js/adtech/events.js', '1.0', true );
  wp_register_script( 'events-articles', get_stylesheet_directory_uri() . '/js/adtech/events-articles.js', '1.0', true );
  
  wp_register_script( 'video', get_stylesheet_directory_uri() . '/js/adtech/video.js', '1.0', true );
  wp_register_script( 'video-articles', get_stylesheet_directory_uri() . '/js/adtech/video-articles.js', '1.0', true );
  

  
  
  if ( is_page () ) {
    
  if ( is_page( 'home' ) ) {
    wp_enqueue_script('home');
  }
    
  if ( is_page( 'news' ) ) {
    wp_enqueue_script('news');
  }
  
  if ( is_page( 'showbiz' ) ) {
    wp_enqueue_script('showbiz');
  }
  
  if ( is_page( 'style' ) ) {
    wp_enqueue_script('style');
  }
  if ( is_page( 'beauty' ) ) {
    wp_enqueue_script('beauty');
  }
  
  if ( is_page( 'health' ) ) {
    wp_enqueue_script('health');
  }
  
  if ( is_page( 'food-2' ) ) {
    wp_enqueue_script('food');
  }
  if ( is_page( 'travel-2' ) ) {
    wp_enqueue_script('travel');
  }
  
  if ( is_page( 'video' ) ) {
    wp_enqueue_script('video');
  }
  
  if ( is_page( 'events' ) ) {
    wp_enqueue_script('events');
  }
  
  if ( is_page( 'competitions' ) ) {
    wp_enqueue_script('showbiz');
  }
  
  if ( is_page( 'extra' ) ) {
    wp_enqueue_script('news');
  }
  
  if ( is_page( 'lifestyle' ) ) {
    wp_enqueue_script('style');
  }
  
  if ( is_page( '#BestXmasMovieEver' ) ) {
    wp_enqueue_script('showbiz');
  }
  
  
  } else if ( is_single() ) {

			if ( in_category( 'News' ) ) {
				wp_enqueue_script('news-articles');
			}

			if ( in_category( 'Showbiz' ) ) {
				wp_enqueue_script('showbiz-articles');
			}
                        
                        if ( in_category( 'Style' ) ) {
				wp_enqueue_script('style-articles');
			}
                        if ( in_category( 'Beauty' ) ) {
				wp_enqueue_script('beauty-articles');
			}

			if ( in_category( 'Health' ) ) {
				wp_enqueue_script('health-articles');
			}
                        
                        if ( in_category( 'Food' ) ) {
				wp_enqueue_script('food-articles');
			}
                        if ( in_category( 'Travel' ) ) {
				wp_enqueue_script('travel-articles');
			}
                        
                        if ( in_category( 'Video' ) ) {
				wp_enqueue_script('video-articles');
			}
                        
                        if ( in_category( 'Events' ) ) {
				wp_enqueue_script('events-articles');
			}
                        
                        if ( in_category( 'Evoke' ) ) {
				wp_enqueue_script('showbiz-articles');
			}
                        
                        if ( in_category( 'Competitions' ) ) {
				wp_enqueue_script('showbiz-articles');
			}
                        
                        if ( in_category( 'Extra' ) ) {
				wp_enqueue_script('news-articles');
			}
                        
                        if ( in_category( 'Lifestyle' ) ) {
				wp_enqueue_script('style-articles');
			}

} else if ( is_category() ) {
    
        if ( is_category( 'News') ) {
               wp_enqueue_script('news');
        }
        if ( is_category( 'Style') ) {
               wp_enqueue_script('style');
        }
        if ( is_category( 'Showbiz') ) {
               wp_enqueue_script('showbiz');
        }
        if ( is_category( 'Beauty') ) {
               wp_enqueue_script('beauty');
        }
        if ( is_category( 'Health') ) {
               wp_enqueue_script('health');
        }
        if ( is_category( 'Food') ) {
               wp_enqueue_script('food');
        }
        if ( is_category( 'Travel') ) {
              wp_enqueue_script('travel');
        }
        if ( is_category( 'Events') ) {
               wp_enqueue_script('events');
        }
        if ( is_category( 'Video') ) {
               wp_enqueue_script('video');
        }
        if ( is_category( 'Evoke') ) {
               wp_enqueue_script('showbiz');
        }
        
        if ( is_category( 'Competitions') ) {
               wp_enqueue_script('showbiz');
        }
        
        if ( is_category( 'Extra') ) {
               wp_enqueue_script('news');
        }
        
         if ( is_category( 'Lifestyle') ) {
               wp_enqueue_script('style');
        }

}
}


/*-----------------------------------------------------------------------------------*/
# Automatically removing unused shortcodes from the posts
/*-----------------------------------------------------------------------------------*/

add_shortcode( 'one_half', '__return_false' );
add_shortcode( 'one_half_last', '__return_false' );
add_shortcode( 'one_fourth', '__return_false' );
add_shortcode( 'one_fifth', '__return_false' );
add_shortcode( 'one_fifth_last', '__return_false' );
add_shortcode( 'one_third', '__return_false' );
add_shortcode( 'one_third_last', '__return_false' );
add_shortcode( 'two_third', '__return_false' );
