<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package brix_portfolio
 */

?>



<?php 	if ( has_post_thumbnail() ) { 
	$thumb = get_the_post_thumbnail_url(get_the_id(),'large'); 
	 } else { 
	 $thumb = esc_url( get_template_directory_uri() );?>/img/default-image.jpg

<?php } 

?>
<figure id="post-<?php the_ID(); ?>" class="all col-6-12 grid-item portfolio-item snip1577" style="background:url('<?php echo $thumb; ?>');background-size: cover;">
<div class="bg">
  <figcaption>
    
    	<?php the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' ); ?>

    <h4> <?php //do_action('portfolio-terms'); ?> </h4>
  </figcaption>

</div>

</figure><!-- #post-## -->
