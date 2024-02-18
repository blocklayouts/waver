<?php 
/**
 * Title: Hero With Cover
 * Slug: hero-cover
 * Categories: waver/heroes
 * Keywords: Hero, Cover
 */
?>

<!-- wp:cover {"url":<?php echo '"'. esc_url( get_template_directory_uri() . "/patterns/images/gradient.png") . '"';?>,"id":486,"dimRatio":10,"minHeight":450,"minHeightUnit":"px","isDark":false,"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light" style="min-height:450px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-10 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-486" alt="" src="<?php echo esc_url( get_template_directory_uri() . "/patterns/images/gradient.png");?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"3rem"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
<h2 class="wp-block-heading has-text-align-center has-base-color has-text-color has-link-color" style="font-size:3rem;font-style:normal;font-weight:700">Let’s not stress for&nbsp;WordPress&nbsp;designs.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.2"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
<p class="has-text-align-center has-base-color has-text-color has-link-color" style="line-height:1.2">Why spend hours designing from scratch when you can use Waver to build your dream website in minutes? Time-saving and hassle-free!</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Get started</a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"base","textColor":"primary-600","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary-600"}}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-primary-600-color has-base-background-color has-text-color has-background has-link-color wp-element-button">Learn more →</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->