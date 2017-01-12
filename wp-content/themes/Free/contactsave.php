<?php
require('/var/www/html/wordpressdemo/wp-load.php');

$name=$_POST['uname'];
$email=$_POST['email'];
$message=$_POST['body'];
global $wpdb;
$sql="INSERT INTO wp_contact(`name`,`email`,`message`) VALUES('$name','$email','$message')";
$res=$wpdb->query($sql);
if($res):
echo true;
 
else :
echo false;
endif;

?>