<?php session_start();

/**
 * Author Template (Premium)
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
			if ( have_posts() )
				the_post();		
			rewind_posts();
			get_template_part( 'loop', 'author' );
		?>	
	</div>
	
	<?php include(TEMPLATEPATH . '/inc/launch-footer.php'); ?>
	
</div> <!-- end #wrapper -->

<?php 

get_footer(); 

?>