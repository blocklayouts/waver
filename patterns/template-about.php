<?php
/**
 * Title: About Page
 * Slug: template-about
 * Categories: waver/page,template
 */
?>

<!-- wp:group {"align":"full","layout":{"type":"constrained"},"metadata":{"name":"About Us"}} -->
<div class="wp-block-group alignfull"><!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:cover {"url":<?php echo '"'. esc_url( get_template_directory_uri() . "/patterns/images/Placeholder.png") . '"';?>,"id":1057,"dimRatio":0,"focalPoint":{"x":0.52,"y":0.4},"isDark":false,"style":{"border":{"radius":"12px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light" style="border-radius:12px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1057" alt="" src="<?php echo esc_url( get_template_directory_uri() . "/patterns/images/Placeholder.png") ?>" style="object-position:52% 40%" data-object-fit="cover" data-object-position="52% 40%"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"blockGap":"1.4rem"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"radius":"6px"},"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}},"backgroundColor":"primary-50","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-primary-50-background-color has-background" style="border-radius:6px;padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary-600"}}}},"textColor":"primary-600"} -->
<p class="has-primary-600-color has-text-color has-link-color"><?php echo esc_html_e( 'About Us', 'waver' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"3rem"}}} -->
<h2 class="wp-block-heading has-text-align-left" style="font-size:3rem;font-style:normal;font-weight:700"><?php
        echo sprintf(
            /* Translators: Our people make us great*/
            esc_html__( 'Our people make us %1$s for you.', 'waver' ),
            '<span style="color: var(--wp--preset--color--primary-600)">great</span>'
        );
    ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"secondary-400","fontSize":"medium"} -->
<p class="has-text-align-left has-secondary-400-color has-text-color has-medium-font-size" style="font-style:normal;font-weight:400"><?php echo esc_html_e( 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis laudantium inventore perspiciatis ex quam aspernatur nulla reprehenderit mollitia voluptates eveniet consequatur placeat...', 'waver' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"blockGap":"1.1rem","margin":{"top":"2.3rem","bottom":"2.3rem"}}}} -->
<div class="wp-block-buttons" style="margin-top:2.3rem;margin-bottom:2.3rem"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php echo esc_html_e( 'Read More', 'waver' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"1.1rem","left":"1.1rem"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"blockGap":"0.6rem"},"border":{"right":{"color":"#e5e7eb","width":"1px"},"top":{},"bottom":{},"left":{}}}} -->
<div class="wp-block-column" style="border-right-color:#e5e7eb;border-right-width:1px"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"22px"}}} -->
<p style="font-size:22px;font-style:normal;font-weight:700"><?php echo esc_html_e( '5k+ Sell', 'waver' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"color":{"text":"#9ca3af"},"elements":{"link":{"color":{"text":"#9ca3af"}}},"typography":{"fontSize":"14px"}}} -->
<p class="has-text-color has-link-color" style="color:#9ca3af;font-size:14px"><?php echo esc_html_e( 'Products', 'waver' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"0.6rem"},"border":{"right":{"color":"#e5e7eb","width":"1px"},"top":{},"bottom":{},"left":{}}}} -->
<div class="wp-block-column" style="border-right-color:#e5e7eb;border-right-width:1px"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"22px"}}} -->
<p style="font-size:22px;font-style:normal;font-weight:700">9.5/10</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"color":{"text":"#9ca3af"},"elements":{"link":{"color":{"text":"#9ca3af"}}},"typography":{"fontSize":"14px"}}} -->
<p class="has-text-color has-link-color" style="color:#9ca3af;font-size:14px"><?php echo esc_html_e( 'User satisfaction', 'waver' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"0.6rem"}}} -->
<div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"22px"}}} -->
<p style="font-size:22px;font-style:normal;font-weight:700"><?php echo esc_html_e( '15 Years', 'waver' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"color":{"text":"#9ca3af"},"elements":{"link":{"color":{"text":"#9ca3af"}}},"typography":{"fontSize":"14px"}}} -->
<p class="has-text-color has-link-color" style="color:#9ca3af;font-size:14px"><?php echo esc_html_e( 'Experience', 'waver' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"team-members"} /-->
<!-- wp:pattern {"slug":"stat-four-columns-dark"} /-->


