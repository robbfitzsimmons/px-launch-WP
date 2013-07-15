<?php
session_start();

/**
 * Page Template (Premium)
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

?>

<?php if(ler('lefx_pages_tab_disable') != true) : ?>

<div id="launchlite">
	<div id="launchtab">
		<a href="#"><?php le('lefx_pages_tab_text'); ?></a>
	</div>
	<div class="clear"></div>
	<div id="launchlitemodule">
		<?php include(TEMPLATEPATH . '/premium/launch-lite.php'); ?>
	</div>
</div>

<?php endif; ?>

<div id="wrapper">

	<header>
		<h1 class="<?php if(leimg('lefx_pages_logo', 'lefx_pages_logo_disable', 'pages_options')) { echo 'haslogo'; } else { echo 'nologo'; } ?> <?php if(ler('lefx_pages_textlogo_disable') == false) { echo 'hastextheading'; } else { echo 'notextheading'; }?>">
			<?php if(leimg('lefx_pages_logo','lefx_pages_logo_disable', 'pages_options')) { echo '<span></span>'; } le('lefx_pages_textlogo'); ?>
		</h1>
		<img src="<?php echo leimg('lefx_pages_logo', 'lefx_pages_logo_disable', 'pages_options'); ?>" id="logoHeight"/>
	</header>
	
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<?php if(has_post_thumbnail()) { ?>
	
		<div id="hero"><?php the_post_thumbnail('page-thumbnail'); ?></div>
		
	<?php } ?>
	
	<?php get_sidebar(); ?>

	<div id="main">
		<div class="lepost">
				
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
			
		</div>
	</div>
	
	<?php endwhile; else: endif; ?>
	
	<?php include(TEMPLATEPATH . '/inc/launch-footer.php'); ?>
	
</div> <!-- end #wrapper -->

<?php 

get_footer();

?>