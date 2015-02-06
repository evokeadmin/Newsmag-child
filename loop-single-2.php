<?php
/**
 * single Post template 2
 **/

if (have_posts()) {
    the_post();

    $td_mod_single = new td_module_single($post);

    ?>

        <?php echo $td_mod_single->get_social_sharing_top();?>


        <div class="td-post-content td-pb-padding-side">
            <?php
            // override the default featured image by the templates (single.php and home.php/index.php - blog loop)
            if (!empty(td_global::$load_featured_img_from_template)) {
                echo $td_mod_single->get_image(td_global::$load_featured_img_from_template);
            } else {
                echo $td_mod_single->get_image('td_640x0');
            }
            ?>

            <?php echo $td_mod_single->get_content();?>
        </div>

        <footer>
            <?php echo $td_mod_single->get_post_pagination();?>
            <?php echo $td_mod_single->get_review();?>

            <div class="td-post-source-tags td-pb-padding-side">
                <?php echo $td_mod_single->get_source_and_via();?>
                <?php echo $td_mod_single->get_the_tags();?>
            </div>

            <?php echo $td_mod_single->get_social_sharing_bottom();?>
	    <?php echo $td_mod_single->related_posts();?>
            <?php echo $td_mod_single->get_next_prev_posts();?>
	    
	    
	    <div class="primary_navigation">
    <span class="nav-previous"><?php previous_post_link('%link') ?></span>
    <span class="nav-next"><?php next_post_link('%link') ?></span>
</div>
	    
	    
            <?php echo $td_mod_single->get_author_box();?>
	        <?php echo $td_mod_single->get_item_scope_meta();?>
        </footer>
	<h4 class="block-title">
	    <span style="background-color:#d93120">JUST IN</span>
	</h4>
<?php echo do_shortcode('[td_block_11 limit="4" td_filter_default_txt="All" header_color="#d93120" category_id="4"]');?>
<?php
} else {
    //no posts
    echo td_page_generator::no_posts();
}