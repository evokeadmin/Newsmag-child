<!-- Footer -->
<?php if (td_util::get_option('tds_footer') != 'no') { ?>
    <div class="td-footer-container td-container">
        <div class="td-pb-row">
            <?php
            $tds_footer_widget_cols = td_util::get_option('tds_footer_widget_cols');

            //reset global columns
            global $td_row_count, $td_column_count;
            $td_row_count = 1;

            switch ($tds_footer_widget_cols) {

                /*  ----------------------------------------------------------------------------
                    2 col - 1 col
                 */
                case '23-13':
                    ?>
                        <div class="td-pb-span8">
                            <?php
                            // predefined content column 2
                            if (td_util::get_option('tds_footer_column_2') != 'no') {
                                echo td_global_blocks::get_instance('td_block_7')->render(array(
                                    'custom_title' => 'EVEN MORE NEWS',
                                    'border_top' => 'no_border_top',
                                    'limit' => 3
                                ));
                            }
                            ?>
                            <?php
                                $td_column_count = '2/3';  //set the pagebuilder global for 2 col
                                dynamic_sidebar('Footer 1')
                            ?>
                        </div>
                        <div class="td-pb-span4">
                            <?php locate_template('parts/footer/column-1.php', true); ?>
                            <?php
                                $td_column_count = '1/3'; //set the pagebuilder global for 1 col
                                dynamic_sidebar('Footer 2')
                            ?>
                        </div>
                    <?php
                break;


                /*  ----------------------------------------------------------------------------
                    1 col - 2 col
                 */
                case '13-23':
                    ?>
                        <div class="td-pb-span4">
                            <?php locate_template('parts/footer/column-1.php', true); ?>
                            <?php
                                $td_column_count = '1/3'; //set the pagebuilder global for 1 col
                                dynamic_sidebar('Footer 1')
                            ?>
                        </div>
                        <div class="td-pb-span8">
                            <?php
                            // predefined content column 2
                            if (td_util::get_option('tds_footer_column_2') != 'no') {
                                echo td_global_blocks::get_instance('td_block_7')->render(array(
                                    'custom_title' => 'EVEN MORE NEWS',
                                    'border_top' => 'no_border_top',
                                    'limit' => 3
                                ));
                            }
                            ?>
                            <?php
                            $td_column_count = '2/3';  //set the pagebuilder global for 2 col
                                dynamic_sidebar('Footer 2')
                            ?>
                        </div>
                    <?php
                break;



                /*  ----------------------------------------------------------------------------
                    full width
                 */
                case '33':
                    $td_column_count = '1/1'; //3 cols widget
                    ?>
                        <div class="td-pb-span12 td-footer-full">
                            <?php locate_template('parts/footer/column-1.php', true); ?>
                            <?php dynamic_sidebar('Footer 1')?></div>
                    <?php
                break;



                /*  ----------------------------------------------------------------------------
                    1 col - 1 col - 1 col
                 */
                default:
                    $td_column_count = '1/3'; //1 col widget - all!
                    ?>

                        <div class="td-pb-span4">
                            <?php locate_template('parts/footer/column-1.php', true); ?>
                            <?php dynamic_sidebar('Footer 1')?>
                        </div>

                        <div class="td-pb-span4">
                            <?php
                            // predefined content column 2
                            if (td_util::get_option('tds_footer_column_2') != 'no') {
                                echo td_global_blocks::get_instance('td_block_7')->render(array(
                                    'custom_title' => 'EVEN MORE NEWS',
                                    'border_top' => 'no_border_top',
                                    'limit' => 3
                                ));
                            }
                            ?>
                            <?php dynamic_sidebar('Footer 2')?>
                        </div>

                        <div class="td-pb-span4">
                            <?php
                            // predefined content column 3
                            if (td_util::get_option('tds_footer_column_3') != 'no') {
                                echo td_global_blocks::get_instance('td_popular_categories')->render(array(
                                    'number' => 5,
	                                'custom_title' => __td('POPULAR CATEGORY')
                                ));
                            }
                            ?>
                            <?php dynamic_sidebar('Footer 3')?>
                        </div>

                    <?php
                break;
            }
            ?>
        </div>
    </div>
<?php } ?>

<!-- Sub Footer -->
<?php if (td_util::get_option('tds_sub_footer') != 'no') { ?>
    <div class="td-sub-footer-container td-container td-container-border <?php if (td_util::get_option('tds_footer') == 'no' && td_util::get_option('tds_footer_bottom_color') == '' ) { echo "td-add-border";} ?>">
        <div class="td-pb-row">
            <div class="td-pb-span4 td-sub-footer-copy">
                <div class="td-pb-padding-side">
                    <?php
                    $tds_footer_copyright = td_util::get_option('tds_footer_copyright');
                    $tds_footer_copy_symbol = td_util::get_option('tds_footer_copy_symbol');

                    //show copyright symbol
                    if ($tds_footer_copy_symbol == '') {
                        echo '&copy; ';
                    }

                    echo $tds_footer_copyright;
                    ?>
                </div>
            </div>

            <div class="td-pb-span8 td-sub-footer-menu">
                <div class="td-pb-padding-side">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer-menu',
                        'menu_class'=> '',
                        'fallback_cb' => 'td_wp_footer_menu'
                    ));

                    //if no menu
                    function td_wp_footer_menu() {
                        //do nothing?
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
    </div><!--close content div-->
</div><!--close td-outer-wrap-->



<?php wp_footer(); ?>

<!-- Start Cookie Assisstant (http://cookieassistant.com) -->
<script src="http://app.cookieassistant.com/widget.js?token=JQbYqa6i5gguvZANfVdgmg" type="text/javascript"></script>
<div id="cookie_assistant_container"></div>
<!-- End Cookie Assistant -->

<!-- Begin comScore Tag -->
<script>   var _comscore = _comscore || [];   _comscore.push({ c1: "2", c2: "6034964" });   (function() {     var s = document.createElement("script"), el = document.getElementsByTagName("script")[0]; s.async = true;     s.src = (document.location.protocol == "https:" ? "https://sb" : "http://b") + ".scorecardresearch.com/beacon.js";     el.parentNode.insertBefore(s, el);   })(); </script>
<noscript>   <img src="http://b.scorecardresearch.com/p?c1=2&c2=6034964&cv=2.0&cj=1" /> </noscript>
<!-- End comScore Tag -->

<link rel="publisher" href=" https://plus.google.com/105777157571453496639" />


<!-- C|ON|TEXT ad tag -->
<script type='text/javascript'>
ctx_SiteID = 'daec87c7-5284-46be-88bd-fc001c311567';
</script>
<script type='text/javascript' src='http://lb.c-on-text.com/script.aspx'>
</script>
<!-- C|ON|TEXT ad tag -->


</body>
</html>