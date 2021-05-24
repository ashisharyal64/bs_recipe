<?php if( have_rows('instructions') ): ?>
	<h3>How To:</h3>
		<ol>
		<?php while( have_rows('instructions') ): the_row();

		?>
			<li >
				<?php the_sub_field('steps');

				?>
			</li>
		<?php endwhile; ?>
		</ol>

<?php endif; ?>
