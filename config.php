<?php  /// Moodle Configuration File

unset($CFG);

$CFG->dbtype    = 'mysqli';
$CFG->dbhost    = 'localhost';
$CFG->dbname    = 'rtlMoodle_198';
$CFG->dbuser    = 'rtlmoodleadmin';
$CFG->dbpass    = 'rtlmoodleadmin';
$CFG->dbpersist =  false;
$CFG->prefix    = 'mdl_';

$CFG->wwwroot   = 'http://localhost/rtlMoodle';
$CFG->dirroot   = '/var/www/rtlMoodle';
$CFG->dataroot  = '/var/rtlMoodle-moodledata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 00777;  // try 02777 on a server in Safe Mode

require_once("$CFG->dirroot/lib/setup.php");
// MAKE SURE WHEN YOU EDIT THIS FILE THAT THERE ARE NO SPACES, BLANK LINES,
// RETURNS, OR ANYTHING ELSE AFTER THE TWO CHARACTERS ON THE NEXT LINE.
?>