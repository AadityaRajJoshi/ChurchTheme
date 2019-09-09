

<?php

get_header();?>


	<div class="container-wrap" >
		<aside id="fh5co-hero">
			<div class="flexslider">
				<ul class="slides"><?php 
					$args = array(
					    'post_type' => 'slider',
					    );
					$query = new WP_Query( $args );
					if( $query->have_posts() ):
						while ( $query->have_posts() ) : $query->the_post(); ?>
			   	<li style="background-image: url( <?php echo get_the_post_thumbnail_url() ?> );">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 text-center">
				   				<div class="slider-text">
					   				<div class="slider-text-inner">
					   					<h1><?php the_title(); ?></h1>
											<h2><?php the_content(); ?></h2>
											<p><a class="btn btn-primary btn-demo popup-vimeo" href="https://vimeo.com/channels/staffpicks/93951774"> <i class="icon-play4"></i> Watch Video</a> <a class="btn btn-primary btn-learn">Join us here! <i class="icon-arrow-right3"></i></a></p>
					   				</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>

			   		 <?php endwhile;
			   	else:
			   		echo"no posts";	 	
			   	endif;	?>
			  	</ul>
		  	</div>
		</aside>	


	<div id="fh5co-intro">
			<div class="row animate-box">
				<div class="col-md-12 col-md-offset-0 text-center">
					<h2><?php echo get_theme_mod('church-customizer-title') ?></h2>
					<span><?php echo get_theme_mod('church-customizer-para') ?></span>
				</div>
			</div>
	</div>
	<hr>

	<div id="fh5co-counter" class="fh5co-counters">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 text-center animate-box">
				<p><?php echo get_theme_mod('church-customizer-text') ?></p>
				</div>
		</div>
		<div class="row animate-box">
			<div class="col-md-8 col-md-offset-2">
				<div class="row">
					<div class="col-md-3 col-sm-6 col-xs-6 text-center">
						<span class="fh5co-counter js-counter" data-from="0" data-to="9452" data-speed="5000" data-refresh-interval="50"></span>
						<span class="fh5co-counter-label"><?php echo get_theme_mod('church-customizer-word-1') ?>.</span>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 text-center">
						<span class="fh5co-counter js-counter" data-from="0" data-to="214" data-speed="5000" data-refresh-interval="50"></span>
						<span class="fh5co-counter-label"><?php echo get_theme_mod('church-customizer-word-2') ?>.</span>
					</div>
					<div class="clearfix visible-sm-block visible-xs-block"></div>
					<div class="col-md-3 col-sm-6 col-xs-6 text-center">
						<span class="fh5co-counter js-counter" data-from="0" data-to="433" data-speed="5000" data-refresh-interval="50"></span>
						<span class="fh5co-counter-label"><?php echo get_theme_mod('church-customizer-word-3') ?>.</span>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 text-center">
						<span class="fh5co-counter js-counter" data-from="0" data-to="512" data-speed="5000" data-refresh-interval="50"></span>
						<span class="fh5co-counter-label"><?php echo get_theme_mod('church-customizer-word-4') ?>.</span>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-services" class="fh5co-light-grey">
		<div class="row animate-box">
			<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
				<h2>Services</h2>
				<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
			</div>
		</div>
		<div class="row">
			<?php
				$ourCurrentPage = get_query_var('paged');

				$servicePost = new WP_Query(array(
					'category_name' => 'services',
					'posts_per_page' => 3,
					'paged' => $ourCurrentPage
				));
				if( $servicePost->have_posts() ):
					while ( $servicePost->have_posts() ) : $servicePost->the_post();?>
			<div class="col-md-4 animate-box">

				<div class="services">
					
					<a href="<?php the_permalink(); ?>" class="img-holder"><img class="img-responsive" src="<?php echo get_the_post_thumbnail_url() ?>" alt="Free HTML5 Website Template by freehtml5.co"></a>
					<div class="desc">
						<h3><a href="#"><?php the_title(); ?></a></h3>
						<p><?php the_excerpt(); ?></p>
						<a href="<?php the_permalink(); ?>">Read More <i class="icon-arrow-right3"></i></a>
					</div>
							
				</div>
			</div>
					<?php endwhile; 
				endif;	
			 ?>
		</div>	
		<?php echo paginate_links( array(
			'total' => $servicePost->max_num_pages 
		) ); ?>
	</div>

	<div id="fh5co-sermon">
		<div class="row animate-box">
			<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
				<h2>Our Sermons</h2>
				<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
			</div>
		</div>
		<div class="row">
			<?php
				$sermonPost = new WP_Query('cat=8');
				if( $sermonPost->have_posts() ):
					while ( $sermonPost->have_posts() ): $sermonPost->the_post();?>
			<div class="col-md-4 text-center animate-box">
				<div class="sermon-entry">
					<div class="sermon"  style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>);">
						<div class="play">
							<a class="popup-vimeo" href="https://vimeo.com/channels/staffpicks/93951774"><i class="icon-play3"></i></a>
						</div>
					</div>
					<h3><?php the_title(); ?></h3>
					<span><?php the_content(); ?></span>
				</div>
			</div>
			<?php endwhile; 
				endif;	
			?>
		</div>
	</div>

	<div id="fh5co-bible-verse">
		<div class="overlay"></div>
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="row animate-box">
					<div class="owl-carousel owl-carousel-fullwidth">
						<?php
							$quotePost = new WP_Query('cat=9');
							if( $quotePost-> have_posts() ):
								while ( $quotePost->have_posts()): $quotePost->the_post();?>
									<div class="item">
										<div class="bible-verse-slide active text-center">
											<blockquote>
												<p><?php the_content(); ?></p>
												<span>John 3:16</span>
											</blockquote>
										</div>
									</div>
								<?php endwhile; 
							endif;
						 ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-events">
		<div class="row animate-box">
			<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
				<h2>Our Events</h2>
				<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
			</div>
		</div>
		<div class="row">
			<?php
				$eventPosts = new WP_Query('cat=10');
				if( $eventPosts->have_posts() ):
					while ( $eventPosts->have_posts() ): $eventPosts->the_post();?>
						<div class="col-md-4 animate-box">
							<div class="events-entry">
								<span class="date"><?php the_time('F jS, Y '); ?></span>
								<h3><a href="#"><?php the_title(); ?></a></h3>
								<p><?php the_excerpt(); ?></p>
								<a href="<?php the_permalink() ?>">Read More <i class="icon-arrow-right3"></i></a>
							</div>
						</div>
					<?php endwhile; 
				endif;	
			 ?>
		</div>
	</div>

	<div id="fh5co-news" class="fh5co-light-grey">
		<div class="row animate-box">
			<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
				<h2>Our News</h2>
				<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
			</div>
		</div>
		<div class="row">
			<?php
				$newsPosts = new WP_Query('cat=11');
				if( $newsPosts->have_posts() ):
					while ( $newsPosts->have_posts()): $newsPosts->the_post();?>
						<div class="col-md-3 animate-box">
							<div class="news">
								<a href="#" class="img-holder"><img class="img-responsive" src="<?php echo get_the_post_thumbnail_url() ?>" alt="Free HTML5 Website Template by freehtml5.co"></a>
								<div class="desc">
									<span class="date"><?php the_time('F jS, Y '); ?></span>
									<h3><a href="#"><?php the_title(); ?></a></h3>
									<p><?php the_excerpt(); ?></p>
									<a href="<?php the_permalink() ?>">Read More <i class="icon-arrow-right3"></i></a>
								</div>
							</div>
						</div>
					<?php endwhile;	
				endif;	
			 ?>
		</div>
	</div>
</div>	


<?php get_footer();
?>