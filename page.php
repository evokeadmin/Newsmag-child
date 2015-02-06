<?php
/*  ----------------------------------------------------------------------------
    the default page template
 */


get_header();


//set the template id, used to get the template specific settings
$template_id = 'page';


$loop_sidebar_position = td_util::get_option('tds_' . $template_id . '_sidebar_pos'); //sidebar right is default (empty)

//get theme panel variable for page comments side wide
$td_enable_or_disable_page_comments = td_util::get_option('tds_disable_comments_pages');


//read the custom single post settings - this setting overids all of them
$td_page = get_post_meta($post->ID, 'td_page', true);
if (!empty($td_page['td_sidebar_position'])) {
    $loop_sidebar_position = $td_page['td_sidebar_position'];
}


/**
 * detect the page builder
 */
$td_use_page_builder = false;
if (method_exists('WPBMap', 'getShortCodes')) {
    $td_page_builder_short_codes = array_keys(WPBMap::getShortCodes());
    if (td_util::strpos_array($post->post_content, $td_page_builder_short_codes) === true) {
        $td_use_page_builder = true;
    }
}





if ($td_use_page_builder) {

    // the page is rendered using the page builder template (no sidebars)
    if (have_posts()) { ?>
        <?php while ( have_posts() ) : the_post(); ?>
        
             <div id="evoke_bg_wrapper">
        			<div id="evoke_bg_left_page">                                   
<?php

/**
 * Background Left ADTECH
 */

if ( is_page() ) {

			if ( is_page( 'Home' ) ) {
				echo do_shortcode('[td_ad_box spot_id="home_left_bg"]');
			}
                        if ( is_page( 'News' ) ) {
				echo do_shortcode('[td_ad_box spot_id="news_left_bg"]');
			}
			if ( is_page( 'Showbiz' ) ) {
				echo do_shortcode('[td_ad_box spot_id="showbiz_left_bg"]');
			}
			if ( is_page( 'Style' ) ) {
				echo do_shortcode('[td_ad_box spot_id="style_left_bg"]');
			}
			if ( is_page( 'Beauty' ) ) {
				echo do_shortcode('[td_ad_box spot_id="beauty_left_bg"]');
			}
			if ( is_page( 'Health' ) ) {
				echo do_shortcode('[td_ad_box spot_id="health_left_bg"]');
			}
			if ( is_page( 'Food' ) ) {
				echo do_shortcode('[td_ad_box spot_id="food_left_bg"]');
			}
			if ( is_page( 'Travel' ) ) {
				echo do_shortcode('[td_ad_box spot_id="travel_left_bg"]');
			}
			if ( is_page( 'Lifestyle' ) ) {
				echo do_shortcode('[td_ad_box spot_id="lifestyle_left_bg"]');
			}
			if ( is_page( 'Video' ) ) {
				echo do_shortcode('[td_ad_box spot_id="video_left_bg"]');
			}
                        if ( is_page( 'Events' ) ) {
				echo do_shortcode('[td_ad_box spot_id="events_left_bg"]');
			}
                        
                        if ( is_page( 'Evoke' ) ) {
				echo do_shortcode('[td_ad_box spot_id="showbiz_left_bg"]');
			}
                        
                        if ( is_page( 'Competitions' ) ) {
				echo do_shortcode('[td_ad_box spot_id="showbiz_left_bg"]');
			}
                        
                        if ( is_page( 'Lifestyle' ) ) {
				echo do_shortcode('[td_ad_box spot_id="style_left_bg"]');
			}
                        
                        if ( is_page( 'Extra' ) ) {
				echo do_shortcode('[td_ad_box spot_id="news_left_bg"]');
			}
  
  
  
        }

?>
  </div>
        			<div id="evoke_bg_right_page">                                   
<?php

/**
 * Background Right ADTECH
 */

if ( is_page() ) {

			if ( is_page( 'Home' ) ) {
				echo do_shortcode('[td_ad_box spot_id="home_right_bg"]');
			}
                        if ( is_page( 'News' ) ) {
				echo do_shortcode('[td_ad_box spot_id="news_right_bg"]');
			}
			if ( is_page( 'Showbiz' ) ) {
				echo do_shortcode('[td_ad_box spot_id="showbiz_right_bg"]');
			}
			if ( is_page( 'Style' ) ) {
				echo do_shortcode('[td_ad_box spot_id="style_right_bg"]');
			}
			if ( is_page( 'Beauty' ) ) {
				echo do_shortcode('[td_ad_box spot_id="beauty_right_bg"]');
			}
			if ( is_page( 'Health' ) ) {
				echo do_shortcode('[td_ad_box spot_id="health_right_bg"]');
			}
			if ( is_page( 'Food' ) ) {
				echo do_shortcode('[td_ad_box spot_id="food_right_bg"]');
			}
			if ( is_page( 'Travel' ) ) {
				echo do_shortcode('[td_ad_box spot_id="travel_right_bg"]');
			}
			if ( is_page( 'Lifestyle' ) ) {
				echo do_shortcode('[td_ad_box spot_id="lifestyle_right_bg"]');
			}
			if ( is_page( 'Video' ) ) {
				echo do_shortcode('[td_ad_box spot_id="video_right_bg"]');
			}
                        if ( is_page( 'Events' ) ) {
				echo do_shortcode('[td_ad_box spot_id="events_right_bg"]');
			}
                        
                        if ( is_page( 'Evoke' ) ) {
				echo do_shortcode('[td_ad_box spot_id="showbiz_right_bg"]');
			}
                        
                        if ( is_page( 'Competitions' ) ) {
				echo do_shortcode('[td_ad_box spot_id="showbiz_right_bg"]');
			}
                        
                        if ( is_page( 'Lifestyle' ) ) {
				echo do_shortcode('[td_ad_box spot_id="style_right_bg"]');
			}
                        
                        if ( is_page( 'Extra' ) ) {
				echo do_shortcode('[td_ad_box spot_id="news_right_bg"]');
			}
                        
  
        }


?>
  </div>
</div>
        
         
            <div class="td-container">
                <div class="td-container-border">
                    <?php the_content(); ?>
                </div>
            </div>

        <?php endwhile; ?>
        
             <script>
ADTECH.executeQueue();
</script>
    <?php }
} else {

    //no page builder detected, we load a default page template with sidebar / no sidebar
    ?>
    <div class="td-container">
        <div class="td-container-border">
            <div class="td-pb-row">
                <?php
                switch ($loop_sidebar_position) {
                    default:
                        ?>
                            <div class="td-pb-span8 td-main-content" role="main" itemscope="itemscope" itemprop="mainContentOfPage" itemtype="<?php echo td_global::$http_or_https?>://schema.org/CreativeWork">
                                <div class="td-ss-main-content">
                                    <?php
                                    if (have_posts()) {
                                        while ( have_posts() ) : the_post();
                                            ?>
                                            <div class="td-page-header td-pb-padding-side">
                                                <?php echo td_page_generator::get_page_breadcrumbs(get_the_title()); ?>
                                                <h1 itemprop="name" class="entry-title td-page-title">
                                                    <span><?php the_title() ?></span>
                                                </h1>
                                            </div>
                                            <div class="td-pb-padding-side td-page-content">
                                            <?php
                                                the_content();
                                        endwhile;//end loop

                                    }
                                    ?>
                                    </div>
                                    <?php
                                    if($td_enable_or_disable_page_comments == 'show_comments') {
                                        comments_template('', true);
                                    }?>
                                </div>
                            </div>
                            <div class="td-pb-span4 td-main-sidebar" role="complementary" itemscope="itemscope" itemtype="<?php echo td_global::$http_or_https?>://schema.org/WPSideBar">
                                <div class="td-ss-main-sidebar">
                                    <?php get_sidebar(); ?>
                                </div>
                            </div>
                        <?php
                        break;

                    case 'sidebar_left':
                        ?>
                        <div class="td-pb-span4 td-main-sidebar" role="complementary" itemscope="itemscope" itemtype="<?php echo td_global::$http_or_https?>://schema.org/WPSideBar">
                            <div class="td-ss-main-sidebar">
                                <?php get_sidebar(); ?>
                            </div>
                        </div>
                        <div class="td-pb-span8 td-main-content" role="main" itemscope="itemscope" itemprop="mainContentOfPage" itemtype="<?php echo td_global::$http_or_https?>://schema.org/CreativeWork">
                            <div class="td-ss-main-content">
                                <?php

                                if (have_posts()) {
                                    while ( have_posts() ) : the_post();
                                        ?>
                                        <div class="td-page-header td-pb-padding-side">
                                            <?php echo td_page_generator::get_page_breadcrumbs(get_the_title()); ?>
                                            <h1 itemprop="name" class="entry-title td-page-title">
                                                <span><?php the_title() ?></span>
                                            </h1>
                                        </div>
                                        <div class="td-pb-padding-side td-page-content">
                                        <?php
                                        the_content();
                                    endwhile; //end loop
                                }
                                ?>
                                </div>
                                <?php
                                if($td_enable_or_disable_page_comments == 'show_comments') {
                                    comments_template('', true);
                                }?>
                            </div>
                        </div>
                        <?php
                        break;

                    case 'no_sidebar':
                        ?>
                        <div class="td-pb-span12 td-main-content" role="main" itemscope="itemscope" itemprop="mainContentOfPage" itemtype="<?php echo td_global::$http_or_https?>://schema.org/CreativeWork">

                            <?php
                            if (have_posts()) {
                                while ( have_posts() ) : the_post();
                                    ?>
                                    <div class="td-page-header td-pb-padding-side">
                                        <?php echo td_page_generator::get_page_breadcrumbs(get_the_title()); ?>
                                        <h1 itemprop="name" class="entry-title td-page-title">
                                            <?php /*<a itemprop="url" href="<?php the_permalink()?>" rel="bookmark" title="<?php the_title_attribute() ?>"><?php the_title() ?></a>*/?>
                                            <span><?php the_title() ?></span>
                                        </h1>
                                    </div>
                                    <div class="td-pb-padding-side td-page-content">
                                    <?php
                                    the_content();
                                endwhile; //end loop
                            }
                            ?>
                            </div>
                            <?php
                            if($td_enable_or_disable_page_comments == 'show_comments') {
                                comments_template('', true);
                            }?>
                        </div>
                        <?php
                        break;
                }
                ?>
            </div> <!-- /.td-pb-row -->
        </div>
    </div> <!-- /.td-container -->
    <?php
}




get_footer();
