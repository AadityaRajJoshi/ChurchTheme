<!-- /*
Template Name: Special Layout
*/ -->


<?php 
get_header();?>
<div class="container-wrap" >
	<aside id="fh5co-hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url(.assets/images/sermon-3.jpg);">
		   		<div class="overlay"></div>
		   		<div class="container-fluid">
		   			<div class="row">
			   			<div class="col-md-6 col-md-offset-3 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1><?php echo get_theme_mod('sermon-customizer-title'); ?></h1>
									<h2><?php echo get_theme_mod('sermon-customizer-text'); ?></h2>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>

	<div id="fh5co-sermon">
		<div class="row animate-box">
			<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
				<h2><?php the_title() ?></h2>
				<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
			</div>
		</div>
		<div class="row">
			<?php 
				
				$sermonPage = new WP_query('cat=10');
				if($sermonPage->have_posts()):
					while ($sermonPage->have_posts()): $sermonPage->the_post();?>
			<div class="col-md-4 text-center animate-box">
				<div class="sermon-entry">
					<div class="sermon" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
						<div class="play">
							<a class="popup-vimeo" href="https://vimeo.com/channels/staffpicks/93951774"><i class="icon-play3"></i></a>
						</div>
					</div>
					<h3><?php the_title() ?></h3>
					<span><?php the_content() ?></span>
				</div>
			</div>
				<?php endwhile;	
				endif;	
			 ?>
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
						<span class="fh5co-counter-label"><?php echo get_theme_mod('church-customizer-word-1'); ?></span>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 text-center">
						<span class="fh5co-counter js-counter" data-from="0" data-to="214" data-speed="5000" data-refresh-interval="50"></span>
						<span class="fh5co-counter-label"><?php echo get_theme_mod('church-customizer-word-2'); ?></span>
					</div>
					<div class="clearfix visible-sm-block visible-xs-block"></div>
					<div class="col-md-3 col-sm-6 col-xs-6 text-center">
						<span class="fh5co-counter js-counter" data-from="0" data-to="433" data-speed="5000" data-refresh-interval="50"></span>
						<span class="fh5co-counter-label"><?php echo get_theme_mod('church-customizer-word-3'); ?></span>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 text-center">
						<span class="fh5co-counter js-counter" data-from="0" data-to="512" data-speed="5000" data-refresh-interval="50"></span>
						<span class="fh5co-counter-label"><?php echo get_theme_mod('church-customizer-word-4'); ?></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer();