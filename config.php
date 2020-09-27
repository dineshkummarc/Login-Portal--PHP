<?php
   define('DB_HOST', 'localhost');
define('DB_NAME', 'FinalIssues');
define('DB_USER','root');
define('DB_PASSWORD','');

$con=($GLOBALS["___mysqli_ston"] = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD)) or die("Failed to connect to mysql: " . mysqli_error($GLOBALS["___mysqli_ston"]));
$db=mysqli_select_db($con, constant('DB_NAME')) or die("Failed to connect to mysql: " . mysqli_error($GLOBALS["___mysqli_ston"]));

?>