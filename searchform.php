<form action="<?php echo home_url(); ?>/" id="searchform" method="get">
  <input type="text" style="width:95%;" id="s" name="s" value="<?php _e('To search type and hit enter', 'thezoc') ?>" onfocus="if(this.value=='<?php _e('To search type and hit enter', 'thezoc') ?>')this.value='';" onblur="if(this.value=='')this.value='<?php _e('To search type and hit enter', 'thezoc') ?>';" autocomplete="off" />
  <input type="submit" value="Search" id="searchsubmit" class="hidden" />
</form>
