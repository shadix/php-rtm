<?php

// include path
set_include_path(get_include_path() . PATH_SEPARATOR . __DIR__ . '/src/');

// Basic classes
require_once 'Rtm/Rtm.php';
require_once 'Rtm/Request.php';
require_once 'Rtm/Client.php';
require_once 'Rtm/Response.php';
require_once 'Rtm/DataContainer.php';
require_once 'Rtm/Exception.php';

// Services
require_once 'Rtm/Service/AbstractService.php';
require_once 'Rtm/Service/Auth.php';
require_once 'Rtm/Service/Contacts.php';
require_once 'Rtm/Service/Groups.php';
require_once 'Rtm/Service/Lists.php';
require_once 'Rtm/Service/Locations.php';
require_once 'Rtm/Service/Notes.php';
require_once 'Rtm/Service/Reflection.php';
require_once 'Rtm/Service/Settings.php';
require_once 'Rtm/Service/Tasks.php';
require_once 'Rtm/Service/Test.php';
require_once 'Rtm/Service/Time.php';
require_once 'Rtm/Service/Timelines.php';
require_once 'Rtm/Service/Timezones.php';
require_once 'Rtm/Service/Transactions.php';

// API keys
define('API_KEY', '<your api key here>');
define('SECRET',  '<your secret here>');

// Start the session
session_start();
