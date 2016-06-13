<?php
	Configure::write('App.debug', 0);
	Configure::write('Display.time', false);
	echo $content_for_layout;
