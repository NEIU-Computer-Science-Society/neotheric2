<!--
		<form method="get" action="<?php bloginfo('home'); ?>/">
		<fieldset>
			<label for="s">Search</label>
			<input placeholder="search" type="text" value="<?php the_search_query(); ?>" name="s" id="s" accesskey="s" tabindex="1" />
			<input class="button" type="submit" value="Go &gt;" tabindex="2" />
		</fieldset>
		</form>
-->

		        	<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
				        <input type="search" placeholder="Enter Search" value="<?php the_search_query(); ?>" name="s" id="s" accesskey="s" tabindex="1" />
				        <input type="hidden" value="post" name="post_type" id="post_type" />
				        <button type="submit">
				        	<img src="<?php bloginfo('template_url'); ?>/img/search-icon.png" alt="">
				        </button>
		      		</form>