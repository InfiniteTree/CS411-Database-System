<?php
session_start();
?>
<?php
$_SESSION['post-data']['singer']="";
$_SESSION['post-data']['name']="";
$_SESSION['post-data']['year1']="";
$_SESSION['post-data']['year2']="";
$_SESSION['post-data']['genre']="";
header("Location:test.php");
exit;
?>