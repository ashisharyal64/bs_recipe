<?php if( have_rows('servings') ): ?>
<h3>Servings:</h3>
	<ul class="list-group">
		<?php while( have_rows('servings') ): the_row(); ?>
			<li class="list-group-item"><?php the_sub_field('title'); ?> :
				<?php the_sub_field('quantity'); ?>
			</li>
		<?php endwhile; ?>
	</ul>
<?php endif; ?>
