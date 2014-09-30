		<!-- Start of Footer -->
		<footer class="footer">
		  <div class="footer-logo">
		    <img src="img/acm.png" alt="">
		  </div>
		  <div class="footer-links">
		    <ul>
		      <li><h3>Content</h3></li>
		      <li><a href="javascript:void(0)">About</a></li>
		      <li><a href="javascript:void(0)">Contact</a></li>
		      <li><a href="javascript:void(0)">Resources</a></li>
		    </ul>
		    <ul>
		      <li><h3>Follow Us</h3></li>
		      <li><a><i class="fa fa-facebook fa-3x"></i></a> <a><i class="fa fa-github fa-3x"></i></a> <a><i class="fa fa-youtube fa-3x"></i></a></li>
		    </ul>
		    <ul>
		      <li><h3>Legal</h3></li>
		      <li><a href="javascript:void(0)">Our Constitution</a></li>
		      <li><a href="javascript:void(0)">Privacy Policy</a></li>
		    </ul>
		  </div>

		  <hr>

		  <p>Disclaimer area lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, nostrum repudiandae saepe.</p>
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
	</body>
</html>