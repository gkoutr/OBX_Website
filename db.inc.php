<?php
/*
* db.inc.php
* These are the DBMS credentials and the database name
*/
$hostName = "localhost:/usr/cis/var/triton.sock";
$databaseName = "gkoutr2db";  
$username = "gkoutr2";             
$password = "Cosc*cd5w";               
// Show an error and stop the script
function showerror()
{
if (mysql_error())
die("Error " . mysql_errno() . " : " . mysql_error());
else
die ("Could not connect to the DBMS");
}
?>