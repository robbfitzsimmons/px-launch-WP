<?php session_start();

/**
 * Category Template (Premium)
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
		<?php
			$category_description = category_description();
			if ( ! empty( $category_description ) )
				echo '' . $category_description . '';
		get_template_part( 'loop', 'category' );
		?>
	</div>
	
	<?php include(TEMPLATEPATH . '/inc/launch-footer.php'); ?>
	
</div> <!-- end #wrapper -->

<?php 

get_footer(); 

?>