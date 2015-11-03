<?php
/*
 Template Name: ABOUT US
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
								
								<div class="row gap-top-1 row-fix-hight">
									<div class="col-xs-12 col-md-3 bg-dark-blue">
										 <p></p>
									</div>
									<div class="col-xs-12 col-md-9 bg-solid-white">
										<div class="col-md-10 col-md-push-1">
											<h1 class="temp__header">
												<?php the_title(); ?>
											</h1>
											<div class="divider--left"></div>
												<?php 
													global $more; 
													$more = 1;
													the_content();
												?>
										</div>
									</div>
								</div>
								<div class="row bg-blue row-fix-hight">
									<div class="col-xs-12 col-md-8 bg-pink">
										<div class="col-md-6">
											<h2 class="temp__ptitle">BOARD OF DIRECTORS</h2>
											<?php the_field('board_of_directors'); ?>
										</div>
										<div class="col-md-6">
											<h2 class="temp__ptitle">ADVISORY COMMITTEE</h2>
											<?php the_field('advistory_committee'); ?>
										</div>

										<div class="col-md-12">
											<h2 class="temp__ptitle">
												EXECUTIVE DIRECTOR
											</h2>
											<P class="temp__list--italic">
												<?php the_field('executive_director'); ?>
											</P>
										</div>
										<div class="col-md-12">
											<div class="divider--left"></div>
											<h2 class="temp__ptitle">EMPLOYMENT OPPORTUNITIES</h2>
											<?php the_field('employment_opportunities'); ?>
											<a class="btn__more" href="#">
												more
												<img class="btn__more__arrow" src="<?php echo get_template_directory_uri(); ?>/library/images/linkArrow@2x.png" alt="" />
											</a>
										</div>
									</div>
									<div class="col-xs-12 col-md-4">
										<div class="col-md-12">
											<h2 class="temp__ptitle">
												PUBLICATIONS 
											</h2>
											<ul class="temp__list">
												<li><a href="#">Newsletters</a></li>
												<li><a href="#">Brochures</a></li>
												<li><a href="#">Annual Reports</a></li>
											</ul>
											<div class="divider--left"></div>
										</div>
										<div class="col-md-12">
											<h2 class="temp__ptitle">
												News
											</h2>
											<div class="temp__postlist">
												<div class="temp__postlist__date">JUN 01, 2015</div>
												<div class="temp__postlist__title">Lorem ipsum dolor si</div>
												<p>
													Lorem quis erat ac, praesent ligula odio pellentesque. Donec malesuada duis a sed neque rerum, nulla ut amet, et imperdiet quam sapien. Donec malesuada duis a sed neque rerum...
												</p>
												<div class="divider--left"></div>
											</div>
											<div class="temp__postlist">
												<div class="temp__postlist__date">JUN 01, 2015</div>
												<div class="temp__postlist__title">Lorem ipsum dolor si</div>
												<p>
													Lorem quis erat ac, praesent ligula odio pellentesque. Donec malesuada duis a sed neque rerum, nulla ut amet, et imperdiet quam sapien. Donec malesuada duis a sed neque rerum...
												</p>
												<div class="divider--left"></div>
											</div>
											<a href="#" class="btn__more">
												<span>more</span>	
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
