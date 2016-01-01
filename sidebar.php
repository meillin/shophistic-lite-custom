<?php

if ( is_active_sidebar( 'Sidebar Widgets' ) ) {

?>
    <aside id="sidebar" class="col-sm-4 col-md-2 hidden-xs">

		<?php
		if ( function_exists( 'dynamic_sidebar' ) && dynamic_sidebar( 'Sidebar Widgets' ) ) : else :
        endif;
        ?>

        <div class="clearfix"></div>
	</aside>

<?php }//if is_active_sidebar ?>