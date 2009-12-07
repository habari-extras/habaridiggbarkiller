<?php
/**
 * habaridiggbarkiller Plugin
 *
 * A plugin for Habari that removes the diggbar frame
 * adapted from http://farukat.es/journal/2009/04/225-javascript-diggbar-killer-not-blocker
 * 
 * @package habaridiggbarkiller
 */


class habaridiggbarkiller extends Plugin
{
	/**
	 * Add update beacon support
	 **/
	public function action_update_check()
	{
	 	Update::add( 'habaridiggbarkiller', '506FC1DE-263A-11DE-8510-152456D89593', $this->info->version );
	}
	

	public function action_template_header()
	{
		?>
		
			
<!-- habaridiggbarkiller -->
<script type="text/javascript">
if (top !== self && document.referrer.match(/digg\.com\/\w{1,8}/)) {
  top.location.replace(self.location.href);
		}
</script>
<!-- habaridiggbarkiller END -->

		
		<?php 	}	
	
}

?>
