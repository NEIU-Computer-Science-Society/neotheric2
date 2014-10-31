<?php get_header(); ?>

<!--BEGIN: Content-->
	<article class="category">
		<?php if (function_exists('HAG_Breadcrumbs')) { HAG_Breadcrumbs(); } ?>
	<?php if (have_posts()) : ?>
		
		<h1><?php single_cat_title(); ?></h1>

		<?php while (have_posts()) : the_post(); ?>

			<!--BEGIN: Post-->
			<div <?php post_class() ?> class="post-<?php the_ID(); ?>">
				
				<h2 class="alt"><a href="<?php the_permalink(); ?>" rel="bookmark" title='Click to read: "<?php strip_tags(the_title()); ?>"'><?php the_title(); ?></a></h2>
				<p class="date"><i class="fa fa-clock-o"></i> <?php the_time('F jS, Y') ?> &#8212; <i class="fa fa-folder-open"></i><?php the_category(', ') ?></p>
				<p><?php the_tags('Topics Covered: ', ', ', '<br />'); ?></p>
				<p><?php the_excerpt("Continue reading &rarr;"); ?></p>

			</div>
			<!--END: Post-->
				
		<?php endwhile; ?>
	</article>
			<!--BEGIN: Page Nav-->
			<?php if ( $wp_query->max_num_pages > 1 ) : // if there's more than one page turn on pagination ?>
		        <nav class="page-nav">
		        	<h1 class="hide">Page Navigation</h1>
			        <ul class="clear-fix">
				        <li class="next-link"><?php next_posts_link('Next Page') ?></li>
				        <li class="prev-link"><?php previous_posts_link('Previous Page') ?></li>
			        </ul>
		        </nav>
			<?php endif; ?>
			<!--END: Page Nav-->
			
		<?php else : ?>

			<h2>No posts were found :(</h2>

	<?php endif; //END: The Loop ?>
	<!--BEGIN: sidebar~main-->
<?php // to disable this sidebar on a page by page basis just add a custom field to your page or post of disableSidebar = true
$disableSidebar = get_post_meta($post->ID, 'disableSidebar', $single = true);
if ($disableSidebar !== 'true'): ?>

<aside class="sidebar-main">
	<?php dynamic_sidebar('sidebar-main'); ?>
</aside>

<?php endif; ?>
<!--END: sidebar~main-->


</div>
<!--END: Content-->

<?php get_footer(); ?>