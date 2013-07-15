<?php
/**
 * Brandable Footer (Premium)
 *
 * @package WordPress
 * @subpackage Launch_Effect
 * 
 */
?>
	<?php if(get_option('lefx_credits_disable') !== 'true') { ?>
	<ul id="footer">
		<?php if(ler('lefx_credits')) { ?>
		<li><?php le('lefx_credits'); ?></li>
		<?php } else { ?>
		<li>
			Powered by <a href="http://www.launcheffectapp.com" class="logo" target="_blank">The Launch Effect</a> a WordPress Theme by <a href="http://www.barrelny.com" target="_blank">Barrel</a>
		</li>
		<?php } ?>
	</ul>
	<?php } ?>