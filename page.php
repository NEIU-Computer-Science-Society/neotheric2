<?php
get_header();
?>
<div class="page">
<article>
	<header class="page-title">
			<?php if (function_exists('HAG_Breadcrumbs')) { HAG_Breadcrumbs(array('last_link' => true, 'separator' => '', 'wrapper_element' => div, 'wrapper_class' => breadcrumb, 'wrapper_id' => breadcrumb)); } ?>
		<div class=".tlt">
		<h1><?php the_title(); ?></h1>
		</div>
	</header>
	
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	
	<div class="page-content">
		<?php the_content(); ?>
	</div>
	




	<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>
</article>
<aside>
	<?php dynamic_sidebar('sidebar-main'); ?>
</aside>
</div>
<?php 
get_footer();
?>
