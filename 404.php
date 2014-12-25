<?php get_header(); ?>

<!--Put your sidebars in wherever necessary-->

<!--BEGIN: Content-->
<article class="category">
		<header class="page-title">
			<?php if (function_exists('HAG_Breadcrumbs')) { HAG_Breadcrumbs(); } ?>
			<h1><?php single_cat_title();?></h1>
		</header>		

		<h2>Keep searching.</h2>
	
		<p style="margin-top: 1em;">The URL you've come to doesn't exist...<br />  If it's an error with our site <a href="/contact/">please tell us about it</a>, if not use the searchbox below to find what you're looking for.</p>
		
</article>
<!--END: Content-->
<!--BEGIN: sidebar~main-->


<aside class="sidebar-main">
	<?php dynamic_sidebar('sidebar-main'); ?>
</aside>
<?php get_footer(); ?>