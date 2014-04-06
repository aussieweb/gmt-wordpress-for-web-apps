<?php

/* ======================================================================

	Plugin Name: WordPress for Web Apps
	Plugin URI: https://github.com/cferdinandi/web-app-starter-kit/
	Description: Transform WordPress into a web app engine. Adjust your settings under <a href="admin.php?page=plugin_options">Web App Options</a>.
	Version: 3.6
	Author: Chris Ferdinandi
	Author URI: http://gomakethings.com
	License: MIT

 * ====================================================================== */

require_once( dirname( __FILE__) . '/wpwebapp-helpers.php' );
require_once( dirname( __FILE__) . '/wpwebapp-options.php' );
require_once( dirname( __FILE__) . '/wpwebapp-security.php' );
require_once( dirname( __FILE__) . '/wpwebapp-user-access.php' );
require_once( dirname( __FILE__) . '/wpwebapp-navigation.php' );
require_once( dirname( __FILE__) . '/wpwebapp-emails.php' );
require_once( dirname( __FILE__) . '/wpwebapp-forms.php' );
require_once( dirname( __FILE__) . '/wpwebapp-display-gravatar.php' );

?>