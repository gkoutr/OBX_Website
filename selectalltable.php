<html><head><title>Account</title></head>
<body>
<table border=1>
<tr><th>ID</th><th>username</th><th>password</th><th>email</th>
<th>DOB</th></tr>
<?php
include 'db.inc.php';
// Connect to MySQL DBMS
if (!($connection = @ mysql_connect($hostName, $username,
  $password)))
  showerror();
// Use the cars database
if (!mysql_select_db($databaseName, $connection))
  showerror();
 
// Create SQL statement
$query = "SELECT * FROM account";
// Execute SQL statement
if (!($result = @ mysql_query ($query, $connection)))
  showerror();
// Display results
while ($row = @ mysql_fetch_array($result))
  echo "<tr><td>{$row["id"]}</td>
<td>{$row["username"]}</td>
<td>{$row["password"]}</td>
<td>{$row["email"]}</td>
<td>{$row["birthdate"]}</td></tr>";
?>
</table></body>
</html>
 