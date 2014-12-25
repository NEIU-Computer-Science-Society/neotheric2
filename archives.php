<?php
/*
Template Name: Archives with Content
*/

get_header(); ?>
<div id="content">
    <?php if (have_posts()) : while (have_posts()) : the_post();?>
    <div class="post">
        <h2 id="post-<?php the_ID(); ?>"><?php the_title();?></h2>
        <div class="entrytext">
            <?php the_content('<p>Read the rest of this page »</p>'); ?>
        </div>
    </div>
    <?php endwhile; endif; ?>
<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
</div>
<div id="main">
    <?php get_search_form(); ?>
    <h2>View Events by Month:</h2>
    <ul>
        <?php wp_get_archives('type=monthly'); ?>
    </ul>   
    </ul>
</div>
<?php get_footer(); ?>