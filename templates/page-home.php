<?php
/*
 Template Name: HOME
*/
?>

<?php get_header(); ?>

			<div id="content" class="js-content">
				<div class="background hidden-xs">
					<div class="background__left"></div>
					<div class="background__right"></div>
					<img class="backgronud__diamond" style="top:130px" src="<?php echo get_template_directory_uri(); ?>/library/images/diamond@2x.png">
					<img class="backgronud__diamond" style="top:260px" src="<?php echo get_template_directory_uri(); ?>/library/images/diamond@2x.png">
					<img class="backgronud__diamond" style="top:390px" src="<?php echo get_template_directory_uri(); ?>/library/images/diamond@2x.png">
				</div>
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
								<div class="row slider-container">
									<?php
										$images = get_field('slides');
									 ?>
									<div class="slider">
										<?php foreach( $images as $image ): ?>
											<img src="<?php echo $image['url']; ?>">
										<?php endforeach; ?>
									</div>
								</div>
								<div class="text-center visible-xs-block">
									<a href="#" class="donate purple-border">
										<span>
											<img class="donate__icon" src="<?php echo get_template_directory_uri(); ?>/library/images/icon_paypal@2x.png">
										</span>
										donate
									</a>
								</div>
								<div class="row block">
									<div class="col-xs-12 col-md-6 col-md-push-6">
										<div class="text-box text-box--goh">
											<h1 class="text-box__title">
												<?php the_title(); ?>
											</h1>
											<h2 class="text-box__subtitle">
												紐約勵馨
											</h2>
											<div class="text-box__caption">
												<?php the_content(); ?>
											</div>
										</div>
									</div>
									<div class="col-xs-12 text-center visible-xs-block">
										<a href=""><img class="icon-fb" src="<?php echo get_template_directory_uri(); ?>/library/images/FB@2x.png"></a>
									</div>
									<div class="col-xs-12  col-md-5 col-md-pull-6">
										<div class="media-box">
											<img class="media-box__img" src="<?php echo get_template_directory_uri(); ?>/library/images/ph01.png">
											<a href="<?php echo get_page_link(9); ?>" class="media-box__title">
												about us
											</a>
										</div>
									</div>
									<div class="col-xs-12 col-md-5 col-md-push-7">
										<div class="media-box push-top">
											<img class="media-box__img" src="<?php echo get_template_directory_uri(); ?>/library/images/ph02.png">
											<a href="<?php echo get_page_link(15); ?>" class="media-box__title">
												our service
											</a>
										</div>
									</div>
									<div class="col-xs-12 col-md-5 col-md-pull-5">
										<div class="media-box">
											<img class="media-box__img" src="<?php echo get_template_directory_uri(); ?>/library/images/ph03.png">
											<a href="<?php echo get_page_link(21); ?>" class="media-box__title">
												make a difference
											</a>
										</div>
									</div>
									<div class="col-xs-12 col-md-5 col-md-push-7">
										<div class="text-box push-top">
											<div class="text-box__caption">
												<?php the_field('caption1'); ?>
											</div>
										</div>
									</div>
									<div class="col-md-12 gap-top"></div>

									<div id="latest-events">
										<?php
											global $post;
											$myposts = get_posts('numberposts=3&offset=1&category=4');
											foreach($myposts as $post) :
										?>

										<div class="col-xs-12 col-md-4">
											<div class = "event-box">

												<div class="event-box__top">
													<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
														<?php the_post_thumbnail( 'large', array( 'class' => 'event-box__top__img' ) ); ?>
													</a>
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
										<?php endforeach; ?>
										<?php wp_reset_query();?> 
									</div>
									
									<div class="col-xs-12 col-md-6 gap-top">
										<a class="donate--large purple-border ">
											<span>
												<img class="donate__icon" src="<?php echo get_template_directory_uri(); ?>/library/images/icon_paypal@2x.png">
											</span>
											donate now to help
										</a>
									</div>
									
									<div class="col-xs-12 col-md-6 gap-top">
										<?php the_field('caption2'); ?> 
									</div>
									<div class="col-xs-12 col-md-12">
										<div class="img-box text-center">
											<div class="divider"></div>
											<h1 class="img-box__title">events</h1>
											<img class="img-box__img" src="<?php echo get_template_directory_uri(); ?>/library/images/ph01.png"><img class="img-box__img" src="<?php echo get_template_directory_uri(); ?>/library/images/ph02.png"><img class="img-box__img" src="<?php echo get_template_directory_uri(); ?>/library/images/ph03.png"><img class="img-box__img" src="<?php echo get_template_directory_uri(); ?>/library/images/ph01.png">
										</div>
									</div>
									<div class="col-xs-12 col-md-6 col-md-push-3">
										<a class="hotline--large"  href="tel:18779908595">
											hotline 1877-990-8595
										</a>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12 text-center">
										<img class="top-arrow js-top" src="<?php echo get_template_directory_uri(); ?>/library/images/goTopBtn@2x.png">
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