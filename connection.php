<?php
/**
 * APPLICATION NAME: Online Recruitment System with a Job Portal
 * Author: Baraka Mark Bright
 * This is the main connector to the database. Without it, there won't be any
 * connection and some things will stop working/rendering
 */

/*
 * The name of the database that holds all our tabular data.
 */
define('DB_NAME', 'jobportal');

/*
 * The username of the database. Needed in addition to password for connection
 */
define("DB_USER", "root");

/*
 * Database password. Needed for connection to database(if set)
 */
define("DB_PASS", "");

/*
 * Database host. This is localhost since we're developing locally
 */
define("DB_HOST", "localhost");

/*
 * The main connection to the database is actually here.
 */

/*
 * @var $db_con will hold details to our connection
 */
$db_con = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

/*
 * Character set to use for our connection. We'll choose utf-8 since it covers
 * more characters than ASCII.
 */
$db_con->set_charset("utf8");
?>
