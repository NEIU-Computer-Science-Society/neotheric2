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
      
    <article>
      <p class="type">Home</p>
      <a name="welcome"></a>
      <h1>Welcome</h1>
      <p><span>Lorem ipsum dolor sit amet</span>, consectetur adipisicing elit. Consequatur a, ullam, voluptatum incidunt neque doloremque vel inventore distinctio laudantium harum</a> illo quam nulla dolor alias iure impedit! Accusamus! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, a, ullam, voluptatum incidunt neque porro numquam doloremque vel inventore distinctio laudantium harum illo quam nulla dolor alias iure impedit.
        <a href="#" class="read-more">Read More <span>&rsaquo;</span></a>
      </p>
      <h2>Subheading lorem</h2>
      <p class="date">July 07, 2014</p>
      <p>Consequatur ullam, voluptatum incidunt neque porro numquam doloremque vel inventore distinctio laudantium harum illo quam nulla dolor alias iure impedit. Accusamus. Consequatur, a, ullam, voluptatum incidunt neque porro numquam doloremque vel inventore distinctio laudantium harum illo quam nulla dolor alias iure impedit! Accusamus.</p>
      <hr>
      <p class="author">Author Name</p>
    </article>


<!--END: Home Section-->

<?php get_footer(); ?>