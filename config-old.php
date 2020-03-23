<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

//$CFG->dbtype    = 'mysqli';
$CFG->dbtype    = 'mariadb';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'localhost';
$CFG->dbname    = 'moodle';
$CFG->dbuser    = 'root';
$CFG->dbpass    = '';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => '',
  'dbsocket' => '',
  'dbcollation' => 'utf8mb4_unicode_ci',
);

//$CFG->wwwroot   = 'http://localhost/moodle';
$CFG->wwwroot   = 'http://192.168.0.119/moodle';
$CFG->dataroot  = 'D:\\XAMP\\moodledata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
