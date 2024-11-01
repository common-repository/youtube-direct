<div class="wrap">
    <div id="icon-pisytd-upload" class="icon32">
    	<img src="<?php echo plugins_url('img/pisytd32.png', __FILE__)?>">
    </div>
	<h2>YouTube Direct Upload</h2>
	<div id="message" class="error">
		<p><strong>Please leave this page open, even if you see the 'Thank you for your submission.' message.</strong></p>
		<?php if (get_option('pisytd_admin_name')!=null){ ?><p>Message <?php if (get_option('pisytd_admin_user')!=null){ ?><a href="<?php echo network_site_url().'members/'.get_option('pisytd_admin_user'); ?>"><?php } ?><strong><?php echo get_option('pisytd_admin_name'); ?></strong><?php if (get_option('pisytd_admin_user')!=null){ ?></a><?php } ?> to check if your upload is complete.</p><?php } ?>
		<p>Details of this issue can be found at the <a href="http://code.google.com/p/youtube-direct/issues/detail?id=94"><strong>YouTube Direct Issues</strong></a> page.</p>
	</div>
<?php
if (is_plugin_active('pigg/pigg.php')) {
	echo('<ul class="subsubsub"><li class="branding"><a href="http://pluginstudios.co.uk/games/wp-admin/admin.php?page=pigg&tab=branding&tab2=videos">Branding</a> |</li><li class="help"><a href="admin.php?page=pigg&tab=help&tab2=ytd">Help</a></li></ul><div class="clear"></div>');
}
?>
	<form>
		<script type="text/javascript" src="https://<?php echo get_option('pisytd_url'); ?>.appspot.com/js/ytd-embed.js"></script>

		<?php if (get_option('pisytd_a1_id')!=null){ ?>
		<!-- Assignment 1 -->
		<br/>
		<script type="text/javascript">
			var ytdInitFunction = function() {
				var ytd = new Ytd();
				ytd.setAssignmentId("<?php echo get_option('pisytd_a1_id'); ?>");
				ytd.setCallToAction("callToActionId-<?php echo get_option('pisytd_a1_id'); ?>");
				var containerWidth = 350;
				var containerHeight = 550;
				ytd.setYtdContainer("ytdContainer-<?php echo get_option('pisytd_a1_id'); ?>", containerWidth, containerHeight);
				ytd.ready();
			};
			if (window.addEventListener) {
				window.addEventListener("load", ytdInitFunction, false);
			} else if (window.attachEvent) {
				window.attachEvent("onload", ytdInitFunction);
			}
		</script>
		<a id="callToActionId-<?php echo get_option('pisytd_a1_id'); ?>" href="javascript:void(0);" class="button"><?php if (get_option('pisytd_a1_name')!=null){ echo get_option('pisytd_a1_name'); } else { echo 'Assignment 1'; } ?></a>
		<div id="ytdContainer-<?php echo get_option('pisytd_a1_id'); ?>"></div>
		<?php } if (get_option('pisytd_a2_id')!=null){ ?>
		<!-- Assignment 2 -->
		<br/>
		<script type="text/javascript">
			var ytdInitFunction = function() {
				var ytd = new Ytd();
				ytd.setAssignmentId("<?php echo get_option('pisytd_a2_id'); ?>");
				ytd.setCallToAction("callToActionId-<?php echo get_option('pisytd_a2_id'); ?>");
				var containerWidth = 350;
				var containerHeight = 550;
				ytd.setYtdContainer("ytdContainer-<?php echo get_option('pisytd_a2_id'); ?>", containerWidth, containerHeight);
				ytd.ready();
			};
			if (window.addEventListener) {
				window.addEventListener("load", ytdInitFunction, false);
			} else if (window.attachEvent) {
				window.attachEvent("onload", ytdInitFunction);
			}
		</script>
		<a id="callToActionId-<?php echo get_option('pisytd_a2_id'); ?>" href="javascript:void(0);" class="button"><?php if (get_option('pisytd_a2_name')!=null){ echo get_option('pisytd_a2_name'); } else { echo 'Assignment 2'; } ?></a>
		<div id="ytdContainer-<?php echo get_option('pisytd_a2_id'); ?>"></div>
		<?php } if (get_option('pisytd_a3_id')!=null){ ?>
		<!-- Assignment 3 -->
		<br/>
		<script type="text/javascript">
			var ytdInitFunction = function() {
				var ytd = new Ytd();
				ytd.setAssignmentId("<?php echo get_option('pisytd_a3_id'); ?>");
				ytd.setCallToAction("callToActionId-<?php echo get_option('pisytd_a3_id'); ?>");
				var containerWidth = 350;
				var containerHeight = 550;
				ytd.setYtdContainer("ytdContainer-<?php echo get_option('pisytd_a3_id'); ?>", containerWidth, containerHeight);
				ytd.ready();
			};
			if (window.addEventListener) {
				window.addEventListener("load", ytdInitFunction, false);
			} else if (window.attachEvent) {
				window.attachEvent("onload", ytdInitFunction);
			}
		</script>
		<a id="callToActionId-<?php echo get_option('pisytd_a3_id'); ?>" href="javascript:void(0);" class="button"><?php if (get_option('pisytd_a3_name')!=null){ echo get_option('pisytd_a3_name'); } else { echo 'Assignment 3'; } ?></a>
		<div id="ytdContainer-<?php echo get_option('pisytd_a3_id'); ?>"></div>
		<?php } if (get_option('pisytd_a4_id')!=null){ ?>
		<!-- Assignment 4 -->
		<br/>
		<script type="text/javascript">
			var ytdInitFunction = function() {
				var ytd = new Ytd();
				ytd.setAssignmentId("<?php echo get_option('pisytd_a4_id'); ?>");
				ytd.setCallToAction("callToActionId-<?php echo get_option('pisytd_a4_id'); ?>");
				var containerWidth = 350;
				var containerHeight = 550;
				ytd.setYtdContainer("ytdContainer-<?php echo get_option('pisytd_a4_id'); ?>", containerWidth, containerHeight);
				ytd.ready();
			};
			if (window.addEventListener) {
				window.addEventListener("load", ytdInitFunction, false);
			} else if (window.attachEvent) {
				window.attachEvent("onload", ytdInitFunction);
			}
		</script>
		<a id="callToActionId-<?php echo get_option('pisytd_a4_id'); ?>" href="javascript:void(0);" class="button"><?php if (get_option('pisytd_a4_name')!=null){ echo get_option('pisytd_a4_name'); } else { echo 'Assignment 4'; } ?></a>
		<div id="ytdContainer-<?php echo get_option('pisytd_a4_id'); ?>"></div>
		<?php } if (get_option('pisytd_a5_id')!=null){ ?>
		<!-- Assignment 5 -->
		<br/>
		<script type="text/javascript">
			var ytdInitFunction = function() {
				var ytd = new Ytd();
				ytd.setAssignmentId("<?php echo get_option('pisytd_a5_id'); ?>");
				ytd.setCallToAction("callToActionId-<?php echo get_option('pisytd_a5_id'); ?>");
				var containerWidth = 350;
				var containerHeight = 550;
				ytd.setYtdContainer("ytdContainer-<?php echo get_option('pisytd_a5_id'); ?>", containerWidth, containerHeight);
				ytd.ready();
			};
			if (window.addEventListener) {
				window.addEventListener("load", ytdInitFunction, false);
			} else if (window.attachEvent) {
				window.attachEvent("onload", ytdInitFunction);
			}
		</script>
		<a id="callToActionId-<?php echo get_option('pisytd_a5_id'); ?>" href="javascript:void(0);" class="button"><?php if (get_option('pisytd_a5_name')!=null){ echo get_option('pisytd_a5_name'); } else { echo 'Assignment 5'; } ?></a>
		<div id="ytdContainer-<?php echo get_option('pisytd_a5_id'); ?>"></div>
		<?php } if (get_option('pisytd_a6_id')!=null){ ?>
		<!-- Assignment 6 -->
		<br/>
		<script type="text/javascript">
			var ytdInitFunction = function() {
				var ytd = new Ytd();
				ytd.setAssignmentId("<?php echo get_option('pisytd_a6_id'); ?>");
				ytd.setCallToAction("callToActionId-<?php echo get_option('pisytd_a6_id'); ?>");
				var containerWidth = 350;
				var containerHeight = 550;
				ytd.setYtdContainer("ytdContainer-<?php echo get_option('pisytd_a6_id'); ?>", containerWidth, containerHeight);
				ytd.ready();
			};
			if (window.addEventListener) {
				window.addEventListener("load", ytdInitFunction, false);
			} else if (window.attachEvent) {
				window.attachEvent("onload", ytdInitFunction);
			}
		</script>
		<a id="callToActionId-<?php echo get_option('pisytd_a6_id'); ?>" href="javascript:void(0);" class="button"><?php if (get_option('pisytd_a6_name')!=null){ echo get_option('pisytd_a6_name'); } else { echo 'Assignment 6'; } ?></a>
		<div id="ytdContainer-<?php echo get_option('pisytd_a6_id'); ?>"></div>
		<?php } if (get_option('pisytd_a7_id')!=null){ ?>
		<!-- Assignment 7 -->
		<br/>
		<script type="text/javascript">
			var ytdInitFunction = function() {
				var ytd = new Ytd();
				ytd.setAssignmentId("<?php echo get_option('pisytd_a7_id'); ?>");
				ytd.setCallToAction("callToActionId-<?php echo get_option('pisytd_a7_id'); ?>");
				var containerWidth = 350;
				var containerHeight = 550;
				ytd.setYtdContainer("ytdContainer-<?php echo get_option('pisytd_a7_id'); ?>", containerWidth, containerHeight);
				ytd.ready();
			};
			if (window.addEventListener) {
				window.addEventListener("load", ytdInitFunction, false);
			} else if (window.attachEvent) {
				window.attachEvent("onload", ytdInitFunction);
			}
		</script>
		<a id="callToActionId-<?php echo get_option('pisytd_a7_id'); ?>" href="javascript:void(0);" class="button"><?php if (get_option('pisytd_a7_name')!=null){ echo get_option('pisytd_a7_name'); } else { echo 'Assignment 7'; } ?></a>
		<div id="ytdContainer-<?php echo get_option('pisytd_a7_id'); ?>"></div>
		<?php } ?>
	</form>
</div>