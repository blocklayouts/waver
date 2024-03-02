<?php
/**
 * Title: 404 Page
 * Slug: template-404
 * Categories: waver/page,template
 */
?>

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"3rem"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":"1.6rem"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"9rem","fontStyle":"normal","fontWeight":"900","lineHeight":"0.8"},"elements":{"link":{"color":{"text":"var:preset|color|primary-600"}}}},"textColor":"primary-600"} -->
<p class="has-text-align-center has-primary-600-color has-text-color has-link-color" style="font-size:9rem;font-style:normal;font-weight:900;line-height:0.8">404</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"3x-large"} -->
<h2 class="wp-block-heading has-text-align-center has-3-x-large-font-size" style="font-style:normal;font-weight:700"><?php echo esc_html_e( 'Whoops! Page Not Found.', 'waver' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary-400"}}}},"textColor":"secondary-400"} -->
<p class="has-text-align-center has-secondary-400-color has-text-color has-link-color"><?php echo esc_html_e( 'Sorry, the page you\'re looking for doesn\'t exist. If you think something is broken, report a problem.', 'waver' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url(home_url());?>"><?php echo esc_html_e( 'Go to home', 'waver' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"base","textColor":"primary-600","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary-600"}}}},"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-primary-600-color has-base-background-color has-text-color has-background has-link-color wp-element-button"><?php echo esc_html_e( 'Report problem', 'waver' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->