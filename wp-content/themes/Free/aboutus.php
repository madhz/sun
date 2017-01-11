<?php/*
* Template Name: about
*/
?>

<div id="wrapper">
		
		<!--start: Container -->
		<div class="container">
			<?php
get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<!--start: Navigation-->	
			<div class="navbar navbar-inverse">
    			<div class="navbar-inner">
        			<div class="container">
          				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            				<span class="icon-bar"></span>
            				<span class="icon-bar"></span>
            				<span class="icon-bar"></span>
          				</a>

                      
                 <div id= "topMenu">
                  
                    <ul>
                               <li> <?php wp_nav_menu( array( 'theme_location' => 'primay', 'container_class' => 'new_menu_class' ) ); ?> </li>
                    </ul>
               <!--Home_Cont_Right_Bottom End-->
        			</div>
      			</div>
    		</div>
			<!--end: Navigation-->
			
		</div>
		<!--end: Container-->
		<div class="container">
	
			<!--start: Row -->
	    	<div class="row">

		
				<div class="span8">
					
					<!-- start: About Us -->
				<?php  the_content(); ?>
					<!-- end: History -->

					<div class="horizontal-line"></div>

					<!-- start: Team -->	
					<div id="team">
						
						<div class="title"><h3>Team</h3></div>
						
						<!-- start: Row -->
						<div class="row">
						
							<!-- start: About Member -->
							<?php $args=array("cat"=>5,"post_per_page"=>4); 
										$query=new WP_Query($args);
										while($query->have_posts()):$query->the_post();
										?>
							<div class="span4">
								<div class="avatar view-team">
									<!-- <img src="<?php get_template_directory(); ?>/img/team_member.jpg" alt="team member"> -->
									<?php the_post_thumbnail(); ?>
									<div class="mask">
										<h2>About Me</h2>
										
										<p>
										<?php the_content(); ?>
										</p>
										<a href="" class="info">My Personal Page</a>
									</div>
								</div>
								<div class="clear"></div>
								<div class="team-name"><?php the_title(); ?><span> / Co-Founder, General Manager</span></div>
								<div class="social_profiles">
									<ul class="social-bookmarks">
										<li class="facebook"><a href="">facebook</a></li>
										<li class="flickr"><a href="">flickr</a></li>
										<li class="googleplus"><a href="#">googleplus</a></li>
										<li class="linkedin"><a href="#">linkedin</a></li>
										<li class="twitter"><a href="#">twitter</a></li>
										<li class="pinterest"><a href="#">pinterest</a></li>
									</ul>
								</div>	
							</div>
						<?php endwhile; ?>
							<!-- end: About Member -->

							<!-- start: About Member -->

							<!-- end: About Member -->	
						
						</div>
						<!-- end: Row -->

					</div>
					<!-- end: Team -->
					
					
				</div>	
				
				<div class="span4">
					
					<!-- start: Sidebar -->
<?php get_sidebar(); ?>

					</div>
					<!-- end: Sidebar -->
					
				</div>
				
			</div>
			<!--end: Row-->
			</div>

		<!--end: Container-->
				
		<!--start: Container -->
    	<div class="container">	
      		
			<hr>
		
			<!-- start Clients List -->	
			<div class="clients-carousel">
		
				<ul class="slides clients">
					<?php if ( !function_exists('dynamic_sidebar') ||
 !dynamic_sidebar('logoarea') ) : ?>
<?php endif; ?>	
				</ul>
		
			</div>
			<!-- end Clients List -->
		
			<hr>
				<?php  endwhile; endif; ?>
			<?php
get_footer(); ?>
