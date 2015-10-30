<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap js-content">
						<main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
							<div class="row">
								<div class="col-xs-12 gap-top-1 gap-bottom-1">
									<div class="col-md-8 col-md-push-2 gap-bottom-2">
										<h1 class="temp__header--center temp__header">
											UPCOMING EVENTS
										</h1>
										<div class="divider"></div>
									</div>
								</div>
							</div>
							
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
								<?php if( $wp_query->current_post == 0 && !is_paged() ) : // get the first post?> 
											<div class="row">
												<div class="col-xs-12 col-md-12">
													<?php 
														$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'bones-thumb-full' );
														$url = $thumb['0']; 
													?>
													<div class="full-box" style="background-image:url('<?php echo $url?>')">
														<img class="full-box__badge hidden-xs" src="<?php echo get_template_directory_uri(); ?>/library/images/eventBadge@2x.png">
														<div class="full-box__copy">
															<h2 class="full-box__date"><?php echo get_field('event_start_date')?></h2>
															<h1 class="full-box__title"><?php the_title(); ?></h1>
														</div>
													</div>
												</div>
												<div class="col-xs-12 col-md-12">
													<div class="event-content">
														<?php 
															global $more; 
															$more = 1;
															the_content();
														?>
													</div>
												</div>
											</div>
										<?php else:?>
											<div class="col-xs-12 col-md-4">
												<div class="event-box">
													<div class="event-box__top">
														<?php the_post_thumbnail( 'large', array( 'class' => 'event-box__top__img' ) ); ?>
														<img class="event-box__top__badge" src="<?php echo get_template_directory_uri(); ?>/library/images/eventBadge@2x.png">
														<h2 >
														<?php echo '<h2 class="event-box__top__date">'.get_field('event_start_date').'</h2>';?>
														</h2>
													</div>
													<a class="event-box__bottom" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
														<h1 class="event-box__bottom__title"><?php the_title(); ?></h1>
														<p class="event-box__bottom__caption">
															<?php echo substr(get_the_excerpt(), 0,50); ?>
														</p>
														<img class="event-box__bottom__arrow" src="<?php echo get_template_directory_uri(); ?>/library/images/linkArrow@2x.png">
													</a>
												</div>
											</div>
									<?php endif ?>
							<?php endwhile; ?>
									<div class="row">
										<?php
										    //echo get_category_link('past-events');
											$category_id = get_cat_ID( 'past events' );
											$category_link = get_category_link( $category_id );
										?>
											<div class="col-xs-12 text-center">
												<a class="purple-bg btn--purple" href="<?php echo $category_link?>">view archive</a>
											</div>
									</div>
									<div class="divider--full"></div>
									<div class="row">
										<div class="col-xs-12 text-center">
											<img class="top-arrow js-top" src="<?php echo get_template_directory_uri(); ?>/library/images/goTopBtn@2x.png">
										</div>
									</div>

									<?php bones_page_navi(); ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry cf">
										<header class="article-header">
											<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the archive.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</main>

					<?php// get_sidebar(); ?>

				</div>

			</div>

<?php get_footer(); ?>
