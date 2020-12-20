<?php 
date_default_timezone_set('Asia/Manila');

//include database
include('db/conn.php');

//for logo
$logo_sql = $conn->query("SELECT * FROM `acc_logo` WHERE 1");
$logo_row = $logo_sql->fetch_array();


?>