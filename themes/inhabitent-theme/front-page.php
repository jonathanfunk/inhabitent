<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
      <section class="hero">
				<img src="<?php echo get_template_directory_uri() . '/images/inhabitent-logo-full.svg'; ?>" alt="Inhabitent Logo" />
      </section>
			<section class="adventure container">
				<h2>Latest Adventures</h2>
				<ul class="clearfix">
					<li>
						<div class="adventure-img"><img src="<?php echo get_template_directory_uri() . '/images/canoe-girl.jpg'; ?>" alt="Canoe Girl" />
						</div>
						<div class="headline">
							<h3>Getting Back to Nature in a Canoe</h3>
							<p><a href="#">Read More</a></p>
						</div>
					</li>
					<li>
						<div class="adventure-img"><img src="<?php echo get_template_directory_uri() . '/images/beach-bonfire.jpg'; ?>" alt="Beach Bonfire" />
						</div>
						<div class="headline">
							<h3>A Night with Friends at the beach</h3>
							<p><a href="#">Read More</a></p>
						</div>
					</li>
					<li>
						<div class="adventure-img"><img src="<?php echo get_template_directory_uri() . '/images/mountain-hikers.jpg'; ?>" alt="Mountain Hikers" />
						</div>
						<div class="headline">
							<h3>Taking in the View at Big Mountain</h3>
							<p><a href="#">Read More</a></p>
						</div>
					</li>
					<li>
						<div class="adventure-img"><img src="<?php echo get_template_directory_uri() . '/images/night-sky.jpg'; ?>" alt="Night Sky" />
						</div>
						<div class="headline">
							<h3>Star-Gazing at the Night Sky</h3>
							<p><a href="#">Read More</a></p>
						</div>
					</li>
				</ul>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
