<?php

// Allows for extending functions in the parent theme.
require_once('lib/Helpers.php');

// For composer dependencies
require_once get_template_directory().'/vendor/autoload.php';
require_once 'vendor/autoload.php';

if (class_exists('Handle\\Init')) :
    Handle\Init::register_services();
endif;


