<?php
/*
 Template Name: ABOUT US
*/
?>

<?php get_header(); ?>

			<div id="content" lass="js-content">

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
											<p class="text-box__caption">
												Help those women being abused with hotline, safety planning, crisis intervention, emergency shelter, legal referrals and advocacy. Provide assistance of order of protection, public welfare and crime victims compensation.
											</p>
										</div>
									</div>
									<div class="col-xs-12 text-center visible-xs-block">
										<a href=""><img class="icon-fb" src="<?php echo get_template_directory_uri(); ?>/library/images/FB@2x.png"></a>
									</div>
									<div class="col-xs-12  col-md-5 col-md-pull-6">
										<div class="media-box">
											<img class="media-box__img" src="<?php echo get_template_directory_uri(); ?>/library/images/ph01.png">
											<a href="#topage" class="media-box__title">
												about us
											</a>
										</div>
									</div>
									<div class="col-xs-12 col-md-5 col-md-push-7">
										<div class="media-box push-top">
											<img class="media-box__img" src="<?php echo get_template_directory_uri(); ?>/library/images/ph02.png">
											<a href="#topage" class="media-box__title">
												our service
											</a>
										</div>
									</div>
									<div class="col-xs-12 col-md-5 col-md-pull-5">
										<div class="media-box">
											<img class="media-box__img" src="<?php echo get_template_directory_uri(); ?>/library/images/ph03.png">
											<a href="#topage" class="media-box__title">
												make a difference
											</a>
										</div>
									</div>
									<div class="col-xs-12 col-md-5 col-md-push-7">
										<div class="text-box push-top">
											<p class="text-box__caption">
												Help those women being abused with hotline, safety planning, crisis intervention, emergency shelter, legal referrals and advocacy. Provide assistance of order of protection, public welfare and crime victims compensation. crisis intervention.
											</p>
										</div>
									</div>
									<div class="col-md-12 gap-top"></div>
									<div class="col-xs-12 col-md-4">
										<div class="event-box">
											<div class="event-box__top">
												<img class="event-box__top__img" src="<?php echo get_template_directory_uri(); ?>/library/images/ph04.png">
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

									<div class="col-xs-12 col-md-4">
										<div class="event-box">
											<div class="event-box__top">
												<img class="event-box__top__img" src="<?php echo get_template_directory_uri(); ?>/library/images/ph05.png">
												<img class="event-box__top__badge" src="<?php echo get_template_directory_uri(); ?>/library/images/newletterBadge@2x.png">
												<h2 class="event-box__top__date">May 01 2015</h2>
											</div>
											<a class="event-box__bottom" href="#">
												<h1 class="event-box__bottom__title">MAY NEWSLETTER</h1>
												<p class="event-box__bottom__caption">
												Lorem quis erat ac, praesent ligula odio pellentesque.</p>
												<img class="event-box__bottom__arrow" src="<?php echo get_template_directory_uri(); ?>/library/images/linkArrow@2x.png">
											</a>
										</div>
									</div>
									<div class="col-xs-12 col-md-4">
										<div class="event-box">
											<div class="event-box__top">
												<img class="event-box__top__img" src="<?php echo get_template_directory_uri(); ?>/library/images/ph05.png">
											</div>
											<a class="event-box__bottom" href="#">
												<h1 class="event-box__bottom__title">APRIL FAIR</h1>
												<p class="event-box__bottom__caption">
												Lorem quis erat ac, praesent ligula odio pellentesque.</p>
												<img class="event-box__bottom__arrow" src="<?php echo get_template_directory_uri(); ?>/library/images/linkArrow@2x.png">
											</a>
										</div>
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
										<p>
											Help those women being abused with hotline, safety planning, crisis intervention, emergency shelter, legal referrals and advocacy. Provide assistance of order of protection, public welfare and crime victims compensation. crisis intervention.
										</p>
									</div>
									<div class="col-xs-12 col-md-12">
										<div class="img-box">
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
