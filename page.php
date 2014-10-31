<?php
get_header();
?>
<article class="page">
	<header class="page-title">
			<?php if (function_exists('HAG_Breadcrumbs')) { HAG_Breadcrumbs(); } ?>

		<h1><?php the_title(); ?></h1>
	</header>
	
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	
	<div class="page-content">
		<?php the_content(); ?>
	</div>
	




	<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>
</article>
<?php 
get_footer();
?>
