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
								
								<div class="row gap-top-1 bg-dark-blue">
									<div class="col-xs-12 col-md-push-3 col-md-9 bg-solid-white">
										<div class="col-md-10 col-md-push-1">
											<h1 class="temp-title">
												<?php the_title(); ?>
											</h1>
											<div class="divider--left"></div>
											<p>
												Lorem quis erat ac, praesent ligula odio pellentesque. Donec malesuada duis a sed neque rerum, nulla ut amet, et imperdiet quam sapien. Congue in, nisl euismod, eius laoreet in pellentesque, mollis ut scelerisque fermentum est, lobortis per est adipiscing. Ligula rutrum magnis convallis augue aliquam, eros pharetra suspendisse elementum etiam. Congue in, nisl euismod, eius.
											</p>
											<p>
												Lorem quis erat ac, praesent ligula odio pellentesque. Donec malesuada duis a sed neque rerum, nulla ut amet, et imperdiet quam sapien. Donec malesuada duis a sed neque rerum, nulla ut amet, et imperdiet quam sapien. Lorem quis erat ac, praesent ligula odio pellentesque. Donec malesuada duis a sed neque rerum, nulla ut amet, et imperdiet quam sapien. Donec malesuada duis a sed .
											</p>
											<h2 class="temp-subtitle">
												MISSION & BELIEFS
											</h2>
											<p class="temp-last">
												Lorem quis erat ac, praesent ligula odio pellentesque. Donec malesuada duis a sed neque rerum, nulla ut amet, et imperdiet quam sapien. Donec malesuada duis a sed neque rerum, nulla ut amet, et imperdiet quam sapien. Lorem quis erat ac, praesent ligula odio pellentesque. Donec malesuada duis a sed neque rerum, nulla ut amet, et imperdiet quam sapien. Donec malesuada duis a sed .
											</p>
										</div>
									</div>
								</div>
								<div class="row bg-blue">
									<div class="col-xs-12 col-md-8 bg-pink">
										<div class="col-md-6">
											<h2 class="temp-subtitle">
												BOARD OF DIRECTORS
											</h2>
											<ul>
												<li>Ms. Lee-Lee Chang</li>
												<li>Ms. Lee-Lee Chang</li>
												<li>Ms. Lee-Lee Chang</li>
												<li>Ms. Lee-Lee Chang</li>
												<li>Ms. Lee-Lee Chang</li>
												<li>Ms. Lee-Lee Chang</li>
												<li>Ms. Lee-Lee Chang</li>
											</ul>
										</div>
										<div class="col-md-6">
											<h2 class="temp-subtitle">
												ADVISORY COMMITTEE
											</h2>
											<ul>
												<li>Ms. Lee-Lee Chang</li>
												<li>Ms. Lee-Lee Chang</li>
												<li>Ms. Lee-Lee Chang</li>
												<li>Ms. Lee-Lee Chang</li>
												<li>Ms. Lee-Lee Chang</li>
												<li>Ms. Lee-Lee Chang</li>
												<li>Ms. Lee-Lee Chang</li>
											</ul>
										</div>
										<div class="col-md-12">
											<h2 class="temp-subtitle">
												EXECUTIVE DIRECTOR
											</h2>
											<P>
												Yuanfen (Kristen) Liu Chi
											</P>
										</div>
										<div class="divider--left"></div>
										<div class="col-md-12">
											<h2 class="temp-subtitle">
												EMPLOYMENT  OPPORTUNITIES
											</h2>
											<P>
												Lorem quis erat ac, praesent ligula odio pellentesque. Donec malesuada duis a sed neque rerum, nulla ut amet, et imperdiet quam sapien. Congue in, nisl euismod, eius laoreet in pellentesque, mollis ut scelerisque fermentum est, lobortis per est adipiscing. Ligula rutrum magnis convallis augue aliquam, eros pharetra suspendisse elementum etiam.
											</P>
										</div>
									</div>
									<div class="col-xs-12 col-md-4">
										<div class="col-md-12">
											<h2 class="temp-subtitle">
												PUBLICATIONS 
											</h2>
											<ul>
												<li><a href="#">Newsletters</a></li>
												<li><a href="#">Brochures</a></li>
												<li><a href="#">Annual Reports</a></li>
											</ul>
											<div class="divider--left"></div>
										</div>
										<div class="col-md-12">
											<h2 class="temp-subtitle">
												News
											</h2>
											<h3 class="temp-date">JUN 01, 2015</h3>
											<p>
												Lorem quis erat ac, praesent ligula odio pellentesque. Donec malesuada duis a sed neque rerum, nulla ut amet, et imperdiet quam sapien. Donec malesuada duis a sed neque rerum, nulla ut amet, et imperdiet quam sapien. Lorem quis erat ac...
											</p>
											<div class="divider--left"></div>
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
