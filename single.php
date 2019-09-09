<?php
 get_header();
	if (have_posts()) :
		while (have_posts()) : the_post();?>
		<div class="container-wrap">	
			<div id="fh5co-about">
				
				<div class="row">
					<h3 style="margin-left: 380px;"><?php the_title(); ?></h3>
					
					<?php if( has_post_thumbnail() ): ?>
					<div class="col-md-12">
						<img height="200" width="900" src="<?php echo the_post_thumbnail_url('full');?>">
					</div>
				<?php endif; ?>
					
					<div class="col-md-6" style="margin-top: 25px;">
						<p><?php the_content(); ?></p>
					</div>
					<div class="col-md-6 sidebar" style="padding-left: 200px;" >
						<?php dynamic_sidebar('siderbar1'); ?>	
					</div>
				</div>
			</div>
		</div>	
		<?php  endwhile;
		else : 
			echo "<p> no content found </p>";	
	endif;
 get_footer();		
?>