<?php
/*
 Template Name: OUR SERVICES
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
										<div class="col-md-8 col-md-push-2 gap-bottom-2">
											<h1 class="temp__header--center temp__header">
												<?php the_title(); ?>
											</h1>
											<div class="divider--left visible-xs-block"></div>
											<p>
												<?php 
													global $more; 
													$more = 1;
													the_content();
												?>
											</p>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-md-6 bg-white js-full-height">
										<div class="gap-bottom-2 col-xs-12">
											<h2 class="temp__ptitle">
												<?php the_field('title1'); ?>
											</h2>
											<?php the_field('caption1'); ?>
											<?php check_more_url('url1'); ?>
										</div>
									</div>
									<div class="col-xs-12 col-md-6 bg-pink js-full-height">
										<div class="gap-bottom-2 col-xs-12 ">
											<h2 class="temp__ptitle">
												<?php the_field('title2'); ?>
											</h2>
											<?php the_field('caption2'); ?>
											<?php check_more_url('url2'); ?>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-md-6 bg-blue js-full-height">
										<div class="gap-bottom-2 col-xs-12 ">
											<h2 class="temp__ptitle">
												<?php the_field('title3'); ?>
											</h2>
											<?php the_field('caption3'); ?>
											<?php check_more_url('url3'); ?>
										</div>
									</div>
									<div class="col-xs-12 col-md-6 bg-white js-full-height">
										<div class="gap-bottom-2 col-xs-12 ">
											<h2 class="temp__ptitle">
												<?php the_field('title4'); ?>
											</h2>
											<?php the_field('caption4'); ?>
											<?php check_more_url('url4'); ?>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-md-6 bg-pink js-full-height">
										<div class="gap-bottom-2 col-xs-12 ">
											<h2 class="temp__ptitle">
												<?php the_field('title5'); ?>
											</h2>
											<?php the_field('caption5'); ?>
											<?php check_more_url('url5'); ?>
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
