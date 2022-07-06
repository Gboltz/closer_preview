<?php

session_start();
require('config.php');
require('class/database.class.php');
require('class/action.class.php');
require('class/session.class.php');
require('class/custom.class.php');
require('class/helper.class.php');
require('class/view.class.php');

$action = new Action;
$pdo = new PDO('mysql:dbname=portfolioBuilder;host=localhost', 'root', 'root');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
