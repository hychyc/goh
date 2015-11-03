<?php
/*
 Template Name: WHO WE HELP
*/
?>

<?php get_header(); ?>

			<div id="content" class="js-content">
				<div class="background__top"></div>
				<div class="background__bottom"></div>
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
									<div class="col-xs-12 bg-solid-white gap-top-1 gap-bottom-1">
										<div class="col-md-8 col-md-push-2 gap-bottom-2">
											<h1 class="temp__header--center temp__header">
												<?php the_title(); ?>
											</h1>
											<div class="divider--left visible-xs-block"></div>
											<p>
												Lorem quis erat ac, praesent ligula odio pellentesque. Donec malesuada duis a sed neque rerum, nulla ut amet, et imperdiet quam sapien. Congue in, nisl euismod, eius laoreet in pellentesque, mollis ut scelerisque fermentum est, lobortis per est adipiscing. Ligula rutrum magnis convallis augue aliquam, eros pharetra suspendisse elementum etiam. Congue in, nisl euismod, eius.
											</p>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-md-4">
										<div class="temp__box">
											<h2 class="temp__ptitle">
												DOMESTIC VIOLENCE
											</h2>
											<p>
												Lorem quis erat ac, praesent ligula odio pellentesque. Donec malesuada duis a sed neque rerum, nulla ut amet, et imperdiet quam sapien. Donec malesuada duis a sed neque rerum, nulla ut amet,
												et imperdiet quam sapien. Lorem quis erat ac, praesent ligula odio pellentesque. Donec malesuada duis a sed neque rerum, nulla ut amet, et imperdiet quam sapien. 
											</p>
										</div>
									</div>
									<div class="col-xs-12 col-md-4 ">
										<div class="temp__box">
											<h2 class="temp__ptitle">
												CHILD ABUSE & NEGLECT
											</h2>
											<p>
												Lorem quis erat ac, praesent ligula odio pellentesque. Donec malesuada duis a sed neque rerum, nulla ut amet, et imperdiet quam sapien. Donec malesuada duis a sed neque rerum, nulla ut amet,
												et imperdiet quam sapien. Lorem quis erat ac, praesent ligula odio pellentesque. Donec malesuada duis a sed neque rerum, nulla ut amet, et imperdiet quam sapien. 
											</p>
										</div>
									</div>
									<div class="col-xs-12  col-md-4">
										<div class="temp__box">
											<h2 class="temp__ptitle">
												RAPE & SEXUAL ASSAULT
											</h2>
											<p>
												Lorem quis erat ac, praesent ligula odio pellentesque. Donec malesuada duis a sed neque rerum, nulla ut amet, et imperdiet quam sapien. Donec malesuada duis a sed neque rerum, nulla ut amet,
												et imperdiet quam sapien. Lorem quis erat ac, praesent ligula odio pellentesque. Donec malesuada duis a sed neque rerum, nulla ut amet, et imperdiet quam sapien. 
											</p>
										</div>
									</div>
								</div>
								<div  class="row"> 
									<div class="col-xs-12 col-md-4 col-md-push-2">
										<div class="temp__box">
											<h2 class="temp__ptitle">
												HUMAN TRAFFICKING
											</h2>
											<p>
												Lorem quis erat ac, praesent ligula odio pellentesque. Donec malesuada duis a sed neque rerum, nulla ut amet, et imperdiet quam sapien. Donec malesuada duis a sed neque rerum, nulla ut amet,
												et imperdiet quam sapien. Lorem quis erat ac, praesent ligula odio pellentesque. Donec malesuada duis a sed neque rerum, nulla ut amet, et imperdiet quam sapien. 
											</p>
										</div>
									</div>
									<div class="col-xs-12 col-md-4 col-md-push-2">
										<div class="temp__box">
											<h2 class="temp__ptitle">
												DATING VIOLENCE
											</h2>
											<p>
												Lorem quis erat ac, praesent ligula odio pellentesque. Donec malesuada duis a sed neque rerum, nulla ut amet, et imperdiet quam sapien. Donec malesuada duis a sed neque rerum, nulla ut amet,
												et imperdiet quam sapien. Lorem quis erat ac, praesent ligula odio pellentesque. Donec malesuada duis a sed neque rerum, nulla ut amet, et imperdiet quam sapien. 
											</p>
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
