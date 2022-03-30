<?php
include '../class.php';
$database = new database;
$database->insert($_POST);
header('Location: ../index.php');
