<?php /*
*Template Name: contact
*/
?>	
<div id="wrapper">
		
		<!--start: Container -->
		<div class="container">
<?php 
get_header();?>

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

		<!-- start: Container -->	
		<div class="container">

			<!-- start: Map -->
			<div>

						<!-- starts: Google Maps -->
				<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
				<div id="googlemaps" class="google-map google-map-full" style="height:350px; margin-bottom: 20px;"></div>
				<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAPi6JJhTnF7uH71ISTlSeONogIa1b8x2c&sensor=true" type="text/javascript"></script>

				<script src="http://localhost/wordpressdemo/wp-content/themes/Free/js/jquery.gmap.min.js"></script>
				<script type="text/javascript">
				$('#googlemaps').gMap({
					maptype: 'ROADMAP',
					scrollwheel: false,
					zoom: 13,
					markers: [
						{
							address: 'dombivli, Mumbai', // Your Adress Here
							html: '',
							popup: false,
						}

					],

				});
				</script>
				<!-- end: Google Maps -->
			</div>

			<!-- end: Map -->	

		</div>
		<!-- end: Container  -->	
				<!-- start: Container -->	
		<div class="container">

			<!-- start: Contact Form -->
			<div class="span4">
				<div class="title"><h4>Contact Form</h4></div>
				<div id="errmsg"></div>

				<!-- start: Contact Form -->
				<div id="contact-form">
					
					<!-- <form method="post" action="http://localhost/wordpressdemo/wp-content/themes/Free/contactsave.php"> -->
						<form method="post">
						<fieldset>
							<div class="clearfix">
								<label for="name"><span>Name:</span></label>
								<div class="input">
									<input tabindex="1" size="18" id="uname" name="uname" type="text" value="">
								</div>
							</div>

							<div class="clearfix">
								<label for="email"><span>Email:</span></label>
								<div class="input">
									<input tabindex="2" size="25" id="email" name="email" type="text" value="" class="input-xlarge">
								</div>
							</div>

							<div class="clearfix">
								<label for="message"><span>Message:</span></label>
								<div class="input">
									<textarea tabindex="3" class="input-xlarge" id="message" name="body" rows="7"></textarea>
								</div>
							</div>

							<div class="actions">
								<input name="submit" tabindex="3" id="submit" type="button" value="Send message">
							</div>
						</fieldset>
					
					</form>
					
				</div>
				<!-- end: Contact Form -->

			</div>
			<!-- end: Contact Form -->

			<!-- start: Social Sites -->
			<div class="span7">
				<div class="title"><h4>Follow US!</h4></div>
				<ul class="social-bookmarks">
					<li class="aim"><a href="#">aim</a></li>
					<li class="apple"><a href="#">apple</a></li>
					<li class="behance"><a href="#">behance</a></li>
					<li class="blogger"><a href="#">blogger</a></li>
					<li class="cargo"><a href="#">cargo</a></li>
					<li class="delicious"><a href="#">delicious</a></li>
					<li class="deviantart"><a href="#">deviantart</a></li>
					<li class="digg"><a href="#">digg</a></li>
					<li class="dopplr"><a href="#">dopplr</a></li>
					<li class="dribbble"><a href="#">dribbble</a></li>
					<li class="ember"><a href="#">ember</a></li>
					<li class="evernote"><a href="#">evernote</a></li>
					<li class="facebook"><a href="https://www.facebook.com/brankic1979themes">facebook</a></li>
					<li class="flickr"><a href="http://www.flickr.com/photos/brankic1979/">flickr</a></li>
					<li class="forrst"><a href="#">forrst</a></li>
					<li class="github"><a href="#">github</a></li>
					<li class="google"><a href="#">google</a></li>
					<li class="googleplus"><a href="#">googleplus</a></li>
					<li class="gowalla"><a href="#">gowalla</a></li>
					<li class="grooveshark"><a href="#">grooveshark</a></li>
					<li class="html5"><a href="#">html5</a></li>
					<li class="icloud"><a href="#">icloud</a></li>
					<li class="lastfm"><a href="#">lastfm</a></li>
					<li class="linkedin"><a href="#">linkedin</a></li>
					<li class="metacafe"><a href="#">metacafe</a></li>
					<li class="mixx"><a href="#">mixx</a></li>
					<li class="myspace"><a href="#">myspace</a></li>
					<li class="netvibes"><a href="#">netvibes</a></li>
					<li class="newsvine"><a href="#">newsvine</a></li>
					<li class="orkut"><a href="#">orkut</a></li>
					<li class="paypal"><a href="#">paypal</a></li>
					<li class="picasa"><a href="#">picasa</a></li>
					<li class="pinterest"><a href="#">pinterest</a></li>
					<li class="plurk"><a href="#">plurk</a></li>
					<li class="posterous"><a href="#">posterous</a></li>
					<li class="reddit"><a href="#">reddit</a></li>
					<li class="rss"><a href="#">rss</a></li>
					<li class="skype"><a href="#">skype</a></li>
					<li class="stumbleupon"><a href="#">stumbleupon</a></li>
					<li class="technorati"><a href="#">technorati</a></li>
					<li class="tumblr"><a href="#">tumblr</a></li>
					<li class="twitter"><a href="#">twitter</a></li>
					<li class="vimeo"><a href="#">vimeo</a></li>
					<li class="wordpress"><a href="#">wordpress</a></li>
					<li class="yahoo"><a href="#">yahoo</a></li>
					<li class="yelp"><a href="#">yelp</a></li>
					<li class="youtube"><a href="#">youtube</a></li>
					<li class="zerply"><a href="#">zerply</a></li>
					<li class="zootool"><a href="#">zootool</a></li>
				</ul>
			</div>
			<!-- end: Social Sites -->
<?php echo get_template_directory_uri() .'/contactsave.php'; ?>
		</div>
		<?php
get_footer();
?>
		</div>
		</div>
		<script>
		$(document).ready(function(){
			$("#submit").click(function(){
			var data=$("form").serialize();

			$.ajax({
				type:"post",
				data:data,
				url:"<?php echo get_template_directory_uri() .'/contactsave.php'; ?>",
				success:function(data){

					if(data==true){
							$("#errmsg").css("color","green");
						$("#errmsg").html("contact added successfully");
					
					}
					else
					{
							$("#errmsg").css("color","red");
						$("#errmsg").html("provide proper information");

					}
				}
			});
			})
		})
		</script>
