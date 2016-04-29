 <html><head><title>Account</title></head> 
<body>
<?php if(!empty($_POST['email'])) {
 echo "<table border=1>
 <tr><th>ID</th><th>username</th><th>password</th><th>email</th>
 <th>birthdate</th></tr>";
 include 'db.inc.php';
 // Connect to MySQL DBMS
 if (!($connection = @ mysql_connect($hostName, $username,
 $password)))
 showerror();
 // Use the cars database
 if (!mysql_select_db($databaseName, $connection))
 showerror();
 // Create SQL statement
 $email = $_POST['email'];
 $query = "SELECT (SUBSTRING_INDEX(SUBSTR(email, INSTR(email, '@') + 1),'.',1)) FROM account";
     //"SELECT * FROM account WHERE email = '$email'";
    
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
// echo "</table>";
} ?> </body> </html>
 