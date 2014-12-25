<?php get_header(); ?>

<!--BEGIN: Default Content Section-->
	<article class="index">
	<header class="page-title">
						<?php if (function_exists('HAG_Breadcrumbs')) { HAG_Breadcrumbs(array('last_link' => true, 'separator' => '', 'wrapper_element' => div, 'wrapper_class' => breadcrumb, 'wrapper_id' => breadcrumb)); } ?>
		<div class=".tlt">
		<h1>Events</h1>
		</div>
	</header>
	<?php if (have_posts()) : // BEGIN THE LOOP ?>

		<?php while (have_posts()) : the_post(); //LOOPING through all the posts, we split onto two lines for clean indentation ?>

			<!--BEGIN: Post-->
			<div <?php post_class() ?> class="post-<?php the_ID(); ?>">
				<div class="panel">
				<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title='Click to read: "<?php strip_tags(the_title()); ?>"'><?php the_title(); ?></a></h2>
				
				<p><?php the_tags('Topics Covered: ', ', ', '<br />'); ?></p>
				<p><?php the_excerpt("Continue reading &rarr;"); ?></p>
				</div>
			</div>
			<!--END: Post-->			

		<?php wp_link_pages(); //this allows for multi-page posts ?>
				
		<?php endwhile; //END: looping through all the posts ?>

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
	</div>
</article>
<!--END: Default Layout-->

<!--BEGIN: Sidebar Main-->
<aside class="sidebar-main">
	<?php dynamic_sidebar('sidebar-main'); ?>
</aside>
<!--END: Sidebar Main-->


<?php get_footer(); ?>