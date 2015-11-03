<?php
/*
 Template Name: RESOURCES
*/
?>

<?php get_header(); ?>

			<div id="content" class="js-content">
				<div id="inner-content" class="wrap">

						<main id="main" class="" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
								<div class="row">
									<div class="col-xs-12 gap-top-1 gap-bottom-1">
										<div class="col-md-10 col-md-push-1">
											<h1 class="temp__header--center temp__header">
												<?php the_title(); ?>
											</h1>
											<div class="divider"></div>
											
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-md-12 text-center">
										<h2 class="temp__ptitle--nocap">
											Use these guidelines to determine if you or someone you know is a victim of domestic violence.
										</h2>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-md-4">
										<h2 class="temp__post-excerpt">
											<?php the_field('list1_title'); ?>
										</h2>
										<?php the_field('list1_content'); ?>
									</div>
									<div class="col-xs-12 col-md-4">
										<h2 class="temp__post-excerpt">
											<?php the_field('list2_title'); ?>
										</h2>
										<?php the_field('list2_content'); ?>
									</div>
									<div class="col-xs-12 col-md-4">
										<h2 class="temp__post-excerpt">
											<?php the_field('list3_title'); ?>
										</h2>
										<?php the_field('list3_content'); ?>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-md-12">
										<h2 class="temp__ptitle--bottom-line">
											Other Asian Social Services Agencies in New York City
										</h2>
										<div class="temp__table">
											<div class="table-responsive">
											 	<?php the_field('table1'); ?>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-md-12">
										<h2 class="temp__ptitle--bottom-line">
											Legal Organizations
										</h2>
										<div class="temp__table">
											<div class="table-responsive">
												<?php the_field('table2'); ?>
											</div>
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
