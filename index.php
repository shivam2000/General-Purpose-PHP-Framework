<?php 

session_start();

// including functions
include 'application/processor/core_functions.php';

// include configurations
include "application/processor/config.php";

// including languages
include "application/languages/lang_config.php";

// connecting to db
include "application/database/connect.php";

// including vital functions for security and other factors
include "application/processor/vital_functions.php";

// including routes
include "application/processor/routes.php";


?>