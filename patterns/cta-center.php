<?php 
/**
 * Title: CTA center
 * Slug: cta-center
 * Categories: waver/cta
 * Keywords: cta center
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained"},"metadata":{"name":"CTA center"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"3rem"}}} -->
<h2 class="wp-block-heading has-text-align-center" style="font-size:3rem;font-style:normal;font-weight:700"><?php echo esc_html_e( 'Ready to Get Started?', 'waver' ); ?></h2>

<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary-400"}}}},"textColor":"secondary-400"} -->
<p class="has-text-align-center has-secondary-400-color has-text-color has-link-color"><?php echo esc_html_e( 'Act Fast, Live Large: Embrace Exclusive Deals Before They Vanish!', 'waver' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"align":"wide","layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|small"}}} -->
<div class="wp-block-buttons alignwide"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php echo esc_html_e( 'Get started', 'waver' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"style":{"border":{"radius":"6px","width":"1px"},"color":{"text":"#4f46e5","background":"#ffffff"},"elements":{"link":{"color":{"text":"#4f46e5"}}}},"borderColor":"primary-600"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background has-link-color has-border-color has-primary-600-border-color wp-element-button" style="border-width:1px;border-radius:6px;color:#4f46e5;background-color:#ffffff"><?php echo esc_html_e( 'Learn more →', 'waver' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->