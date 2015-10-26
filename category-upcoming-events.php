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
							<div class="row">
								<div class="col-xs-12 col-md-12">
									<div class="event-box">
										<div class="event-box__top">
											<?php the_post_thumbnail( 'bones-thumb-600', array( 'class' => 'event-box__top__img' ) ); ?>
											<img class="event-box__top__badge" src="<?php echo get_template_directory_uri(); ?>/library/images/eventBadge@2x.png">
											<h2 class="event-box__top__date">jun 13 2015</h2>
										</div>
										<a class="event-box__bottom" href="#">
											<h1 class="event-box__bottom__title">summer</h1>
											<p class="event-box__bottom__caption">
											Lorem quis erat ac, praesent ligula odio pellentesque.</p>
											<img class="event-box__bottom__arrow" src="<?php echo get_template_directory_uri(); ?>/library/images/linkArrow@2x.png">
										</a>
									</div>
								</div>
							</div>
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							
								<div class="col-xs-12 col-md-4">
									<div class="event-box">
										<div class="event-box__top">
											<?php the_post_thumbnail( 'large', array( 'class' => 'event-box__top__img' ) ); ?>
											<img class="event-box__top__badge" src="<?php echo get_template_directory_uri(); ?>/library/images/eventBadge@2x.png">
											<h2 >
											<?php the_date('M d Y', '<h2 class="event-box__top__date">', '</h2>'); ?>
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

							<?php endwhile; ?>

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

					<?php get_sidebar(); ?>

				</div>

			</div>

<?php get_footer(); ?>
