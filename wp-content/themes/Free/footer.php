		<!--start: Container -->
    	<div class="container">		

      		<!-- start: Footer Menu -->
			<div id="footer-menu" class="hidden-tablet hidden-phone">

				<!-- start: Container -->
				<div class="container">
				
					<!-- start: Row -->
					<div class="row">

						<!-- start: Footer Menu Logo -->
						<div class="span1">
							<div id="footer-menu-logo">
								<a href="#"><img src="img/logo-footer-menu.png" alt="logo" /></a>
							</div>
						</div>
						<!-- end: Footer Menu Logo -->

						<!-- start: Footer Menu Links-->
						<div class="span10">
						
							<div id="footer-menu-links">

								<ul id="footer-nav">

									        <li> <?php wp_nav_menu( array( 'theme_location' => 'primay', 'container_class' => 'new_menu_class' ) ); ?> </li>

								</ul>

							</div>
						
						</div>
						<!-- end: Footer Menu Links-->

						<!-- start: Footer Menu Back To Top -->
						<div class="span1">
							
							<div id="footer-menu-back-to-top">
								<a href="#"></a>
							</div>
					
						</div>
						<!-- end: Footer Menu Back To Top -->
				
					</div>
					<!-- end: Row -->

				</div>
				<!-- end: Container  -->	

			</div>	
			<!-- end: Footer Menu -->

			<!-- start: Footer -->
			<div id="footer">
			
				<!-- start: Container -->
				<div class="container">
				
					<!-- start: Row -->
					<div class="row">

						<!-- start: About -->
						<div class="span3">
						<?php $the_query = new WP_Query( 'page_id=15' );?>

<?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>

                     <h1>  <?php the_title(); ?></h1>
                     <p><?php  the_excerpt(); ?></p>

     <?php endwhile;?>
							<!-- <h3>About Us</h3>
							<p>
								Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
							</p> -->
							
						</div>
						<!-- end: About -->

						<!-- start: Photo Stream -->
						<div class="span3">
						
							<h3>Photo Stream</h3>
							<div class="flickr-widget">
								<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=9&display=latest&size=s&layout=x&source=user&user=29609591@N08"></script>
								<div class="clear"></div>
							</div>
						
						</div>
						<!-- end: Photo Stream -->

				
						<div class="span6">
					
							<!-- start: Follow Us -->
							<h3>Follow Us!</h3>
							<ul class="social-grid">
								<?php if ( !function_exists('dynamic_sidebar') ||
 !dynamic_sidebar('followfooter') ) : ?>
<?php endif; ?>	
							</ul>
							<!-- end: Follow Us -->
					
							<!-- start: Newsletter -->
							<form id="newsletter">
								<h3>Newsletter</h3>
								<p>Please leave us your email</p>
								<label for="newsletter_input">@:</label>
								<input type="text" id="newsletter_input"/>
								<input type="submit" id="newsletter_submit" value="submit">
							</form>
							<!-- end: Newsletter -->
					
						</div>
					
					</div>
					<!-- end: Row -->	
				
				</div>
				<!-- end: Container  -->

			</div>
			<!-- end: Footer -->
	
		</div>
		<!-- end: Container  -->

	</div>
	<!-- end: Wrapper  -->


	<!-- start: Copyright -->
	<div id="copyright">
	
		<!-- start: Container -->
		<div class="container">
		
				<p>
					&copy; 2013, creativeLabs. <a href="http://bootstrapmaster.com" alt="Bootstrap Themes">Bootstrap Themes</a> Designed by BootstrapMaster in Poland <img src="img/poland.png" alt="Poland" style="margin-top:-4px">
				</p>
	
		</div>
		<!-- end: Container  -->
		
	</div>	