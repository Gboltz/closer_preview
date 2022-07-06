<?php

define("DBHOST", "localhost");
define("DBUSER", "root");
define("DBPASS", "root");
define("DBNAME", "portfolioBuilder");

$dsn = "mysql:dbname=" . DBNAME . ";host=" . DBHOST;

$db = new PDO($dsn, DBUSER, DBPASS);

$db->exec("SET NAMES utf8");

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
