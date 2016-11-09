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
			<section class="product-feed container">
				<h2>Shop Stuff</h2><!--May need to change this to dynamic?-->
				<ul>
					<?php
						$terms = get_terms('product_type');
						foreach ($terms as $term) :
					?>
						<li>
						<?php $url = get_term_link($term->slug, 'product_type'); ?>
							<img src="<?php echo get_template_directory_uri() ?>/images/product-type-icons/<?php echo $term->slug ?>.svg";/>
							<p><?php echo $term->description ?></p>
		    			<p class="green-link"><a href="<?php echo $url ?>"><?php echo $term->name ?> Stuff</a></p>
						</li>
					<?php endforeach;?>
				</ul>
			</section>
			<section class="journal-feed container">
				<h2>Inhabitent Journal</h2><!--May need to change this to dynamic?-->
				<ul>
					<?php
						$args = array(
							'post_type' => 'post',
							'order' => 'DESC',
						 	'posts_per_page' => 3,);
						$journal_posts = get_posts( $args ); // returns an array of posts
					?>
					<?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>
						<li>
							<?php the_post_thumbnail(); ?>
							<div class="post-wrap">
								<p><?php the_date(); ?> / <?php comments_number(); ?></p>
								<h3><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
								<p class="white-link"><a href="<?php the_permalink(); ?>">Read Entry</a></p>
							</div>
						</li>
					<?php endforeach; wp_reset_postdata(); ?>
				</ul>
			</section>
			<section class="adventure container">
				<h2>Latest Adventures</h2><!--May need to change this to dynamic?-->
				<ul class="clearfix">
					<li>
						<div class="adventure-img"><img src="<?php echo get_template_directory_uri() . '/images/canoe-girl.jpg'; ?>" alt="Canoe Girl" />
						</div>
						<div class="headline">
							<h3>Getting Back to Nature in a Canoe</h3>
							<p class="white-link"><a href="#">Read More</a></p>
						</div>
					</li>
					<li>
						<div class="adventure-img"><img src="<?php echo get_template_directory_uri() . '/images/beach-bonfire.jpg'; ?>" alt="Beach Bonfire" />
						</div>
						<div class="headline">
							<h3>A Night with Friends at the beach</h3>
							<p class="white-link"><a href="#">Read More</a></p>
						</div>
					</li>
					<li>
						<div class="adventure-img"><img src="<?php echo get_template_directory_uri() . '/images/mountain-hikers.jpg'; ?>" alt="Mountain Hikers" />
						</div>
						<div class="headline">
							<h3>Taking in the View at Big Mountain</h3>
							<p class="white-link"><a href="#">Read More</a></p>
						</div>
					</li>
					<li>
						<div class="adventure-img"><img src="<?php echo get_template_directory_uri() . '/images/night-sky.jpg'; ?>" alt="Night Sky" />
						</div>
						<div class="headline">
							<h3>Star-Gazing at the Night Sky</h3>
							<p class="white-link"><a href="#">Read More</a></p>
						</div>
					</li>
				</ul>
				<p class="green-link"><a href="#">More Adventures</a></p>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
