<?php get_header(); ?>
<div id="wrapper">
			<div class="content">
<div class="breadcrumbs">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>
				<?php if(have_posts()) : the_post();?>
					<div class="single-post">
						<div class="post-header">
							<img class="author-avatar" src="<?php bloginfo('template_directory'); ?>/images/author-avatar.jpg">
							<div class="post-header-container">
								<span class="post-title"><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></span>
								<div class="post-info">
									<span class="post-author"><?php the_author_posts_link(); ?></span>
									<span class="post-date"><?php the_date(); ?></span>
									<span class="post-category"><a href="<?php $category = get_the_category(); $category_name = $category[0]->cat_name; $category_id = get_cat_id($category_name); $category_link = get_category_link($category_id); echo esc_url($category_link);?>"><?php echo $category_name;?></a></span>							
								</div><!-- end .post-info -->
							</div><!-- end .post-header-container -->
						</div><!-- end .post-header -->
						<div class="single-content">
							<?php the_content(); ?>
							
						</div>
						<!-- show relationship post -->
							<?php
							// Find connected pages
							$connected = new WP_Query( array(
							  'connected_type' => 'create_series',
							  'connected_items' => get_queried_object(),
							  'nopaging' => true,
							'order' => 'ASC'
							) );

							// Display connected pages
							if ( $connected->have_posts() ) :
							?>
							<h3 class="series-box">Bài Viết Cùng Series:</h3>
							<ul class="series-item">
							<?php while ( $connected->have_posts() ) : $connected->the_post(); ?>
								<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
							<?php endwhile; ?>
							</ul>

							<?php 
							// Prevent weirdness
							wp_reset_postdata();

							endif;
							?>
							<!-- end show relationship post -->
						<div class="single-tag"><?php the_tags('<ul><li>','</li>, <li>','</li></ul>'); ?></div>
					</div><!-- end .post -->
				<?php endif; ?>
				<div class="comment"><?php comments_template(); ?></div>
			</div><!-- end .content -->
			<?php get_sidebar(); ?>
		</div><!-- end .wrapper -->
<?php get_footer(); ?>