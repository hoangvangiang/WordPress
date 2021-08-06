<?php get_header(); ?>
<div id="wrapper">
			<div class="content">
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
									<span class="post-comment"><a href="#">0 Bình luận</a></span>							
								</div><!-- end .post-info -->
							</div><!-- end .post-header-container -->
						</div><!-- end .post-header -->
						<div class="single-content">
							<?php the_content(); ?>
						</div>
					</div><!-- end .post -->
				<?php endif; ?>
			</div><!-- end .content -->
			<?php get_sidebar(); ?>
		</div><!-- end .wrapper -->
<?php get_footer(); ?>