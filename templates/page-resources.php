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
									<?php
										// get other pages title
										// $pageID = 9;
										// $page = get_post($pageID);
										// echo $page->post_title;
									?>
								
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
											Has your partner ever:
										</h2>
										<ul class="temp__list--dot">
											<li>Punched you</li>
											<li>Slapped you </li>
											<li>Kicked you</li>
											<li>Bitten you</li>
											<li>Pulled your hair</li>
											<li>Sexually assaulted you</li>
											<li>Kidnapped you or held you hostage?</li>
										</ul>
									</div>
									<div class="col-xs-12 col-md-4">
										<h2 class="temp__post-excerpt">
											Does your partner ever:
										</h2>
										<ul class="temp__list--dot"> 	
											<li>Publicly shame you</li>
											<li>Try to isolate you from others</li>
											<li>Try to dominate you</li>
											<li>Stalk or follow you</li>
											<li>Threaten to kill or harm you, or someone you love</li>
											<li>Intimidate you with weapons</li>
											<li>Take your money or deny you financial resources</li>
											<li>Threaten to take away your children</li>
											<li>Deny or minimize abuse</li>
											<li>Accuse you of being unfaithful</li>
											<li>Threaten suicide to try to force you to do something?</li>
										</ul>
									</div>
									<div class="col-xs-12 col-md-4">
										<h2 class="temp__post-excerpt">
											Profile of an Abuser — Five Key Elements:
										</h2>
										<ul class="temp__list--dot">
											<li>Entitlement thinking </li>
											<li>Avoidance of feelings of helplessness, fear and powerlessness  </li>
											<li>Denial about the impact his behavior has on himself and others </li>
											<li>Benefits from institutional and cultural forms of inequality </li>
											<li>Potentially aggravating factors: substance abuse, mental illness</li>
										</ul>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-md-12">
										<h2 class="temp__ptitle--bottom-line">
											Other Asian Social Services Agencies in New York City
										</h2>
										<div class="temp__table">
											<div class="table-responsive">
											 	<table class="table">
											 		<thead>
											 			<tr>
											 				<th>ORGANIZATION</th>
											 				<th>PHONE</th>
											 				<th>WEBSITE</th>
											 				<th>SERVICE AREA(S)</th>
											 			</tr>
											 		</thead>
											 		<tbody>
											 			<tr>
											 				<td>Asian & Pacific Islander Coalition on HIV/AIDS, Inc. (APICHA)</td>
											 				<td>(212) 334-7940</td>
											 				<td><a href="#">HIV/Aids</a></td>
											 				<td>(212) 334-7940</td>
											 			</tr>
											 			<tr>
											 				<td>Asian Americans For Equality, Inc.</td>
											 				<td>(212) 979-8381</td>
											 				<td><a href="#">Housing, Various</a></td>
											 				<td>(212) 979-8381</td>
											 			</tr>
											 			<tr>
											 				<td>Asian LifeNet</td>
											 				<td>(877) 990-8585</td>
											 				<td><a href="#">Mental Health</a></td>
											 				<td>(877) 990-8585</td>
											 			</tr>
											 			<tr>
											 				<td>Brooklyn Chinese-American Association</td>
											 				<td>(718) 438-0008</td>
											 				<td><a href="#">Various</a></td>
											 				<td>(718) 438-0008</td>
											 			</tr>
											 			<tr>
											 				<td>Charles B. Wang Community Health Center</td>
											 				<td>(212) 379-6986</td>
											 				<td><a href="#">Health</a></td>
											 				<td>(212) 379-6986</td>
											 			</tr>
											 		</tbody>
											 	</table>
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
											 	<table class="table">
											 		<thead>
											 			<tr>
											 				<th>ORGANIZATION</th>
											 				<th>PHONE</th>
											 				<th>WEBSITE</th>
											 			</tr>
											 		</thead>
											 		<tbody>
											 			<tr>
											 				<td>Asian & Pacific Islander Coalition on HIV/AIDS, Inc. (APICHA)</td>
											 				<td>(212) 334-7940</td>
											 				<td><a href="#">HIV/Aids</a></td>
											 			</tr>
											 			<tr>
											 				<td>Asian Americans For Equality, Inc.</td>
											 				<td>(212) 979-8381</td>
											 				<td><a href="#">Housing, Various</a></td>
											 			</tr>
											 			<tr>
											 				<td>Asian LifeNet</td>
											 				<td>(877) 990-8585</td>
											 				<td><a href="#">Mental Health</a></td>
											 			</tr>
											 			<tr>
											 				<td>Brooklyn Chinese-American Association</td>
											 				<td>(718) 438-0008</td>
											 				<td><a href="#">Various</a></td>
											 			</tr>
											 			<tr>
											 				<td>Charles B. Wang Community Health Center</td>
											 				<td>(212) 379-6986</td>
											 				<td><a href="#">Health</a></td>
											 			</tr>
											 		</tbody>
											 	</table>
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
