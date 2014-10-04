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

      <!--
      <button>Join Now</button>
      -->
    </div>
  </div>
</div>

<!-- start of modal section -->
<div class="modal">
  
  <input class="modal-state" id="modal-1" type="checkbox" />
  <div class="modal-window">
    <div class="modal-inner">
      <label class="modal-close" for="modal-1"></label>
        <h1 id="form_elements">Fieldsets and Form Elements</h1>

  <fieldset>
    <form>   
      <p><label for="text_field">Text Field:</label>
        <input id="text_field" type="text"></p>

      <p><label for="text_area">Text Area:</label>
        <textarea id="text_area"></textarea></p>

      <p><label for="password">Password:</label>
        <input class="password" name="password" type="password">
      </p>

      <p><label for="file">File Input:</label>
        <input class="file" name="file" type="file">
      </p>
      <p><input class="button" value="Submit" type="submit"></p>
    </form>
  </fieldset>

    </div>
  </div>
</div>


<i class="fa fa-chevron-circle-right fa-3x js-menu-trigger sliding-menu-button"></i>
  <?php /* The loop */ ?>
      <?php while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <p class="title"><?php the_title(); ?></p>
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

        </article>
      </div><!-- #post -->
      <?php endwhile; ?>
<!--END: Home Section-->

<?php get_footer(); ?>