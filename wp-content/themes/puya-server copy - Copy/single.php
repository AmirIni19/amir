<?php get_header(); ?>



<div class="col-lg-9 pull-left">
	<div class="row">
		<div class="col-xs-12">
			<div class="archive">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<div class="archivebox">
							<a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('archive'); ?></a>
							<a href="<?php the_permalink(); ?>">
								<h3><?php the_title(); ?></h3>
							</a>

							<?php the_excerpt(); ?>
							<?php the_content(); ?>

						</div>
					<?php endwhile;
				else : ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>












<?php
// get_sidebar();
get_footer();
?>