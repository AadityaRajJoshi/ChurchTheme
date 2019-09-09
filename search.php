<?php 
get_header();?>

<div class="container-wrap" >
	<div id="fh5co-news">
		<div class="row animate-box">
			<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
				<h2>Search results for: <?php the_search_query(); ?></h2>
				<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
			</div>
		</div>
		<div class="row">
			<?php
				if( have_posts() ):
					while ( have_posts() ): the_post();?>
						<div class="col-md-3 animate-box">
							<div class="news">
								<?php if(has_post_thumbnail() ): ?>
								<a href="#" class="img-holder"><img class="img-responsive" src="<?php echo get_the_post_thumbnail_url() ?>" alt="Free HTML5 Website Template by freehtml5.co"></a>
							<?php endif; ?>
								<div class="desc">
									<span class="date" > <?php the_time('F jS, Y '); ?> | by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> | Posted in 

										<?php 
										$categories = get_the_category();
										$separator = ", ";
										$output = '';
										if($categories){
											foreach ($categories as $category) {
												$output .= '<a href="'. get_category_link($category->term_id) . '">'. $category->cat_name . '</a>'  . $separator; 
											}
											echo trim( $output, $separator );
										}
									?>
									</span>
									<h3><a href="#"><?php the_title() ?></a></h3>
									<p><?php the_excerpt(); ?></p>
									<a href="<?php the_permalink() ?>">Read More <i class="icon-arrow-right3"></i></a>
								</div>
							</div>
						</div>			 
					<?php endwhile;	
				 endif;	
			 ?>
		</div>
		<?php echo paginate_links(); ?>
	</div>
</div>

<?php get_footer();