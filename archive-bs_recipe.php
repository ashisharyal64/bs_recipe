<?php
/**
 * The template for displaying archive pages for Recipes
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootscore
 */

get_header();
?>

	<div id="content" class="site-content container py-5 mt-5">
		<div id="primary" class="content-area">

			<!-- Hook to add something nice -->
			<?php bs_after_primary(); ?>

			<div class="row">
				<div class="col">

					<main id="main" class="site-main">

						<!-- Title & Description -->
						<header class="page-header mb-4">
							<h1><?php post_type_archive_title(''); ?></h1>
						</header>

						<!-- Grid Layout -->
						<?php if (have_posts() ) : ?>
							<?php while (have_posts() ) : the_post(); ?>
								<?php get_template_part('template-part/recipe-parts/content-archive-bs_recipe'); ?>
							<?php endwhile; ?>
						<?php endif; ?>

						<!-- Pagination -->
						<div>
							<?php bootscore_pagination(); ?>
						</div>

					</main><!-- #main -->

				</div><!-- col -->

				<?php get_sidebar(); ?>
			</div><!-- row -->

		</div><!-- #primary -->
	</div><!-- #content -->

<?php
get_footer();

