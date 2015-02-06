<?php
// Template 2 - post-final-2.psd - normal image + full title
//get the global sidebar position from single.php
global $loop_sidebar_position;

$td_mod_single = new td_module_single($post);

?>
<div class="td-container td-post-template-2">
    <div class="td-container-border">
        <article id="post-<?php echo $td_mod_single->post->ID;?>" class="<?php echo join(' ', get_post_class());?>" <?php echo $td_mod_single->get_item_scope();?>>
</div>
     <div id="evoke_bg_wrapper">
        			<div id="evoke_bg_left_article">                                   
<?php

/**
 * Background Left ADTECH
 */

if ( is_single() ) {

			if ( in_category( 'Home' ) ) {
				echo do_shortcode('[td_ad_box spot_id="home_articles_left_bg"]');
			}
                        if ( in_category( 'News' ) ) {
				echo do_shortcode('[td_ad_box spot_id="news_articles_left_bg"]');
			}
			if ( in_category( 'Showbiz' ) ) {
				echo do_shortcode('[td_ad_box spot_id="showbiz_articles_left_bg"]');
			}
			if ( in_category( 'Style' ) ) {
				echo do_shortcode('[td_ad_box spot_id="style_articles_left_bg"]');
			}
			if ( in_category( 'Beauty' ) ) {
				echo do_shortcode('[td_ad_box spot_id="beauty_articles_left_bg"]');
			}
			if ( in_category( 'Health' ) ) {
				echo do_shortcode('[td_ad_box spot_id="health_articles_left_bg"]');
			}
			if ( in_category( 'Food' ) ) {
				echo do_shortcode('[td_ad_box spot_id="food_articles_left_bg"]');
			}
			if ( in_category( 'Travel' ) ) {
				echo do_shortcode('[td_ad_box spot_id="travel_articles_left_bg"]');
			}
			if ( in_category( 'Lifestyle' ) ) {
				echo do_shortcode('[td_ad_box spot_id="lifestyle_articles_left_bg"]');
			}
			if ( in_category( 'Video' ) ) {
				echo do_shortcode('[td_ad_box spot_id="video_articles_left_bg"]');
			}
                        if ( in_category( 'Events' ) ) {
				echo do_shortcode('[td_ad_box spot_id="events_articles_left_bg"]');
			}
                        
                        if ( in_category( 'Evoke' ) ) {
				echo do_shortcode('[td_ad_box spot_id="showbiz_articles_left_bg"]');
			}
                        
                        if ( in_category( 'Competitions' ) ) {
				echo do_shortcode('[td_ad_box spot_id="showbiz_articles_left_bg"]');
			}
                        
                        if ( in_category( 'Lifestyle' ) ) {
				echo do_shortcode('[td_ad_box spot_id="style_articles_left_bg"]');
			}
                        
                        if ( in_category( 'Extra' ) ) {
				echo do_shortcode('[td_ad_box spot_id="news_articles_left_bg"]');
			}
  
  
  
        }

?>
  </div>
        			<div id="evoke_bg_right_article">                                   
<?php

/**
 * Background Right ADTECH
 */

if ( is_single() ) {

			if ( in_category( 'Home' ) ) {
				echo do_shortcode('[td_ad_box spot_id="home_articles_right_bg"]');
			}
                        if ( in_category( 'News' ) ) {
				echo do_shortcode('[td_ad_box spot_id="news_articles_right_bg"]');
			}
			if ( in_category( 'Showbiz' ) ) {
				echo do_shortcode('[td_ad_box spot_id="showbiz_articles_right_bg"]');
			}
			if ( in_category( 'Style' ) ) {
				echo do_shortcode('[td_ad_box spot_id="style_articles_right_bg"]');
			}
			if ( in_category( 'Beauty' ) ) {
				echo do_shortcode('[td_ad_box spot_id="beauty_articles_right_bg"]');
			}
			if ( in_category( 'Health' ) ) {
				echo do_shortcode('[td_ad_box spot_id="health_articles_right_bg"]');
			}
			if ( in_category( 'Food' ) ) {
				echo do_shortcode('[td_ad_box spot_id="food_articles_right_bg"]');
			}
			if ( in_category( 'Travel' ) ) {
				echo do_shortcode('[td_ad_box spot_id="travel_articles_right_bg"]');
			}
			if ( in_category( 'Lifestyle' ) ) {
				echo do_shortcode('[td_ad_box spot_id="lifestyle_articles_right_bg"]');
			}
			if ( in_category( 'Video' ) ) {
				echo do_shortcode('[td_ad_box spot_id="video_articles_right_bg"]');
			}
                        if ( in_category( 'Events' ) ) {
				echo do_shortcode('[td_ad_box spot_id="events_articles_right_bg"]');
			}
                        
                        if ( in_category( 'Evoke' ) ) {
				echo do_shortcode('[td_ad_box spot_id="showbiz_articles_right_bg"]');
			}
                        
                        if ( in_category( 'Competitions' ) ) {
				echo do_shortcode('[td_ad_box spot_id="showbiz_articles_right_bg"]');
			}
                        
                        if ( in_category( 'Lifestyle' ) ) {
				echo do_shortcode('[td_ad_box spot_id="style_articles_right_bg"]');
			}
                        
                        if ( in_category( 'Extra' ) ) {
				echo do_shortcode('[td_ad_box spot_id="news_articles_right_bg"]');
			}
                        
  
        }


?>
  </div>
</div>

    
    <div class="evoke_billboard_single">                                   
<?php

/**
 * Billboard ADTECH
 */

if ( is_single() ) {

			if ( in_category( 'News' ) ) {
				echo do_shortcode('[td_ad_box spot_id="news_articles_billboard"]');
			}
                        if ( in_category( 'Style' ) ) {
				echo do_shortcode('[td_ad_box spot_id="style_articles_billboard"]');
			}
                        if ( in_category( 'Showbiz' ) ) {
				echo do_shortcode('[td_ad_box spot_id="showbiz_articles_billboard"]');
			}
                        if ( in_category( 'Beauty' ) ) {
				echo do_shortcode('[td_ad_box spot_id="beauty_articles_billboard"]');
			}
                        if ( in_category( 'Health' ) ) {
				echo do_shortcode('[td_ad_box spot_id="health_articles_billboard"]');
			}
                        if ( in_category( 'Food' ) ) {
				echo do_shortcode('[td_ad_box spot_id="food_articles_billboard"]');
			}
                        if ( in_category( 'Travel' ) ) {
				echo do_shortcode('[td_ad_box spot_id="travel_articles_billboard"]');
			}
                        if ( in_category( 'Lifestyle' ) ) {
				echo do_shortcode('[td_ad_box spot_id="lifestyle_articles_billboard"]');
			}
                        if ( in_category( 'Events' ) ) {
				echo do_shortcode('[td_ad_box spot_id="events_articles_billboard"]');
			}
                        if ( in_category( 'Video' ) ) {
				echo do_shortcode('[td_ad_box spot_id="video_articles_billboard"]');
			}
                        
                        if ( in_category( 'Evoke' ) ) {
				echo do_shortcode('[td_ad_box spot_id="showbiz_articles_billboard"]');
			}
                        
                        if ( in_category( 'Extra' ) ) {
				echo do_shortcode('[td_ad_box spot_id="news_articles_billboard"]');
			}
                        
                        if ( in_category( 'Lifestyle' ) ) {
				echo do_shortcode('[td_ad_box spot_id="style_articles_billboard"]');
			}
                        
                        if ( in_category( 'Competitions' ) ) {
				echo do_shortcode('[td_ad_box spot_id="showbiz_articles_billboard"]');
			}
                        
                        if ( in_category( 'Extra' ) ) {
				echo do_shortcode('[td_ad_box spot_id="extra_articles_billboard"]');
			}
        }


?>

    </div>
    <!-- Article ROS mobile 320x50 stickly banner 
<div id="5552322" class="home_rfd"></div>
<script> 
ADTECH.enqueueAd(5552322);
</script>
-->

            <div class="td-pb-row">
                <div class="td-pb-span12">
                    <div class="td-post-header td-pb-padding-side">
                        <?php echo td_page_generator::get_single_breadcrumbs($td_mod_single->title); ?>

                        <?php echo $td_mod_single->get_category(); ?>

                        <header>
                            <?php echo $td_mod_single->get_title();?>


                            <?php if (!empty($td_mod_single->td_post_theme_settings['td_subtitle'])) { ?>
                                <p class="td-post-sub-title"><?php echo $td_mod_single->td_post_theme_settings['td_subtitle'];?></p>
                            <?php } ?>


                            <div class="meta-info">

                                <?php echo $td_mod_single->get_author();?>
                                <?php echo $td_mod_single->get_date(false);?>
                                <?php echo $td_mod_single->get_views();?>
                                <?php echo $td_mod_single->get_comments();?>
                            </div>
                        </header>
                    </div>
                </div>
            </div> <!-- /.td-pb-row -->

            <div class="td-pb-row">
                <?php

                //the default template
                switch ($loop_sidebar_position) {
                    default:
                        ?>
                            <div class="td-pb-span8 td-main-content" role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="<?php echo td_global::$http_or_https?>://schema.org/Blog">
                                <div class="td-ss-main-content">
                                    <?php
                                    locate_template('loop-single-2.php', true);
                                    comments_template('', true);
                                    ?>
                                </div>
                            </div>
                            <div class="td-pb-span4 td-main-sidebar td-pb-border-top" role="complementary" itemscope="itemscope" itemtype="<?php echo td_global::$http_or_https?>://schema.org/WPSideBar">
                                <div class="td-ss-main-sidebar">
                                    <?php get_sidebar(); ?>
                                </div>
                            </div>
                        <?php
                        break;

                    case 'sidebar_left':
                        ?>
                        <div class="td-pb-span4 td-main-sidebar td-pb-border-top" role="complementary" itemscope="itemscope" itemtype="<?php echo td_global::$http_or_https?>://schema.org/WPSideBar">
                            <div class="td-ss-main-sidebar">
                                <?php get_sidebar(); ?>
                            </div>
                        </div>
                        <div class="td-pb-span8 td-main-content" role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="<?php echo td_global::$http_or_https?>://schema.org/Blog">
                            <div class="td-ss-main-content">
                                <?php
                                locate_template('loop-single-2.php', true);
                                comments_template('', true);
                                ?>
                            </div>
                        </div>
                        <?php
                        break;

                    case 'no_sidebar':
                        //td_global::$load_featured_img_from_template = 'art-slide-big';
                        td_global::$load_featured_img_from_template = 'full';
                        ?>
                        <div class="td-pb-span12 td-main-content" role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="<?php echo td_global::$http_or_https?>://schema.org/Blog">
                            <div class="td-ss-main-content">
                                <?php
                                locate_template('loop-single-2.php', true);
                                comments_template('', true);
                                ?>
                            </div>
                        </div>
                        <?php
                        break;

                }
                ?>
            </div> <!-- /.td-pb-row -->
        </article> <!-- /.post -->
         <script>
ADTECH.executeQueue();
</script>
    </div>
</div> <!-- /.td-container -->