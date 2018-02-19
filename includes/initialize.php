<?php

ob_start();
session_start();

require_once('db_conn.php');
require_once('db_functions.php');
require_once('login_functions.php');

$db = db_connect();

$errors = [];

?>
