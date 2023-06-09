<?php
$databaseHost = '192.168.20.252';
$databaseName = 'test';
$databaseUsername = 'example';
$databasePassword = 'password';

// Open a new connection to the MySQL server
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
