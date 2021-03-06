<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="single">
	<!--BEGIN: Single Post-->
	<article>
				
		<header class="page-title">
						<?php if (function_exists('HAG_Breadcrumbs')) { HAG_Breadcrumbs(array('last_link' => true, 'separator' => '', 'wrapper_element' => div, 'wrapper_class' => breadcrumb, 'wrapper_id' => breadcrumb)); } ?>
			<h1><?php the_title(); ?></h1>	
			<time datetime="<?php the_time('c'); ?>" pubdate="pubdate"><?php the_time('F jS, Y'); ?></time>
			<p>by <?php the_author(); ?></p>
		</header>
		
		<div class="entry">
			<?php the_content('<p>Read the rest of this entry &raquo;</p>'); ?>
			<?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
		</div>
		
		<!--BEGIN: Post Meta Data-->
		<footer class="post-meta-data">
			<p><?php the_tags('Tags: ', ', ', '<br />'); ?></p>
		</footer>
		<!--END: Post Meta Data-->
		
		<!--BEGIN: Comments-->
		<?php comments_template( '', true ); ?>
		<!--END: Comments-->
			
	</article>
	<!--END: Single Post-->

	<!--BEGIN: sidebar~main-->
<?php // to disable this sidebar on a page by page basis just add a custom field to your page or post of disableSidebar = true
$disableSidebar = get_post_meta($post->ID, 'disableSidebar', $single = true);
if ($disableSidebar !== 'true'): ?>

<aside>
	
	<?php dynamic_sidebar('sidebar-main'); ?>
</aside>

<?php endif; ?>
<!--END: sidebar~main-->

	<?php wp_link_pages(); //this allows for multi-page posts ?>

<?php endwhile; ?>

<?php else: //ERROR: Nothing Found ?>

	<h2>No posts were found :(</h2>
	
<?php endif; //END: The Loop ?>
<!--END: Content-->
</div>
<?php get_footer(); ?>