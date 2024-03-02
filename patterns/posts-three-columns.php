<?php 
/**
 * Title: Posts Three Columns
 * Slug: posts-three-columns
 * Categories: posts
 * Keywords: Posts Three Columns
 */
?>
<!-- wp:group {"tagName":"section","layout":{"type":"constrained"},"metadata":{"name":"Posts three columns"}} -->
<section class="wp-block-group"><!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"radius":"6px"},"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}},"backgroundColor":"primary-50","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-primary-50-background-color has-background" style="border-radius:6px;padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary-600"}}}},"textColor":"primary-600"} -->
<p class="has-primary-600-color has-text-color has-link-color"><?php echo esc_html_x( 'Our Blog', 'waver' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"3rem"}}} -->
<h2 class="wp-block-heading has-text-align-center" style="font-size:3rem;font-style:normal;font-weight:700"><?php
        echo sprintf(
            /* Translators: Latest articles from the blog*/
            esc_html__( 'Latest articles from the  %1$s', 'waver' ),
            '<span style="color: var(--wp--preset--color--primary-600)">blog</span>.'
        );
    ?>
</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query {"queryId":14,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"align":"wide","style":{"border":{"radius":"12px"},"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="border-radius:12px"><!-- wp:post-featured-image {"isLink":true,"align":"wide","style":{"border":{"radius":"12px"}}} /-->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"radius":"6px"},"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}},"backgroundColor":"primary-50","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-primary-50-background-color has-background" style="border-radius:6px;padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:post-terms {"term":"category","textAlign":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary-600"}}},"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small"}}},"backgroundColor":"primary-50","textColor":"primary-600"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"lineHeight":"1.2"}}} /-->

<!-- wp:post-excerpt {"excerptLength":20,"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary-600"}}}},"textColor":"secondary-600"} /-->

<!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary-400"}}}},"textColor":"secondary-400","fontSize":"small"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></section>
<!-- /wp:group -->