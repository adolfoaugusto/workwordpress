<?php
/**
 * Page Template
 *
 * This template is the default page template. It is used to display content when someone is viewing a
 * singular view of a page ('page' post_type) unless another page template overrules this one.
 * @link http://codex.wordpress.org/Pages
 *
 * @package WooFramework
 * @subpackage Template
 */

get_header();
?>
       
    <!-- #content Starts -->
	<?php woo_content_before(); ?>
    <div id="content" class="col-full">
    
    	<div id="main-sidebar-container">    

            <!-- #main Starts -->
            <?php woo_main_before(); ?>
            <section id="main">                     
<?php
	
	woo_loop_before();
	
	if (have_posts()) { $count = 0;
		while (have_posts()) { the_post(); $count++;
			woo_get_template_part( 'content', 'page' ); 
    		if ( has_post_thumbnail() ) {
				$feat_image_url = wp_get_attachment_url( get_post_thumbnail_id() ); 
			}?>
    		<a href="<?php echo $feat_image_url; ?>" rel="prettyPhoto">
				<?php  echo wp_get_attachment_image( get_post_thumbnail_id(get_the_ID()) );  ?>
    		</a> <?php
		}
	}
	
	woo_loop_after();
	?>
            </section><!-- /#main -->
            <?php woo_main_after(); ?>
    
            <?php get_sidebar(); ?>

		</div><!-- /#main-sidebar-container -->         

		<?php get_sidebar( 'alt' ); ?>

    </div><!-- /#content -->
	<?php woo_content_after(); ?>

<?php get_footer(); ?>