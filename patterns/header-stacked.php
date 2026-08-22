<?php
/**
 * Title: Stacked editorial header
 * Slug: rismor/header-stacked
 * Categories: rismor-navigation
 * Description: Two-row white header with large brand area and independent navigation rail.
 * Block Types: core/template-part/header
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"align":"full","className":"rismor-header-variant rismor-header-stacked","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull rismor-header-variant rismor-header-stacked" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} --><div class="wp-block-group alignwide"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} --><div class="wp-block-group"><!-- wp:site-logo {"width":48,"shouldSyncIcon":false} /--><!-- wp:site-title {"level":0,"fontSize":"xl","style":{"typography":{"fontWeight":"750","letterSpacing":"0.02em"}}} /--></div><!-- /wp:group --><!-- wp:paragraph {"fontSize":"xs"} --><p class="has-xs-font-size">Independent technology engineering<br>UK based</p><!-- /wp:paragraph --></div><!-- /wp:group -->
<!-- wp:group {"align":"wide","className":"rismor-header-nav-rail","style":{"spacing":{"padding":{"top":"var:preset|spacing|20"},"margin":{"top":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} --><div class="wp-block-group alignwide rismor-header-nav-rail" style="margin-top:var(--wp--preset--spacing--20);padding-top:var(--wp--preset--spacing--20)"><!-- wp:navigation {"overlayMenu":"mobile","layout":{"type":"flex","justifyContent":"left"}} /--><!-- wp:paragraph {"fontSize":"sm"} --><p class="has-sm-font-size"><a href="#">Start a conversation →</a></p><!-- /wp:paragraph --></div><!-- /wp:group --></div><!-- /wp:group -->