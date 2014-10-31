<?php get_header(); ?>
<?php
global $query_string;

$query_args = explode("&", $query_string);
$search_query = array();

foreach($query_args as $key => $string) {
	$query_split = explode("=", $string);
	$search_query[$query_split[0]] = urldecode($query_split[1]);
} // foreach

$search = new WP_Query($search_query);
?>
<!--BEGIN: Content-->
<div class="content-main clear-fix" role="main">
	<article>	
		<h1>Search Results</h1>

	
	<?php
	
	// Query Posts
	
	//BEGIN: The Loop
	if (have_posts()) : while (have_posts()) : the_post();?>
	
		<div class="search-result-item">
		<!--BEGIN: List Item-->
			<a <?php post_class('clear-fix'); ?> href="<?php the_permalink() ?>" title="Click to read more...">
			
				<strong><?php the_title(); ?></strong>

				<!--BEGIN: Large Thumbnail-->
				<?php $thumbLg = get_post_meta($post->ID, 'thumb_lg', $single = true); // if theres a thumbnail get it ?>
				
				<?php if ($thumbLg !== '') : ?>
					
					<img class="alignleft" alt="<?php echo the_title(); ?>" src="<?php echo '/wp-content' . "$thumbLg" ?>" />

				<?php endif; ?>
				<!--END: Large Thumbnail-->
				<br />
				<!--BEGIN: Excerpt-->
				<span class="entry">
					<?php the_excerpt("Continue reading &rarr;"); ?>
				</span>
				<!--END: Excerpt-->	
			</a>
		<!--END: List Item-->
		</div>	
		
		<?php endwhile; ?>

			<div class="navigation">
				<?php posts_nav_link('&nbsp;','<div class="alignleft">&laquo; Previous Page</div>','<div class="alignright">Next Page &raquo;</div>') ?>
			</div>

		<?php else : // if no posts were found give the warning below ?>

		<div class="post sys error">
			<p>Nothing Found, there seems to be something wrong... </p>
			<?php get_search_form(); ?>
		</div>
		
	<?php endif; //END: The Loop ?>
	</article>
</div>
<!--END: Content-->

<?php get_footer(); ?>