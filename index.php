<?php
	/**
	 * The main template file
	 *
	 * This is the most generic template file in a WordPress theme
	 * and one of the two required files for a theme (the other being style.css).
	 * It is used to display a page when nothing more specific matches a query.
	 * E.g., it puts together the home page when no home.php file exists.
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package Bootscore
	 */

	get_header();
	?>
<div id="content" class="site-content container py-5 mt-4">
    <div id="primary" class="content-area">

        <main id="main" class="site-main">

            <!-- Header -->
            <div class="bootstore-header h-25 mb-5 py-4  text-center" style="background-image: url('<?php
			header_image();
            ?>')">
                <h1 class="display-1 fw-bold"><?php bloginfo('name'); ?></h1>
                <p class="lead fw-bold"><?php bloginfo('description'); ?></p>
            </div>


            <!-- recipe List -->
            <div class="row container  m-0 p-0">

                    <!-- Grid Layout -->
					<?php
					$recipes = new WP_QUERY( array( 'post_type' => 'recipe' ) );
//					echo var_dump($recipes->posts());
					?>
                    <?php if ($recipes->have_posts() ) : ?>
                    <?php while ($recipes->have_posts() ) : $recipes->the_post(); ?>
                    <?php if(is_sticky()) continue; //ignore sticy posts?>
                    <div class="col-sm-6  col-md-3  card horizontal">
                        <div class="row">
                            <!-- Featured Image-->
                            <?php if (has_post_thumbnail() )
							echo '<div class="card-img-left-md p-0 ">' . get_the_post_thumbnail(null, 'medium') . '</div>';
							?>
                            <div class="col">
                                <div class="card-body">
                                    <div class="mb-2">
                                        <?php bootscore_category_badge(); ?>
                                    </div>
                                    <!-- Title -->
                                    <h3 class="blog-post-title">

                                            <?php the_title(); ?>

                                    </h3>
                                    <!-- Meta -->
                                    <?php if ( 'post' === get_post_type() ) : ?>
                                    <small class="text-secondary mb-2">
                                        <?php
									bootscore_date();
									bootscore_author();
									bootscore_comments();
									bootscore_edit();
									?>
                                    </small>
                                    <?php endif; ?>
                                    <!-- Excerpt & Read more -->
                                    <div class="card-text mt-auto">
                                        <a class="read-more" href="<?php the_permalink(); ?>"><?php _e('Read more »', 'bootscore'); ?></a>
                                    </div>
                                    <!-- Tags -->
                                    <?php bootscore_tags(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>

                    <!-- Pagination -->
                    <div>
                        <?php bootscore_pagination(); ?>
                    </div>


                <!-- col -->
                <?php get_sidebar(); ?>
            </div>
			<!-- Sticky Post -->
			<?php if ( is_home() && !is_paged()) : ?>

				<div class="row">
					<div class="col">
						<?php
						$args = array(
							'posts_per_page' => 5,
						);
						$the_query = new WP_Query( $args );
						if ( $the_query->have_posts() ) :
							while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
								<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<div class="card horizontal mb-4">
										<div class="row">
											<!-- Featured Image-->
											<?php if (has_post_thumbnail() )
												echo '<div class="card-img-left col-md-6 col-lg-4">' . get_the_post_thumbnail(null, 'medium') . '</div>';
											?>
											<div class="col">
												<div class="card-body">
													<div class="row mb-2">
														<div class="col-10">
															<?php bootscore_category_badge(); ?>
														</div>
														<div class="col-2 text-end">
															<!-- Featured -->
															<div class="badge bg-danger"><span class=""><i class="fas fa-star"></i></i></span></div>
														</div>
													</div>
													<!-- Title -->
													<h2 class="blog-post-title">
														<a href="<?php the_permalink(); ?>">
															<?php the_title(); ?>
														</a>
													</h2>
													<!-- Meta -->
													<?php if ( 'post' === get_post_type() ) : ?>
														<small class="text-secondary mb-2">
															<?php
															bootscore_date();
															bootscore_author();
															bootscore_comments();
															bootscore_edit();
															?>
														</small>
													<?php endif; ?>
													<!-- Excerpt & Read more -->
													<div class="card-text mt-auto">
														<?php the_excerpt(); ?> <a class="read-more" href="<?php the_permalink(); ?>"><?php _e('Read more »', 'bootscore'); ?></a>
													</div>
													<!-- Tags -->
													<?php bootscore_tags(); ?>
												</div>
											</div>
										</div>

								</article>
							<?php
							endwhile;
						endif;
						wp_reset_postdata();
						?>
					</div>
					<!-- col -->
				</div>
				<!-- row -->
			<?php endif; ?>
            <!-- row -->
        </main><!-- #main -->

    </div><!-- #primary -->
</div><!-- #content -->
<?php
get_footer();
