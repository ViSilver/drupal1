<?php
/**
 * @file
 * Template for a 2 column panel layout.
 *
 * This template provides a two column panel display layout, with
 * each column roughly equal in width.
 *
 * Variables:
 * - $id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:
 *   - $content['left']: Content in the left column.
 *   - $content['right']: Content in the right column.
 */
?>
<div class="panel-display panel-1row2cols clearfix" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>

  <div class="panel-1row2cols-row clearfix">
  	<?php print $content['top']; ?>
  </div>

  <div class="panel-1row2cols-row clearfix">
  	<div class="panel-1row2cols-left clearfix">
  		<?php print $content['left']; ?>
  	</div>

  	<div class="panel-1row2cols-right clearfix">
  		<?php print $content['right']; ?>
  	</div>
  </div>
</div>
