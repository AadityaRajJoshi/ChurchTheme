<?php 

get_header();?>

<div class="container-wrap">
		<aside id="fh5co-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/img_bg_2.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 text-center slider-text">
				   				<div class="slider-text-inner">
				   					<h1>About Us</h1>
										<h2>Free html5 templates Made by <a href="http://freehtml5.co/" target="_blank">freehtml5.co</a></h2>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>

		<div id="fh5co-about">
			<div class="row">
				<?php
					$versePosts =new WP_Query('cat=12');
					if( $versePosts->have_posts() ):
						while( $versePosts->have_posts() ): $versePosts->the_post();?>
							<div class="col-md-4">
								<h3><?php the_title(); ?></h3>
								<blockquote class="dailyVerse">
									<p>&ldquo;<?php the_content(); ?>  </span>
								</blockquote>
							</div>
						<?php endwhile;	
					endif;	

				 ?>
				
				<div class="col-md-4">
					<?php
						$aboutPost = new WP_Query('cat=13');
						if( $aboutPost->have_posts() ):
							while ( $aboutPost->have_posts()): $aboutPost->the_post();?>
								<h3><?php the_title(); ?></h3>
								<p><?php the_content(); ?></p>
							<?php endwhile;	
						endif;	

					 ?>
					
				</div>
				<div class="col-md-4">
					<h3>Our Ministries</h3>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
					<ul class="ministries-list">
						<li><i class="icon-check"></i>Dignissimos asperiores vitae velit</li>
						<li><i class="icon-check"></i>Odit ab aliquam dolor eius.</li>
						<li><i class="icon-check"></i>Asperiores vitae velit veniam totam</li>
						<li><i class="icon-check"></i>Asccusamus alias autem provident</li>
					</ul>
				</div>
			</div>
		</div>
		
		<div id="fh5co-counter" class="fh5co-counters fh5co-light-grey">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center animate-box">
					<p>We have a fun facts far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2">
					<div class="row">
						<div class="col-md-3 col-sm-6 col-xs-6 text-center">
							<span class="fh5co-counter js-counter" data-from="0" data-to="9452" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">Members</span>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 text-center">
							<span class="fh5co-counter js-counter" data-from="0" data-to="214" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">Ministries</span>
						</div>
						<div class="clearfix visible-sm-block visible-xs-block"></div>
						<div class="col-md-3 col-sm-6 col-xs-6 text-center">
							<span class="fh5co-counter js-counter" data-from="0" data-to="433" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">Classes</span>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 text-center">
							<span class="fh5co-counter js-counter" data-from="0" data-to="512" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">Activities</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	


<?php get_footer();