<?php

/**
 * Class LP_Theme_Support_TwentySeventeen
 *
 * @since 4.x.x
 */
class LP_Theme_Support_TwentySeventeen extends LP_Theme_Support_Base {
	public function __construct() {
		parent::__construct();
	}

	public function content_wrapper_start() {
		echo '<div class="wrap">';
		echo '<div id="primary" class="content-area twentyseventeen">';
		echo '<main id="main" class="site-main" role="main">';
	}

	public function content_wrapper_end() {
		echo '</main>';
		echo '</div>';
		echo '</div>';
	}
}

return new LP_Theme_Support_TwentySeventeen();