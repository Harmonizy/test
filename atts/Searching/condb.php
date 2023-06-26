<?php
$con= mysqli_connect("localhost","root","","db_books") or die("Error: " . mysqli_error($con));
mysqli_query($con, "db_books 'utf8' ");
date_default_timezone_set('Asia/Bangkok');
//devbanban.com

?>