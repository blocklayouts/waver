<?php 
/**
 * Title: Hero With Cover
 * Slug: hero-cover
 * Categories: waver/heroes
 * Keywords: Hero, Cover
 */
?>


<!-- wp:cover {"url":<?php echo '"'. esc_url( get_template_directory_uri() . "/patterns/images/gradient.png") . '"';?>,"id":1687,"dimRatio":50,"align":"full","className":"is-light","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull is-light"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1687" alt="" src="<?php echo esc_url( get_template_directory_uri() . "/patterns/images/gradient.png");?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"3rem"},"elements":{"link":{"color":{"text":"#ffffff"}}},"color":{"text":"#ffffff"}}} -->
<h2 class="wp-block-heading has-text-align-center has-text-color has-link-color" style="color:#ffffff;font-size:3rem;font-style:normal;font-weight:700"><?php echo esc_html_x( 'Let\'s not stress for WordPress designs.', 'waver' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.2"},"elements":{"link":{"color":{"text":"#ffffff"}}},"color":{"text":"#ffffff"}}} -->
<p class="has-text-align-center has-text-color has-link-color" style="color:#ffffff;line-height:1.2"><?php echo esc_html_x( 'Why spend hours designing from scratch when you can use Waver to build your dream website in minutes? Time-saving and hassle-free!', 'waver' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php echo esc_html_x( 'Get started', 'waver' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"textColor":"primary-600","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary-600"}}},"color":{"background":"#f9f9f9"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-primary-600-color has-text-color has-background has-link-color wp-element-button" style="background-color:#f9f9f9"><?php echo esc_html_x( 'Learn more →', 'waver' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->