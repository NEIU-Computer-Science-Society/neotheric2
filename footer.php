		<!-- Start of Footer -->
		<footer class="footer">
		  <div class="footer-logo">
		    <img src="<?php bloginfo('template_directory');  ?>/img/acm_chapter_sym-hires.png" alt="">
		  </div>
		  <div class="footer-links">
		    <ul>
		      <li><h3>Content</h3></li>
		      <li><a href="http://neiu.acm.org/about/">About</a></li>
		      <li><a href="http://neiu.acm.org/contact/">Contact</a></li>
		      <li><a href="http://neiu.acm.org/resources/">Resources</a></li>
		    </ul>
		    <ul>
		      <li><h3>Follow Us</h3></li>
		      <li><a href="https://www.facebook.com/acm.neiu"><i class="fa fa-facebook fa-3x"></i></a>
		      	<a href="https://github.com/neiucss"><i class="fa fa-github fa-3x"></i></a>
		      	<a><i class="fa fa-youtube fa-3x"></i></a></li>
		    </ul>
		    <ul>
		      <li><h3>Legal</h3></li>
		      <li><a href="http://neiu.acm.org/constitution">Our Constitution</a></li>
		      <li><a href="http://neiu.acm.org/privacy-policy/">Privacy Policy</a></li>
		    </ul>
		  </div>

		  <hr>

		  
		</footer>
		<!-- end of Footer -->
		
		<!-- Start of Off-Canvas Navigation -->
		<div class="js-menu sliding-menu-content">
			<nav>
			  <ul>
			    <li><a href="#welcome">Welcome</a></li>
			    <li><a href="#events">Latest Events</a></li>
			    <li><a href="#faq">Questons &amp; Answers</a></li>
			  </ul>
			 </nav>
		</div>
		<div class="js-menu-screen menu-screen"></div>
		<!-- End of Off-Canvas Navigation -->

		<!-- start of javascript -->
		
		<!-- code for modal -->
		<script>
			$(document).ready(function() {
			  var menu = $('#navigation-menu');
			  var menuToggle = $('#js-mobile-menu');
			  var signUp = $('.sign-up');

			  $(menuToggle).on('click', function(e) {
			    e.preventDefault();
			    menu.slideToggle(function(){
			      if(menu.is(':hidden')) {
			        menu.removeAttr('style');
			      }
			    });
			  });

			  // underline under the active nav item
			  $(".nav .nav-link").click(function() {
			    $(".nav .nav-link").each(function() {
			      $(this).removeClass("active-nav-item");
			    });
			    $(this).addClass("active-nav-item");
			    $(".nav .more").removeClass("active-nav-item");
			  });
			});
		</script>

		<script>
			$(document).ready(function(){
			  $('.js-menu-trigger').on('click touchstart', function(e){
			    $('.js-menu').toggleClass('is-visible');
			    $('.js-menu-screen').toggleClass('is-visible');
			    e.preventDefault();
			  });

			  $('.js-menu-screen').on('click touchstart', function(e){
			    $('.js-menu').toggleClass('is-visible');
			    $('.js-menu-screen').toggleClass('is-visible');
			    e.preventDefault();
			  });
			});

		</script>

		<script>
			$(function() {
			  $('a[href*=#]:not([href=#])').click(function() {
			    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			      var target = $(this.hash);
			      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			      if (target.length) {
			        $('html,body').animate({
			          scrollTop: target.offset().top
			        }, 1000);
			        return false;
			      }
			    }
			  });
			});
		</script>

		<script type="text/javascript">
    		document.getElementById("learn-more").onclick = function () {
        	location.href = "http://neiu.acm.org/about-us";
    	};
</script>
		<?php wp_footer();?>
	</body>
</html>