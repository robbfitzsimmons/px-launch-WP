<?php
/**
 * Launch Module Slidedown Template (Premium)
 *
 * @package WordPress
 * @subpackage Launch_Effect
 *
 */
?>
			<div id="signup" class="<?php if(get_option('lefx_cust_field1')) { echo 'hascf'; } else { echo 'nocf'; } ?>"> 
				
				<!-- H2 SUBHEADING / P DESCRIPTION (PRESIGNUP) -->
				<div>
					<div id="presignup-content" class="signup-left">
						<?php if(ler('subheading_content')) { ?><h2><?php le('subheading_content'); ?></h2><?php } ?>
						<?php if(ler('description_content')) { ?><p><?php le('description_content'); ?></p><?php } ?>
					</div>
					
					
					<!-- H2 SUBHEADING / P DESCRIPTION (SUCCESS) -->
					<div id="success-content">
						<?php if(ler('subheading_content2')) { ?><h2><?php le('subheading_content2'); ?></h2><?php } ?>
						<?php if(ler('description_content2')) { ?><p><?php le('description_content2'); ?></p><?php } ?>
					</div>
					
					
					<!-- FORM -->
					<?php include(TEMPLATEPATH . '/inc/launch-form.php'); ?>
					
					<!-- PRIVACY POLICY MODAL -->
					<div id="privacy-policy" class="jqmWindow">
						<h2><?php le('lefx_privacy_policy_heading'); ?></h2>
						<p><?php le('lefx_privacy_policy'); ?></p>
					</div>
								
				</div><!-- end div -->
			
				<div class="clear"></div>

			</div> <!-- end #signup -->