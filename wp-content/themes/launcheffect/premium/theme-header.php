<?php
/**
 * Theme Header (Premium)
 *
 * Contains the top portion of the content area:
 * 		Launch module slide-down
 * 		Logo/Heading area
 * 		Sidebar (nav and widgets) include
 *
 * @package WordPress
 * @subpackage Launch_Effect
 * 
 */
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
	
	<?php get_sidebar(); ?>