<?php 
/**
 * Title: Pricing Three Columns
 * Slug: pricing-three-columns
 * Categories: waver/pricing
 * Keywords: Pricing Three Columns
 */
?>
<!-- wp:group {"tagName":"section","align":"full","layout":{"type":"constrained"},"metadata":{"name":"Pricing three columns"}} -->
<section class="wp-block-group alignfull"><!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"radius":"6px"},"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}},"backgroundColor":"primary-50","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-primary-50-background-color has-background" style="border-radius:6px;padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary-600"}}}},"textColor":"primary-600"} -->
<p class="has-primary-600-color has-text-color has-link-color"><?php echo esc_html_x( 'Pricing', 'waver' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"3rem"}}} -->
<h2 class="wp-block-heading has-text-align-center" style="font-size:3rem;font-style:normal;font-weight:700"><?php
        echo sprintf(
            /* Translators: Choose the right plan for you.*/
            esc_html__( 'Choose the right  %1$s for you.', 'waver' ),
            '<span style="color: var(--wp--preset--color--primary-600)">plan</span>'
        );
    ?>
</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"secondary-400","fontSize":"medium"} -->
<p class="has-text-align-center has-secondary-400-color has-text-color has-medium-font-size" style="font-style:normal;font-weight:400"><?php echo esc_html_x( 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat blanditiis repellendus exercitationem enim, consectetur doloremque.', 'waver' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"align":"wide","className":"alignwide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|medium"},"border":{"radius":"12px"}},"className":"is-style-waver-box-shadow","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"center"}} -->
<div class="wp-block-group is-style-waver-box-shadow" style="border-radius:12px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-left has-x-large-font-size" style="font-style:normal;font-weight:600"><?php echo esc_html_x( 'Starter', 'waver' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"900"}},"fontSize":"3x-large"} -->
<h2 class="wp-block-heading has-text-align-left has-3-x-large-font-size" style="font-style:normal;font-weight:900"><?php echo esc_html_x( '$29/mo', 'waver' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary-300"}}}},"textColor":"secondary-300"} -->
<p class="has-secondary-300-color has-text-color has-link-color"><?php echo esc_html_x( 'Billed Annually', 'waver' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"left","textColor":"secondary-500"} -->
<p class="has-text-align-left has-secondary-500-color has-text-color"><?php echo esc_html_x( 'The best option for personal use &amp; for your next project.', 'waver' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"},"elements":{"link":{"color":{"text":"var:preset|color|secondary-500"}}}},"textColor":"secondary-500","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-secondary-500-color has-text-color has-link-color"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"radius":"99px"}},"backgroundColor":"primary-50","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-primary-50-background-color has-background" style="border-radius:99px"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary-600"}}}},"textColor":"primary-600"} -->
<p class="has-primary-600-color has-text-color has-link-color"><span style="width: 20px; height: 20px; display: flex; justify-content: center; align-items: center;">✓</span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><?php echo esc_html_x( 'Feature one', 'waver' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"radius":"99px"}},"backgroundColor":"primary-50","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-primary-50-background-color has-background" style="border-radius:99px"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary-600"}}}},"textColor":"primary-600"} -->
<p class="has-primary-600-color has-text-color has-link-color"><span style="width: 20px; height: 20px; display: flex; justify-content: center; align-items: center;">✓</span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><?php echo esc_html_x( 'Feature two', 'waver' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
<div class="wp-block-buttons" style="margin-top:0px;margin-bottom:0px"><!-- wp:button {"backgroundColor":"transparent","textColor":"primary-600","width":100,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary-600"}}},"border":{"width":"1px"}},"borderColor":"primary-600","className":"is-style-fill"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-fill"><a class="wp-block-button__link has-primary-600-color has-transparent-background-color has-text-color has-background has-link-color has-border-color has-primary-600-border-color wp-element-button" style="border-width:1px"><?php echo esc_html_x( 'Get Started', 'waver' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|medium"},"border":{"radius":"12px"}},"className":"is-style-waver-box-shadow-lg","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"center"}} -->
<div class="wp-block-group is-style-waver-box-shadow-lg" style="border-radius:12px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|primary-600"}}}},"textColor":"primary-600","fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-left has-primary-600-color has-text-color has-link-color has-x-large-font-size" style="font-style:normal;font-weight:600"><?php echo esc_html_x( 'Premium', 'waver' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"900"}},"fontSize":"3x-large"} -->
<h2 class="wp-block-heading has-text-align-left has-3-x-large-font-size" style="font-style:normal;font-weight:900"><?php echo esc_html_x( '$99/mo', 'waver' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary-300"}}}},"textColor":"secondary-300"} -->
<p class="has-secondary-300-color has-text-color has-link-color"><?php echo esc_html_x( 'Billed Annually', 'waver' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"left","textColor":"secondary-500"} -->
<p class="has-text-align-left has-secondary-500-color has-text-color"><?php echo esc_html_x( 'Best for large scale uses and extended redistribution rights.', 'waver' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"},"elements":{"link":{"color":{"text":"var:preset|color|secondary-500"}}}},"textColor":"secondary-500","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-secondary-500-color has-text-color has-link-color"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"radius":"99px"}},"backgroundColor":"primary-50","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-primary-50-background-color has-background" style="border-radius:99px"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary-600"}}}},"textColor":"primary-600"} -->
<p class="has-primary-600-color has-text-color has-link-color"><span style="width: 20px; height: 20px; display: flex; justify-content: center; align-items: center;">✓</span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><?php echo esc_html_x( 'Feature one', 'waver' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"radius":"99px"}},"backgroundColor":"primary-50","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-primary-50-background-color has-background" style="border-radius:99px"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary-600"}}}},"textColor":"primary-600"} -->
<p class="has-primary-600-color has-text-color has-link-color"><span style="width: 20px; height: 20px; display: flex; justify-content: center; align-items: center;">✓</span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><?php echo esc_html_x( 'Feature two', 'waver' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"radius":"99px"}},"backgroundColor":"primary-50","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-primary-50-background-color has-background" style="border-radius:99px"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary-600"}}}},"textColor":"primary-600"} -->
<p class="has-primary-600-color has-text-color has-link-color"><span style="width: 20px; height: 20px; display: flex; justify-content: center; align-items: center;">✓</span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><?php echo esc_html_x( 'Feature three', 'waver' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"radius":"99px"}},"backgroundColor":"primary-50","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-primary-50-background-color has-background" style="border-radius:99px"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary-600"}}}},"textColor":"primary-600"} -->
<p class="has-primary-600-color has-text-color has-link-color"><span style="width: 20px; height: 20px; display: flex; justify-content: center; align-items: center;">✓</span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><?php echo esc_html_x( 'Feature four', 'waver' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
<div class="wp-block-buttons" style="margin-top:0px;margin-bottom:0px"><!-- wp:button {"width":100,"className":"is-style-fill"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-fill"><a class="wp-block-button__link wp-element-button"><?php echo esc_html_x( 'Get Started', 'waver' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|medium"},"border":{"radius":"12px"}},"className":"is-style-waver-box-shadow","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"center"}} -->
<div class="wp-block-group is-style-waver-box-shadow" style="border-radius:12px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-left has-x-large-font-size" style="font-style:normal;font-weight:600"><?php echo esc_html_x( 'Company', 'waver' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"900"}},"fontSize":"3x-large"} -->
<h2 class="wp-block-heading has-text-align-left has-3-x-large-font-size" style="font-style:normal;font-weight:900"><?php echo esc_html_x( '$229/mo', 'waver' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary-300"}}}},"textColor":"secondary-300"} -->
<p class="has-secondary-300-color has-text-color has-link-color"><?php echo esc_html_x( 'Billed Annually', 'waver' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"left","textColor":"secondary-500"} -->
<p class="has-text-align-left has-secondary-500-color has-text-color"><?php echo esc_html_x( 'Relevant for multiple users, extended premium support.', 'waver' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"},"elements":{"link":{"color":{"text":"var:preset|color|secondary-500"}}}},"textColor":"secondary-500","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-secondary-500-color has-text-color has-link-color"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"radius":"99px"}},"backgroundColor":"primary-50","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-primary-50-background-color has-background" style="border-radius:99px"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary-600"}}}},"textColor":"primary-600"} -->
<p class="has-primary-600-color has-text-color has-link-color"><span style="width: 20px; height: 20px; display: flex; justify-content: center; align-items: center;">✓</span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><?php echo esc_html_x( 'Feature one', 'waver' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"radius":"99px"}},"backgroundColor":"primary-50","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-primary-50-background-color has-background" style="border-radius:99px"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary-600"}}}},"textColor":"primary-600"} -->
<p class="has-primary-600-color has-text-color has-link-color"><span style="width: 20px; height: 20px; display: flex; justify-content: center; align-items: center;">✓</span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><?php echo esc_html_x( 'Feature two', 'waver' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
<div class="wp-block-buttons" style="margin-top:0px;margin-bottom:0px"><!-- wp:button {"backgroundColor":"transparent","textColor":"primary-600","width":100,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary-600"}}},"border":{"width":"1px"}},"borderColor":"primary-600","className":"is-style-fill"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-fill"><a class="wp-block-button__link has-primary-600-color has-transparent-background-color has-text-color has-background has-link-color has-border-color has-primary-600-border-color wp-element-button" style="border-width:1px"><?php echo esc_html_x( 'Get Started', 'waver' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></section>
<!-- /wp:group -->