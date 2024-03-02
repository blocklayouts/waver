<?php 
/**
 * Title: Features Three Columns
 * Slug: features-three-columns
 * Categories: waver/featured
 * Keywords: Features Three Columns
 */
?>
<!-- wp:group {"tagName":"section","layout":{"type":"constrained"},"metadata":{"name":"Features three columns"}} -->
<section class="wp-block-group"><!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"default"},"metadata":{"name":"Features wrap"}} -->
<div class="wp-block-group alignwide"><!-- wp:columns {"style":{"border":{"bottom":{"color":"var:preset|color|secondary-100","width":"1px"},"top":{},"right":{},"left":{}}}} -->
<div class="wp-block-columns" style="border-bottom-color:var(--wp--preset--color--secondary-100);border-bottom-width:1px"><!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:heading {"textAlign":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"3rem"}}} -->
<h2 class="wp-block-heading has-text-align-left" style="font-size:3rem;font-style:normal;font-weight:700"><?php
        echo sprintf(
            /* Translators: Build your creative vision in minute*/
            esc_html__( 'Build your creative vision in %1$s', 'waver' ),
            '<span style="color: var(--wp--preset--color--primary-600)">minute</span>'
        );
    ?>
</h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|large","left":"var:preset|spacing|medium"},"margin":{"top":"var:preset|spacing|large"}}}} -->
<div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--large)"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"6px"},"spacing":{"blockGap":"var:preset|spacing|small"}},"className":"is-style-group-box-shadow-lg","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-group-box-shadow-lg" style="border-radius:6px"><!-- wp:heading {"textAlign":"left","level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}},"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
<h3 class="wp-block-heading has-text-align-left" style="margin-top:var(--wp--preset--spacing--medium);font-style:normal;font-weight:600"><?php echo esc_html_x( 'Time Saving', 'waver' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary-500"}}}},"textColor":"secondary-500"} -->
<p class="has-text-align-left has-secondary-500-color has-text-color has-link-color"><?php echo esc_html_x( 'Simplify your WordPress website creation process with ease!', 'waver' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary-600"}}}}} -->
<p class="has-link-color"><a href="#"><?php echo esc_html_x( 'Learn More →', 'waver' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"6px"},"spacing":{"blockGap":"var:preset|spacing|small"}},"className":"is-style-group-box-shadow-lg","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-group-box-shadow-lg" style="border-radius:6px"><!-- wp:heading {"textAlign":"left","level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}},"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
<h3 class="wp-block-heading has-text-align-left" style="margin-top:var(--wp--preset--spacing--medium);font-style:normal;font-weight:600"><?php echo esc_html_x( 'Diverse blocks', 'waver' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary-500"}}}},"textColor":"secondary-500"} -->
<p class="has-text-align-left has-secondary-500-color has-text-color has-link-color"><?php echo esc_html_x( 'Explore creative possibilities with our meticulously blocks.', 'waver' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary-600"}}}}} -->
<p class="has-link-color"><a href="#"><?php echo esc_html_x( 'Explore Blocks →', 'waver' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"6px"},"spacing":{"blockGap":"var:preset|spacing|small"}},"className":"is-style-group-box-shadow-lg","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-group-box-shadow-lg" style="border-radius:6px"><!-- wp:heading {"textAlign":"left","level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}},"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
<h3 class="wp-block-heading has-text-align-left" style="margin-top:var(--wp--preset--spacing--medium);font-style:normal;font-weight:600"><?php echo esc_html_x( 'World Class UI Design', 'waver' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary-500"}}}},"textColor":"secondary-500"} -->
<p class="has-text-align-left has-secondary-500-color has-text-color has-link-color"><?php echo esc_html_x( 'Enjoy a sleek and contemporary blocks that enhances user experience.', 'waver' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary-600"}}}}} -->
<p class="has-link-color"><a href="#"><?php echo esc_html_x( 'Get Full Access →', 'waver' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></section>
<!-- /wp:group -->