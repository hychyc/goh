<?php
/*
 Template Name: MAKE A DIFFERENCE
*/
?>

<?php get_header(); ?>

			<div id="content" class="js-content">
				<div id="inner-content" class="wrap">

						<main id="main" class="" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
									<?php
										// get other pages title
										// $pageID = 9;
										// $page = get_post($pageID);
										// echo $page->post_title;
									?>
								
								<div class="row">
									<div class="col-xs-12 gap-top-1 gap-bottom-1">
										<div class="col-md-10 col-md-push-1 gap-bottom-2">
											<h1 class="temp__header--center temp__header">
												<?php the_title(); ?>
											</h1>
											<div class="divider"></div>
											
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-md-4">
										<h2 class="temp__ptitle--serif">
											Give
										</h2>
										<div class="gap-bottom-2 temp__box--color">
											<div class="temp__box__caption bg-dark-purple">
												<p>
													Lorem quis erat ac, praesent ligula odio pellentesque. Donec malesuada duis a sed neque rerum, nulla ut amet, et imperdiet quam sapien. Donec malesuada duis a sed neque rerum, nulla ut amet,
													et imperdiet quam sapien. Lorem quis erat ac, praesent ligula odio pellentesque.
												</p>
											</div>
											<a href="#" class="btn__more">
												<span>give now</span>	
												<span><img class="btn__more__arrow" src="<?php echo get_template_directory_uri(); ?>/library/images/linkArrow@2x.png"></span>
											</a>
										</div>
									</div>
									<div class="col-xs-12 col-md-4">
										<h2 class="temp__ptitle--serif">
											donate
										</h2>
										<div class="gap-bottom-2 temp__box--color">
											<div class="temp__box__caption bg-red-purple">
												<p>
													Lorem quis erat ac, praesent ligula odio pellentesque. Donec malesuada duis a sed neque rerum, nulla ut amet, et imperdiet quam sapien. Donec malesuada duis a sed neque rerum, nulla ut amet,
													et imperdiet quam sapien. Lorem quis erat ac, praesent ligula odio pellentesque.
												</p>
											</div>
											<a href="#" class="btn__more">
												<span>donate now</span>	
												<span><img class="btn__more__arrow" src="<?php echo get_template_directory_uri(); ?>/library/images/linkArrow@2x.png"></span>
											</a>
										</div>
									</div>
									<div class="col-xs-12 col-md-4">
										<h2 class="temp__ptitle--serif">
											Volunteer
										</h2>
										<div class="gap-bottom-2 temp__box--color">
											<div class="temp__box__caption bg-regular-purple">
												<p>
													Lorem quis erat ac, praesent ligula odio pellentesque. Donec malesuada duis a sed neque rerum, nulla ut amet, et imperdiet quam sapien. Donec malesuada duis a sed neque rerum, nulla ut amet,
													et imperdiet quam sapien. Lorem quis erat ac, praesent ligula odio pellentesque.
												</p>
											</div>
											<a href="#" class="btn__more">
												<span>join now</span>	
												<span><img class="btn__more__arrow" src="<?php echo get_template_directory_uri(); ?>/library/images/linkArrow@2x.png"></span>
											</a>
										</div>
									</div>
								</div>
								
								<?php comments_template(); ?>

							</article>
							<!--show if something wrong in the line-->
							<?php endwhile; else : ?>

									<article id="post-not-found" class="hentry cf">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the page-custom.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</main>

				</div>

			</div>


<?php get_footer(); ?>
