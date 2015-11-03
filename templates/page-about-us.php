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
											<h2 class="temp__ptitle">
												Our Mission:
											</h2>
											<p>
												Through the love of God, Garden of Hope is dedicated to serving, caring and rebuilding the lives of women and children whom have been exposed to domestic violence, sexual assault and human trafficking.
											</p>
											<h2 class="temp__ptitle">
												Our Beliefs:
											</h2>
											<p>
												Women and men are equally created in the image of God; equally enjoy god’s given value and dignity. Everyone has rights to be treated with respect, to live a life free from fear, to say no to unjust treatment, and to refuse to assume responsibility of abuser’s wrong doing.
											</p>
											<p>
												Most organizations advocating for a certain type of “victims” or “survivors” are usually characterized by powerful testimonies from outspoken individuals, who have gone through the experience, as well as their friends and families. But it’s hard for survivors of domestic violence, sexual assault and human trafficking and their families to be as forthright. Shame, alienation, judgment, criticism, stigma, unreasonable burden—as frontline social workers, we are deeply empathetic to their pain. Protecting them from secondary trauma is our basic responsibility. In the love of Jesus Christ, to “speak up for those who cannot speak for themselves, for the rights of all who are destitute” (Proverb 31:8) and to help them heal and rebuild physically, emotionally, and spiritually are our mission. May Garden of Hope NY become a pottery delighted in the eyes of God to provide them with a garden of hope, while inspiring more people to become gardeners of love to address the injustice in society!
											</p>
											<p>
												From rescuing and counseling battered women and their children to servicing serious dysfunctional families, we achieve the following goals through hotline, counseling, legal aid, emergency shelter, support group, employment training, parenting education, and summer camp for exposed children:
											</p>

											<p>
												From rescuing and counseling battered women and their children to servicing serious dysfunctional families, we achieve the following goals through hotline, counseling, legal aid, emergency shelter, support group, employment training, parenting education, and summer camp for exposed children:
											</p>

											<p>
												<ul>
													<li>• Assisting battered women in escaping abusive environment and strengthen their ability to protect themselves and self-sustainability.</li>
													<li>• Assisting parents, who are entrapped in situations relating to child abuse due to language and cultural factors, in positive parenting.</li>
													<li>• Assist children and youths, who experience domestic violence or sexual assault, in restoring their resilience.</li>
												</ul>
											</p>
											<p>
												Every story of heartbreak is different, but the path to recovery is always lengthy. In the process of accompanying about a thousand women and children, we spread the love of God to them. We help them understand the previous relationship we have with the Lord as His children, restore the glory as He intended when creating us, and experience the abundance in Christ.
											</p>

											<p class="temp-last">
												In addition to rescuing services, Garden of Hope NY is also engaged in promoting social justice, advocating for harmony and nonviolence in families, and its preventive work. Through mass media, community activities, parade, workshops and outreach in local churches and organizations, preventing domestic violence, human trafficking, dating violence, senior abuse and child abuse require our collaboration. Knowledge produces power, with action come change. Thanks all the supporters and volunteers for walking with us, letting love soar, and sailing toward hope!
											</p>
										</div>
									</div>
								</div>
								<div class="row bg-blue row-fix-hight">
									<div class="col-xs-12 col-md-8 bg-pink">
										<div class="col-md-6">
											<h2 class="temp__ptitle">
												BOARD OF DIRECTORS
											</h2>
											<ul class="temp__list--italic">
												<li>Ms. Lee-Lee Chang</li>
												<li>Ms. Lily Lee</li>
												<li>Ms. Alison Fung</li>
												<li>Ms. Emily Lin</li>
												<li>Ms. Hui-Jung Chi </li>
												<li>Dr. Yu-Chia Chen</li>
												<li>Dr. Ay-Woan Pan</li>
											</ul>
										</div>
										<div class="col-md-6">
											<h2 class="temp__ptitle">
												ADVISORY COMMITTEE
											</h2>
											<ul class="temp__list--italic">
												<li>Ms. Su Chang </li>
												<li>Ms. Heather Chao </li>
												<li>Ms. Katy Chiang </li>
												<li>Mr. Jason Fu </li>
												<li>Ms. Ellen Lii </li>
												<li>Dr. Hung-En Sung </li>
												<li>Ms. Nora Chang Wang </li>
												<li>Ms. Veronica Wong</li>
											</ul>
										</div>

										<div class="col-md-12">
											<h2 class="temp__ptitle">
												EXECUTIVE DIRECTOR
											</h2>
											<P class="temp__list--italic">
												Yuanfen (Kristen) Liu Chi
											</P>
										</div>
										<div class="col-md-12">
											<div class="divider--left"></div>
											<h2 class="temp__ptitle">
												EMPLOYMENT  OPPORTUNITIES
											</h2>
											<P>
												Lorem quis erat ac, praesent ligula odio pellentesque. Donec malesuada duis a sed neque rerum, nulla ut amet, et imperdiet quam sapien. Congue in, nisl euismod, eius laoreet in pellentesque, mollis ut scelerisque fermentum est, lobortis per est adipiscing. Ligula rutrum magnis convallis augue aliquam, eros pharetra suspendisse elementum etiam.
											</P>
											<a href="#" class="btn__more">
												<span>more</span>	
												<span><img class="btn__more__arrow" src="<?php echo get_template_directory_uri(); ?>/library/images/linkArrow@2x.png"></span>
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
