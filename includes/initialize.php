<?php

ob_start();

require_once('db_conn.php');
date_default_timezone_set('Europe/London');
$db = db_connect();

$errors = [];
 ?>
