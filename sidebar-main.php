<?php
/**
 * The sidebar containing the footer widget area.
 *
 * If no active widgets in this sidebar, it will be hidden completely.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
    <div id="secondary" class="modules row" role="complementary">
        <?php dynamic_sidebar( 'sidebar-1' ); ?>
        <div class="clearfix"></div>
    </div><!-- #secondary -->
<?php endif; ?>