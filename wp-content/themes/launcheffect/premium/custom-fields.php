<?php
/**
 * Custom Fields (Premium)
 *
 * @package WordPress
 * @subpackage Launch_Effect
 * 
 */
?>
								<?php
									$fields = array();
									for($i=1; $i<=10; $i++)
									{
										if(get_option("lefx_cust_field{$i}") != '')
										{
											$fields[get_option("lefx_cust_field{$i}_order")]['name'] = get_option("lefx_cust_field{$i}");
											$fields[get_option("lefx_cust_field{$i}_order")]['req'] = get_option("lefx_cust_field{$i}_required");
											$fields[get_option("lefx_cust_field{$i}_order")]['type'] = get_option("lefx_cust_field{$i}_type");
											$fields[get_option("lefx_cust_field{$i}_order")]['id'] = "field{$i}";
											$fields[get_option("lefx_cust_field{$i}_order")]['index'] = $i;
										}
									}
									for($i=0; $i<count($fields); $i++)
									{
										if (isset($fields[$i]['name']))
										{
										?>
										<li>
										<label><?php echo $fields[$i]['name'] ?><?php if($fields[$i]['req'] && ler('lefx_req_indicator')) { echo '<span> *</span>';} ?></label>
										<?php if (($fields[$i]['type']) == "textbox"): ?>
											<input type="text" id="custom_field1" name="<?php echo $fields[$i]['id']; ?>" maxlength=250 />
										<?php elseif(($fields[$i]['type']) == "textarea") :?>
											<textarea name="<?php echo $fields[$i]['id']; ?>" rows="10" cols="40" maxlength="250"></textarea>					
										<?php else: ?>
											<div class="fieldset">
											<?php 
												$options = get_option("lefx_cust_field{$fields[$i]['index']}_option_values");
												$options = explode(",", $options);
											
											 ?>
											<?php if(($fields[$i]['type']) == "dropdown"):?>
												<select name="<?php echo $fields[$i]['id']; ?>">
													<?php foreach($options as $opt):?>
														<option value="<?php echo htmlspecialchars($opt) ?>"><?php echo $opt?></option>
													<?php endforeach;?>
												</select>
											
											<?php elseif(($fields[$i]['type']) == "checkboxes"):?>
													<?php foreach($options as $k => $opt):?>
														<div class="checkbox-group">
															<input type="checkbox" id="<?php echo $fields[$i]['id'] . "$k"; ?>" value="<?php echo $opt?>" name="<?php echo $fields[$i]['id']; ?>[]" />
															<label for="<?php echo $fields[$i]['id'] . "$k"; ?>"><?php echo $opt?></label>	
														</div>
													<?php endforeach;?>
											<?php elseif(($fields[$i]['type']) == "radiobuttons"):?>
													<?php foreach($options as $k => $opt):?>
														<div class="radio-group">
															<input type="radio" id="<?php echo $fields[$i]['id'] . "$k"; ?>" value="<?php echo $opt?>" name="<?php echo $fields[$i]['id']; ?>[]" />
															<label for="<?php echo $fields[$i]['id'] . "$k"; ?>"><?php echo $opt?></label>														
														</div>
													<?php endforeach;?>
											<?php endif; ?>
											<div class="clear"></div>
											</div>
										<?php endif;?>
										<div class="clear"></div>
										<div class="error" id="lefx_cust_field<?php echo $fields[$i]['index'] ?>">This field is required</div>
										<?php
										}
										
									}
								?>
									</li>