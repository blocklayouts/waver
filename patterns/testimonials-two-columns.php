<?php 
/**
 * Title: Testimonials Two Columns
 * Slug: testimonials-two-columns
 * Categories: testimonials
 * Keywords: Testimonials two Columns
 */
?>

<!-- wp:group {"align":"full","backgroundColor":"base","layout":{"type":"constrained"},"metadata":{"name":"Testimonials two columns"}} -->
<div class="wp-block-group alignfull has-base-background-color has-background"><!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"radius":"6px"},"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}},"backgroundColor":"primary-50","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-primary-50-background-color has-background" style="border-radius:6px;padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary-600"}}}},"textColor":"primary-600"} -->
<p class="has-primary-600-color has-text-color has-link-color"><?php echo esc_html_x( 'Testimonials', 'waver' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"3rem"}}} -->
<h2 class="wp-block-heading has-text-align-center" style="font-size:3rem;font-style:normal;font-weight:700"><?php
        echo sprintf(
            /* Translators: Here's what our customers said*/
            esc_html__( 'Here\'s what our %1$s said', 'waver' ),
            '<span style="color: var(--wp--preset--color--primary-600)">customers</span>'
        );
    ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40)"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}}} -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"blockGap":"var:preset|spacing|small"}},"backgroundColor":"base","className":"is-style-waver-box-shadow-md","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-waver-box-shadow-md has-base-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:image {"id":340,"width":"50px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() . "/patterns/images/quote-icon.png"); ?>" alt="quote" class="wp-image-340" style="width:50px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"textColor":"secondary-500"} -->
<p class="has-secondary-500-color has-text-color"><?php echo esc_html_x( '"I\'ve tried numerous WordPress themes, but this one stands out. The responsiveness is unmatched, and my site looks fantastic on any device. Finally, a theme that truly delivers a seamless user experience."', 'waver' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"id":332,"width":"60px","height":"60px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"100px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . "/patterns/images/avatar-3.png"); ?>" alt="avatar" class="wp-image-332" style="border-radius:100px;object-fit:cover;width:60px;height:60px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
<p style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'Ethan Williams','Name of Person Provided the Testimonial', 'waver' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0"}}},"textColor":"secondary-400","fontSize":"small"} -->
<p class="has-secondary-400-color has-text-color has-small-font-size" style="margin-top:0"><?php echo esc_html_x( 'Software Developer', 'waver' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}}} -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"blockGap":"var:preset|spacing|small"}},"backgroundColor":"base","className":"is-style-waver-box-shadow-md","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-waver-box-shadow-md has-base-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:image {"id":340,"width":"50px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() . "/patterns/images/quote-icon.png"); ?>" alt="" class="wp-image-340" style="width:50px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"textColor":"secondary-500"} -->
<p class="has-secondary-500-color has-text-color"><?php echo esc_html_x( '"The versatility of this WordPress theme is a game-changer. Whether you\'re running a blog, portfolio, or e-commerce site, it adapts effortlessly. It\'s like having multiple themes in one!"', 'waver' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"id":332,"width":"60px","height":"60px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"100px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . "/patterns/images/avatar-6.png"); ?>" alt="" class="wp-image-332" style="border-radius:100px;object-fit:cover;width:60px;height:60px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
<p style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'Mason Anderson','Name of Person Provided the Testimonial', 'waver' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0"}}},"textColor":"secondary-400","fontSize":"small"} -->
<p class="has-secondary-400-color has-text-color has-small-font-size" style="margin-top:0"><?php echo esc_html_x( 'Designer', 'waver' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->