<!doctype html >
<!--[if IE 8]>    <html class="ie8" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
    <title><?php wp_title('|', true, 'right'); ?></title>
    <meta charset="<?php bloginfo( 'charset' );?>" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="56Eu7xhVuy1QQe17t7XF2XuiCR2_3F7jk7sZZ1As_qk" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php
    wp_head(); /** we hook up in wp_booster @see td_wp_booster_functions::hook_wp_head */
    ?>
    <?php
if(is_front_page() )
{
echo '<META HTTP-EQUIV="REFRESH" CONTENT="300">' ;
}
?>

</head>



<body <?php body_class( 'gesture' ); ?> itemscope="itemscope" itemtype="<?php echo td_global::$http_or_https?>://schema.org/WebPage">

<?php //this is closing in the footer.php file ?>
<div id="td-outer-wrap">

    <?php /* scroll to top */?>
    <div class="td-scroll-up"><i class="td-icon-menu-up"></i></div>

    <div class="td-transition-content-and-menu td-mobile-nav-wrap">
        <?php locate_template('parts/menu-mobile.php', true);?>
    </div>

    <?php //this is closing in the footer.php file ?>
    <div class="td-transition-content-and-menu td-content-wrap">



<?php
td_page_generator::show_header();

do_action('td_wp_booster_after_header'); //used by unique articles