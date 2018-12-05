<?php
/**
 * The template for displaying all pages.
 *
 * @package UME
 */

get_header(); ?>

	<div id="primary" class="content-area prizes">
		<main id="main" class="site-main" role="main">

		<img class="page-name" src="<?php echo get_template_directory_uri(); ?>/assets/images/pink-neon-words/prizes.png" />	
        <h3>Earn more coins to win these prizes for your game!</h3>
        <div class="coin-winnings">
            <p class="one-play">1 Play =</p>
            <img class="coin" src="<?php echo get_template_directory_uri(); ?>/assets/images/coin.png" />
            <p>x 1</p>
            <p>1 Download =</p>
            <img class="coin" src="<?php echo get_template_directory_uri(); ?>/assets/images/coin.png" />
            <p class="times-five">x 5</p>
        </div>
        <img class="prize-path" src="<?php echo get_template_directory_uri(); ?>/assets/images/mystery-box.png" />

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>