<?php 
/**
 * Title: Default footer
 * Slug: footer-default
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>
<!-- wp:group {"tagName":"footer","style":{"elements":{"link":{"color":{"text":"#ffffff"}}},"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}}},"backgroundColor":"base","className":"dark-footer","layout":{"inherit":true,"type":"constrained"},"metadata":{"name":"Footer"}} -->

<footer class="wp-block-group dark-footer has-base-background-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large)">
<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}}} -->
<div class="wp-block-column"><!-- wp:site-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|main"}}}},"textColor":"main","fontSize":"x-large"} /-->

<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search","width":75,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary-300"}}}},"backgroundColor":"transparent","textColor":"secondary-300","className":"is-style-qr-search-minimal"} /-->

<!-- wp:social-links {"iconColor":"secondary-700","iconColorValue":"#374151","openInNewTab":true,"size":"has-small-icon-size","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|small"}}},"className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"left"}} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"dribbble"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}}} -->
<div class="wp-block-column"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|small","left":"var:preset|spacing|small"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}}} -->
<div class="wp-block-column"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"className":"has-medium-font-size","fontSize":"large","fontFamily":"body"} -->
<h2 class="wp-block-heading has-medium-font-size has-body-font-family has-large-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Navigation', 'waver' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:navigation {"ref":1985,"textColor":"secondary-500","overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"var:preset|spacing|small"}}} -->

    <!-- wp:navigation-link {"label":"Home","url":"#"} /-->
    <!-- wp:navigation-link {"label":"Blog","url":"#"} /-->
    <!-- wp:navigation-link {"label":"About","url":"#"} /-->
    <!-- wp:navigation-link {"label":"Pricing","url":"#"} /-->
    

<!-- /wp:navigation -->

</div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}}} -->
<div class="wp-block-column"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"className":"has-medium-font-size","fontSize":"large","fontFamily":"body"} -->
<h2 class="wp-block-heading has-medium-font-size has-body-font-family has-large-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Social', 'waver' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:navigation {"ref":1982,"textColor":"secondary-500","overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"var:preset|spacing|small"}}} -->

    <!-- wp:navigation-link {"label":"Twitter/X","url":"#"} /-->
    <!-- wp:navigation-link {"label":"Facebook","url":"#"} /-->
    <!-- wp:navigation-link {"label":"Instagram","url":"#"} /-->
    <!-- wp:navigation-link {"label":"Pinterest","url":"#"} /-->

<!-- /wp:navigation -->
</div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}}} -->
<div class="wp-block-column"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"className":"has-medium-font-size","fontSize":"large","fontFamily":"body"} -->
<h2 class="wp-block-heading has-medium-font-size has-body-font-family has-large-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Support', 'waver' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:navigation {"ref":1981,"textColor":"secondary-500","overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"var:preset|spacing|small"}}} -->

    <!-- wp:navigation-link {"label":"Contact us","url":"#"} /-->
    <!-- wp:navigation-link {"label":"Get Help","url":"#"} /-->
    <!-- wp:navigation-link {"label":"Docs","url":"#"} /-->

<!-- /wp:navigation -->

</div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"},"elements":{"link":{"color":{"text":"var:preset|color|main-accent"}}}},"textColor":"main-accent","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group has-main-accent-color has-text-color has-link-color"><!-- wp:paragraph {"style":{"typography":{"fontSize":"16px"}},"textColor":"secondary-500"} -->
<p class="has-secondary-500-color has-text-color" style="font-size:16px"><?php
        echo sprintf(
            /* Translators: 2021-2022 waver™. All Rights Reserved.*/
            esc_html__( '2021-2022 %1$s. All Rights Reserved.', 'waver' ),
            '<a href="#">waver™</a>'
        );
    ?>
</p>
<!-- /wp:paragraph -->

<!-- wp:navigation {"ref":1986,"textColor":"secondary-500","overlayMenu":"never","layout":{"type":"flex","orientation":"horizontal"},"style":{"spacing":{"blockGap":"var:preset|spacing|small"}}} -->

    <!-- wp:navigation-link {"label":"Privacy Policy","url":"#"} /-->
    <!-- wp:navigation-link {"label":"Terms","url":"#"} /-->
    <!-- wp:navigation-link {"label":"License","url":"#"} /-->

<!-- /wp:navigation -->

</div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></footer>
<!-- /wp:group -->