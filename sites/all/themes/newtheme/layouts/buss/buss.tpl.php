<?php
/**
 * @file
 * Template for a buss panel layout.
 *
 * This template provides a buss panel display layout, with
 * each column roughly equal in width.
 *
 */
?>

<div class="panel-display panel-buss clearfix"> <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>

	<div class="panel-buss-left-col">
	   <div class="panel-buss-first-title clearfix">
        <h1><?php print $content['first_title']; ?></h1>
     </div>

     <div class="panel-buss-first-col clearfix">
        <div class="panel-buss-first-left-col clearfix">
            <?php print $content['first_left_col']; ?>
        </div>

        <div class="panel-buss-first-right-col clearfix">
            <?php print $content['first_right_col']; ?>
        </div>
     </div>

     <div class="panel-buss-second-title clearfix">
        <h2><?php print $content['second_title']; ?></h2>
     </div>

     <div class="panel-buss-second-cols clearfix">
        <div class="panel-buss-second-left-col clearfix">
            <?php print $content['second_left_col']; ?>
        </div>

        <div class="panel-buss-second-right-col clearfix">
            <?php print $content['second_right_col']; ?>
        </div>
     </div>

     <div class="panel-buss-third-title clearfix">
        <h2><?php print $content['third_title']; ?></h2>
     </div>

     <div class="panel-buss-third-cols clearfix">
        <div class="panel-buss-third-left-col clearfix">
            <?php print $content['third_left_col']; ?>
        </div>

        <div class="panel-buss-third-right-col clearfix">
            <?php print $content['third_right_col']; ?>
        </div>
     </div>

     <div class="panel-buss-fourth-title clearfix">
        <h1><?php print $content['fourth_title']; ?></h1>
     </div>

     <div class="panel-buss-fourth-cols clearfix">
        <div class="panel-buss-fourth-left-col clearfix">
            <?php print $content['fourth_left_col']; ?>
        </div>

        <div class="panel-buss-fourth-right-col clearfix">
            <?php print $content['fourth_right_col']; ?>
        </div>
     </div>

     <div class="panel-buss-fith-title clearfix">
        <h2><?php print $content['fith_title']; ?></h2>
     </div>

     <div class="panel-buss-fith-cols clearfix">
        <div class="panel-buss-fith-left-col clearfix">
            <?php print $content['fith_left_col']; ?>
        </div>

        <div class="panel-buss-fith-right-col clearfix">
            <?php print $content['fith_right_col']; ?>
        </div>
     </div>
	</div>

	<div class="panel-buss-right-col">
		<?php print $content['right']; ?>
	</div>

</div>