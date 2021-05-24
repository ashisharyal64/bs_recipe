<?php if( have_rows('ingredients') ): ?>
	<h3>Ingredients:</h3>
	<ul class="list-group">
		<?php while( have_rows('ingredients') ): the_row(); ?>
			<li class="list-group-item"><?php the_sub_field('name'); ?> :
				<?php the_sub_field('amount'); ?>
			</li>
		<?php endwhile; ?>
	</ul>
<?php endif; ?>
