<?php
/*
Template Name: home-template
*/

// Simple home page template that doesn't need a loop for content
// Gets content from advanced custom fields plugin, there's an example of how to grab a field below

?>

<?php get_header(); ?>

<!--BEGIN: Home Section-->
<!-- Start of Hero Section -->
<div class="hero">
  <div class="hero-inner">
    <div class="hero-copy">
        <a href="" class="hero-logo"><img src="<?php bloginfo('template_directory');  ?>/img/css_logo_transparent.png" alt=""></a>
      <h1>Computer Science Society</h1>
      <p>As the NEIU ACM chapter, we welcome all NEIU students interested in computer science to establish a community of future Computer Science Rockstars.</p>  
      <button>Learn More</button> <button>Join Now</button>
    </div>
  </div>
</div>
<i class="fa fa-chevron-circle-right fa-3x js-menu-trigger sliding-menu-button"></i>
  <?php /* The loop */ ?>
      <?php while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <header class="entry-header">
            <?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
            <div class="entry-thumbnail">
              <?php the_post_thumbnail(); ?>
            </div>
            <?php endif; ?>

            <h1 class="entry-title"><?php the_title(); ?></h1>
          </header><!-- .entry-header -->

          <div class="entry-content">
            <?php the_content(); ?>
            <?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
          </div><!-- .entry-content -->

        </article><!-- #post -->
      <?php endwhile; ?>


<!--END: Home Section-->

<?php get_footer(); ?>