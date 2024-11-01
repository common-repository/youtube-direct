<div class="wrap">
    <div id="icon-pisytd-settings" class="icon32">
    	<img src="<?php echo plugins_url('img/pisytd32.png', __FILE__)?>">
    </div>
	<h2>YouTube Direct Settings <a href="admin.php?page=pisytd" class="add-new-h2">Upload</a></h2>
	<form method="post" action="options.php">
		<?php settings_fields('pisytd_settings'); ?>
		<input type="hidden" name="action" value="update">
		<table class="form-table">
			<tbody>
				<tr valign="top">
					<th scope="row">
						<label for="pisytd_url">URL</label>
					</th>
					<td>
						<input name="pisytd_url" type="text" id="pisytd_url" value="<?php echo get_option('pisytd_url'); ?>" class="regular-text code rtl">
						<span>.appspot.com</span> <span class="description">Do not include http:// or https://</span>
					</td>
				</tr>
				<tr valign="top">
					<th scope="row">
						<label for="pisytd_admin_name">Admin Name</label>
					</th>
					<td>
						<input name="pisytd_admin_name" type="text" id="pisytd_admin_name" value="<?php echo get_option('pisytd_admin_name'); ?>" class="regular-text code rtl">
					</td>
				</tr>
				<tr valign="top">
					<th scope="row">
						<label for="pisytd_admin_user">Admin Username</label>
					</th>
					<td>
						<input name="pisytd_admin_user" type="text" id="pisytd_admin_user" value="<?php echo get_option('pisytd_admin_user'); ?>" class="regular-text code rtl">
					</td>
				</tr>
			</tbody>
		</table>
		<h3>Assignment<?php if (get_option('pisytd_a1_name')!=null){ echo ' '.get_option('pisytd_a1_name'); } ?></h3>
		<table class="form-table">
			<tbody>
				<tr valign="top">
					<th scope="row">
						<label for="pisytd_a1_name">Name</label>
					</th>
					<td>
						<input name="pisytd_a1_name" type="text" id="pisytd_a1_name" value="<?php echo get_option('pisytd_a1_name'); ?>" class="regular-text code rtl">
					</td>
				</tr>
				<tr valign="top">
					<th scope="row">
						<label for="pisytd_a1_id">ID</label>
					</th>
					<td>
						<input name="pisytd_a1_id" type="text" id="pisytd_a1_id" value="<?php echo get_option('pisytd_a1_id'); ?>" class="regular-text code rtl">
						<span class="description">ID must match your YouTube Direct assignment ID.</span>
					</td>
				</tr>
			</tbody>
		</table>
		<?php if (get_option('pisytd_a1_id')!=null){ ?>
		<h3>Assignment<?php if (get_option('pisytd_a2_name')!=null){ echo ' '.get_option('pisytd_a2_name'); } ?></h3>
		<table class="form-table">
			<tbody>
				<tr valign="top">
					<th scope="row">
						<label for="pisytd_a2_name">Name</label>
					</th>
					<td>
						<input name="pisytd_a2_name" type="text" id="pisytd_a2_name" value="<?php echo get_option('pisytd_a2_name'); ?>" class="regular-text code rtl">
					</td>
				</tr>
				<tr valign="top">
					<th scope="row">
						<label for="pisytd_a2_id">ID</label>
					</th>
					<td>
						<input name="pisytd_a2_id" type="text" id="pisytd_a2_id" value="<?php echo get_option('pisytd_a2_id'); ?>" class="regular-text code rtl">
						<span class="description">ID must match your YouTube Direct assignment ID.</span>
					</td>
				</tr>
			</tbody>
		</table>
		<?php } if (get_option('pisytd_a2_id')!=null){ ?>
		<h3>Assignment<?php if (get_option('pisytd_a3_name')!=null){ echo ' '.get_option('pisytd_a3_name'); } ?></h3>
		<table class="form-table">
			<tbody>
				<tr valign="top">
					<th scope="row">
						<label for="pisytd_a3_name">Name</label>
					</th>
					<td>
						<input name="pisytd_a3_name" type="text" id="pisytd_a3_name" value="<?php echo get_option('pisytd_a3_name'); ?>" class="regular-text code rtl">
					</td>
				</tr>
				<tr valign="top">
					<th scope="row">
						<label for="pisytd_a3_id">ID</label>
					</th>
					<td>
						<input name="pisytd_a3_id" type="text" id="pisytd_a3_id" value="<?php echo get_option('pisytd_a3_id'); ?>" class="regular-text code rtl">
						<span class="description">ID must match your YouTube Direct assignment ID.</span>
					</td>
				</tr>
			</tbody>
		</table>
		<?php } if (get_option('pisytd_a3_id')!=null){ ?>
		<h3>Assignment<?php if (get_option('pisytd_a4_name')!=null){ echo ' '.get_option('pisytd_a4_name'); } ?></h3>
		<table class="form-table">
			<tbody>
				<tr valign="top">
					<th scope="row">
						<label for="pisytd_a4_name">Name</label>
					</th>
					<td>
						<input name="pisytd_a4_name" type="text" id="pisytd_a4_name" value="<?php echo get_option('pisytd_a4_name'); ?>" class="regular-text code rtl">
					</td>
				</tr>
				<tr valign="top">
					<th scope="row">
						<label for="pisytd_a4_id">ID</label>
					</th>
					<td>
						<input name="pisytd_a4_id" type="text" id="pisytd_a4_id" value="<?php echo get_option('pisytd_a4_id'); ?>" class="regular-text code rtl">
						<span class="description">ID must match your YouTube Direct assignment ID.</span>
					</td>
				</tr>
			</tbody>
		</table>
		<?php } if (get_option('pisytd_a4_id')!=null){ ?>
		<h3>Assignment<?php if (get_option('pisytd_a5_name')!=null){ echo ' '.get_option('pisytd_a5_name'); } ?></h3>
		<table class="form-table">
			<tbody>
				<tr valign="top">
					<th scope="row">
						<label for="pisytd_a5_name">Name</label>
					</th>
					<td>
						<input name="pisytd_a5_name" type="text" id="pisytd_a5_name" value="<?php echo get_option('pisytd_a5_name'); ?>" class="regular-text code rtl">
					</td>
				</tr>
				<tr valign="top">
					<th scope="row">
						<label for="pisytd_a5_id">ID</label>
					</th>
					<td>
						<input name="pisytd_a5_id" type="text" id="pisytd_a5_id" value="<?php echo get_option('pisytd_a5_id'); ?>" class="regular-text code rtl">
						<span class="description">ID must match your YouTube Direct assignment ID.</span>
					</td>
				</tr>
			</tbody>
		</table>
		<?php } if (get_option('pisytd_a5_id')!=null){ ?>
		<h3>Assignment<?php if (get_option('pisytd_a6_name')!=null){ echo ' '.get_option('pisytd_a6_name'); } ?></h3>
		<table class="form-table">
			<tbody>
				<tr valign="top">
					<th scope="row">
						<label for="pisytd_a6_name">Name</label>
					</th>
					<td>
						<input name="pisytd_a6_name" type="text" id="pisytd_a6_name" value="<?php echo get_option('pisytd_a6_name'); ?>" class="regular-text code rtl">
					</td>
				</tr>
				<tr valign="top">
					<th scope="row">
						<label for="pisytd_a6_id">ID</label>
					</th>
					<td>
						<input name="pisytd_a6_id" type="text" id="pisytd_a6_id" value="<?php echo get_option('pisytd_a6_id'); ?>" class="regular-text code rtl">
						<span class="description">ID must match your YouTube Direct assignment ID.</span>
					</td>
				</tr>
			</tbody>
		</table>
		<?php } if (get_option('pisytd_a6_id')!=null){ ?>
		<h3>Assignment<?php if (get_option('pisytd_a7_name')!=null){ echo ' '.get_option('pisytd_a7_name'); } ?></h3>
		<table class="form-table">
			<tbody>
				<tr valign="top">
					<th scope="row">
						<label for="pisytd_a7_name">Name</label>
					</th>
					<td>
						<input name="pisytd_a7_name" type="text" id="pisytd_a7_name" value="<?php echo get_option('pisytd_a7_name'); ?>" class="regular-text code rtl">
					</td>
				</tr>
				<tr valign="top">
					<th scope="row">
						<label for="pisytd_a7_id">ID</label>
					</th>
					<td>
						<input name="pisytd_a7_id" type="text" id="pisytd_a7_id" value="<?php echo get_option('pisytd_a7_id'); ?>" class="regular-text code rtl">
						<span class="description">ID must match your YouTube Direct assignment ID.</span>
					</td>
				</tr>
			</tbody>
		</table>
		<?php } ?>
		<p class="submit">
			<input type="submit" name="submit" id="submit" class="button-primary" value="<?php _e('Save Changes') ?>">
		</p>
	</form>
</div>