
<?php/*
* Template Name: index
*/
?>

<body>
	<!--start: Wrapper -->
	<div id="wrapper">
		
		<!--start: Container -->
		<div class="container">
		
		<?php get_header(); ?>

			<!--end: Header-->
			
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
				
		<!--start: Container -->
    	<div class="container">
			<!-- start: Flexslider -->
			<div class="slider">

				<div class="flexslider">

					<ul class="slides">
						

<?php
// $custom_fields = get_post_custom(224);
 $args = array(
    'post_type' => 'slider',
    'posts_per_page' => -1
    // Several more arguments could go here. Last one without a comma.
);

// Query the posts:
$obituary_query = new WP_Query($args);

//print_r($obituary_query);
// Loop through the obituaries:
while ($obituary_query->have_posts()) : $obituary_query->the_post();
?>
<li>
<?php the_post_thumbnail(); ?>
  <div class="slide-caption n hidden-phone">
  	<h3><?php the_title();?></h3>
<p><?php  the_content();	?></p>

			  		
		 
</div>
</li>
 <?php
endwhile;
?>
</ul>
				
			</div>
		</div>
      		<div class="hero-unit">
        		<p>
					This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.
				</p>
        		<p><a class="btn btn-success btn-large">Learn more &raquo;</a></p>
      		</div>
			<!-- end: Hero Unit -->

      		<!-- start: Row -->
      		<div class="row">
	<?php $args=array("cat"=>4,"post_per_page"=>3); 
					$query=new WP_Query($args); 
					while($query->have_posts()):$query->the_post();
					?>
        		<div class="span4">
          			<div class="icons-box">
						<i class="ico-ok circle big"></i>
						<div class="title"><h3><?php the_title(); ?></h3></div>
						<p>
						<?php the_excerpt(); ?>	
						</p>
						<div class="clear"></div>
					</div>
        		</div>
<?php endwhile; ?>
        		
      		</div>
			<!-- end: Row -->
      		
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
			
			<!-- start: Row -->
			<div class="row">
				
				<!-- start: Icon Boxes -->
				<div class="icons-box-vert-container">
					<?php $args=array("cat"=>4,"post_per_page"=>4); 
					$query=new WP_Query($args);
					while($query->have_posts()):$query->the_post();
					?>
					<!-- start: Icon Box Start -->
					<div class="span6">
						<div class="icons-box-vert">
							<i class="ico-ok ico-color circle-color big"></i>
							<div class="icons-box-vert-info">
								<h3><?php the_title(); ?></h3>
								<p><?php the_content(); ?></p>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					<!-- end: Icon Box-->
<?php endwhile; ?>
					
				</div>
				<!-- end: Icon Boxes -->
				<div class="clear"></div>
			</div>
			<!-- end: Row -->
			
			<hr>
		</div>
		<!--end: Container-->
				

<?php get_footer(); ?>
	<!-- end: Copyright -->

<!-- start: Java Script -->
<!-- Placed at the end of the document so the pages load faster -->

<!-- end: Java Script -->

</body>
</html>
