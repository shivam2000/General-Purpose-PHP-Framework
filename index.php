<?php 

session_start();

// including functions
include 'application/processor/functions.php';

// include configurations
include "application/processor/config.php";

// linking stylesheets
include "application/processor/link_styles.php";

// linking scripts
include "application/processor/link_scripts.php";

// including routes
include "application/processor/routes.php";

// linking scripts
include "application/processor/link_styles.php";

	developer_show();
?>