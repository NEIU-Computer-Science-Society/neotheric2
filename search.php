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
<?php get_header(); ?>
<!--BEGIN: Content-->

	<article class="category">
		<header class="page-title">
					<?php if (function_exists('HAG_Breadcrumbs')) { HAG_Breadcrumbs(array('last_link' => true, 'separator' => '', 'wrapper_element' => div, 'wrapper_class' => breadcrumb, 'wrapper_id' => breadcrumb)); } ?>
			<h1>Search Results</h1>
		</header>	
		<?php if (have_posts()) : ?>
	
		<?php while (have_posts()) : the_post(); ?>

			<!--BEGIN: Post-->
			<div <?php post_class() ?> class="post-<?php the_ID(); ?>">
				<div class="panel">
				<h2 class="alt"><a href="<?php the_permalink(); ?>" rel="bookmark" title='Click to read: "<?php strip_tags(the_title()); ?>"'><?php the_title(); ?></a></h2>
				<p class="date"><i class="fa fa-clock-o"></i> <?php the_time('F jS, Y') ?> &#8212; <i class="fa fa-folder-open"></i><?php the_category(', ') ?></p>
				<p><?php the_tags('Topics Covered: ', ', ', '<br />'); ?></p>
				<p><?php the_excerpt("Continue reading &rarr;"); ?></p>
				</div>
			</div>
			<!--END: Post-->
				
		<?php endwhile; ?>
			<!--BEGIN: Page Nav-->
			<?php if ( $wp_query->max_num_pages > 1 ) : // if there's more than one page turn on pagination ?>
		        <nav class="page-nav">
			        <ul>
				        <li class="next-link"><?php next_posts_link('<i class="fa fa-arrow-circle-right fa-4x"></i>
') ?></li>
				        <li class="prev-link"><?php previous_posts_link('<i class="fa fa-arrow-circle-left fa-4x"></i>
') ?></li>
			        </ul>
		        </nav>
			<?php endif; ?>
			<!--END: Page Nav-->
			
		<?php else : ?>

			<h2>No posts were found :(</h2>

	<?php endif; //END: The Loop ?>
	</article>
<!--BEGIN: sidebar~main-->
<?php // to disable this sidebar on a page by page basis just add a custom field to your page or post of disableSidebar = true
$disableSidebar = get_post_meta($post->ID, 'disableSidebar', $single = true);
if ($disableSidebar !== 'true'): ?>

<aside class="sidebar-main">
	<?php dynamic_sidebar('sidebar-main'); ?>
</aside>

<?php endif; ?>
<!--END: sidebar~main-->
<!--END: Content-->

<?php get_footer(); ?>