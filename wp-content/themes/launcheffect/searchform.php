<?php
/**
 * Search Form Template (Premium)
 *
 * @package WordPress
 * @subpackage Launch_Effect
 * 
 */
?>

<div id="SearchForm">
	<form action="<?php bloginfo('url'); ?>" method="get">
		<p class="search-button"><input type="submit" class="search-button"/></p>
		<p class="le-search"><input type="text" name="s" id="s" value="Enter to Search" class="le-search" onfocus="if(this.value == 'Enter to Search') this.value = '';" onblur="if(this.value == '') this.value = 'Enter to Search';"/></p>
	</form>
</div>