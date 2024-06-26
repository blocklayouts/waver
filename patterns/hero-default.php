<?php 
/**
 * Title: Default Hero
 * Slug: hero-default
 * Categories: waver/heroes
 * Keywords: Hero, default
 */
?>
<!-- wp:group {"tagName":"section","layout":{"type":"constrained"},"metadata":{"name":"Hero default"}} -->
<section class="wp-block-group"><!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.2"},"elements":{"link":{"color":{"text":"var:preset|color|primary-600"}}},"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}},"layout":{"selfStretch":"fit","flexSize":null}},"textColor":"secondary-500"} -->
<p class="has-text-align-center has-secondary-500-color has-text-color has-link-color" style="padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--small);line-height:1.2"><?php
        echo sprintf(
            /* Translators: Waver is out! See what's new */
            esc_html__( 'Waver is out! %1$s', 'waver' ),
            '<a href="#">See what\'s new →</a>'
        );
    ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","level":1,"align":"wide","style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"4.6rem","lineHeight":"1.1"}}} -->
<h1 class="wp-block-heading alignwide has-text-align-center" style="font-size:4.6rem;font-style:normal;font-weight:600;line-height:1.1"><?php
        echo sprintf(
            /* Translators: Let's not stress for WordPress designs*/
            esc_html__( 'Let\'s not stress for %1$s designs', 'waver' ),
            '<span style="color: var(--wp--preset--color--primary-600)">WordPress</span>'
        );
    ?>
</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.4"},"elements":{"link":{"color":{"text":"var:preset|color|secondary-500"}}}},"textColor":"secondary-500"} -->
<p class="has-text-align-center has-secondary-500-color has-text-color has-link-color" style="line-height:1.4"><?php echo esc_html_e( 'Unleash the Power of WordPress Block Themes for Effortless Customization', 'waver' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"align":"wide","layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons alignwide"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://blocklayouts.com/product/waver/"><?php echo esc_html_e( 'Save Time, Launch Faster →', 'waver' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"10%"} -->
<div class="wp-block-column" style="flex-basis:10%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":""} -->
<div class="wp-block-column"><!-- wp:image {"id":400,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"0px"}},"className":"is-style-waver-box-shadow-md"} -->
<figure class="wp-block-image size-full has-custom-border is-style-waver-box-shadow-md"><img src="<?php echo esc_url( get_template_directory_uri() . "/patterns/images/waver.png"); ?>" alt="waver" class="wp-image-400" style="border-radius:0px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"10%"} -->
<div class="wp-block-column" style="flex-basis:10%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></section>
<!-- /wp:group -->