<?php
/*
Template Name: home-template
*/

// Simple home page template that doesn't need a loop for content
// Gets content from advanced custom fields plugin, there's an example of how to grab a field below

?>

<?php get_header(); ?>

<!--BEGIN: Home Section-->
<div class="container">
<!-- Start of Hero Section -->
<div class="hero">
  <div class="hero-inner">
    <div class="hero-copy">
        <a href="" class="hero-logo"><img src="<?php bloginfo('template_directory');  ?>/img/css_logo_transparent.png" alt=""></a>
      <h1>Computer Science Society</h1>
      <p>As the NEIU ACM chapter, we welcome all NEIU students interested in computer science to establish a community of future Computer Science Rockstars.</p>  
      <button>Learn More</button>

  <label for="modal-1" style="display: inline">
    <button class="btn js-btn">Join Now</button>
  </label>
    </div>
  </div>
</div>

<!-- start of modal section -->
<div class="modal">
  
  <input class="modal-state" id="modal-1" type="checkbox" />
  <div class="modal-window">
    <div class="modal-inner">
      <label class="modal-close" for="modal-1"></label>
        <?php echo do_shortcode('[wpgform id=299]');?>

    </div>
  </div>
</div>

<div id="off-canvas-link">
  <i class="fa fa-chevron-circle-right fa-3x js-menu-trigger sliding-menu-button"></i>
</div>
  <?php /* The loop */ ?>
      <?php while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class('main'); ?>>
          <header class="entry-header">
            <?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
            <div class="entry-thumbnail">
              <?php the_post_thumbnail(); ?>
            </div>
            <?php endif; ?>

            <h1 class="entry-title"><?php the_title(); ?></h1>
                <div class="entry-meta">
      <span class="cat-links"><?php echo get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'twentyfourteen' ) ); ?></span>
    </div>

    <div class="entry-meta">
      <?php
        if ( 'post' == get_post_type() )
          twentyfourteen_posted_on();

        if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) :
      ?>
      <span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'twentyfourteen' ), __( '1 Comment', 'twentyfourteen' ), __( '% Comments', 'twentyfourteen' ) ); ?></span>
      <?php
        endif;

        edit_post_link( __( 'Edit', 'twentyfourteen' ), '<span class="edit-link">', '</span>' );
      ?>
    </div><!-- .entry-meta -->

          </header><!-- .entry-header -->

          <div class="entry-content">
            <?php the_content(); ?>
            <?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
          </div><!-- .entry-content -->

        </article>
      </div><!-- #post -->
      <?php endwhile; ?>
<!--END: Home Section-->

<?php get_footer(); ?>