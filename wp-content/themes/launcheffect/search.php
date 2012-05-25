<?php session_start();

/**
 * Search Results Template (Premium)
 *
 * @package WordPress
 * @subpackage Launch_Effect
 * 
 */

// STORE REFERRED BY CODE
$_SESSION['referredBy'] = $referralindex;

include('header.php'); // using this instead of get_header so we can pass $referralindex variable 

// LOG VISITS AND CONVERSIONS
logVisits($referralindex, $stats_table);

// GET PREMIUM THEME HEADER
include(TEMPLATEPATH . '/premium/theme-header.php'); 

?>
	
	<div id="main">
		<?php if ( have_posts() ) : ?>
			<?php
			 get_template_part( 'loop', 'search' );
			?>
		<?php else : ?>
			<div class="lepost">
				<h2><?php _e( 'Nothing Found', 'twentyten' ); ?></h2>
				<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'twentyten' ); ?></p>
			</div>
		<?php endif; ?>
	</div>
	
	<?php include(TEMPLATEPATH . '/inc/launch-footer.php'); ?>
	
</div> <!-- end #wrapper -->

<?php 

get_footer(); 

?>