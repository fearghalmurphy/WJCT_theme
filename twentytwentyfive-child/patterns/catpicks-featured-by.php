<?php
/**
 * Title: CatPicks Featured By
 * Slug: twentytwentyfive-child2/catpicks-featured-by
 * Inserter: no
 */
global $post;
global $cp;

//print_r($cp);

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"0.2em","margin":{"bottom":"var:preset|spacing|60"}}},"textColor":"accent-4","fontSize":"small","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group has-accent-4-color has-text-color has-link-color has-small-font-size" style="margin-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:paragraph -->

	<?php 
	if (class_exists('CatPicks') && $cp)
	{
		$cp->render_cp_featured_by($post->ID);
	} 
	?> 
	
	<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->
