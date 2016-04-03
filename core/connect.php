<?php

//Start the session
session_start();

//Check for empty fields
if(empty($_POST['username']) || empty($_POST['password']))
   {
	echo "No arguments Provided!";
	return false;
   }
  //  else {
  //    echo "lol";
  //  }

$username = $_POST['username'];
$password = $_POST['password'];
$_SESSION['username'] = $username;
$_SESSION['password'] = $password;

// echo "test.php $username $password";

$dbconn = pg_connect("host=web0.site.uottawa.ca port=15432 dbname=$username user=$username password=$password")
    or die('Could not connect: ' . pg_last_error());
// echo "\n\n";
// echo pg_last_error();


//Check to see if a proper connection to the database was made
if($dbconn == "FALSE")
{
  echo "Failed to connect";
  return false;
}
else {
  // echo $dbconn;
}

//Test Query for now
$query = "set search_path=\"GroupAssign\"; SELECT * FROM MOVIE";
$result = pg_query($query);// or die('Query failed: ' . pg_last_error());
echo json_encode(pg_fetch_array($result, null, PGSQL_ASSOC));
echo "\n\n" + $result;

// Printing results in HTML
// echo "<table>\n";
// while ($line = pg_fetch_array($result, null, PGSQL_ASSOC))
// {
//     echo "\t<tr>\n";
//     foreach ($line as $col_value) {
//         echo "\t\t<td>$col_value</td>\n";
//     }
//     echo "\t</tr>\n";
// }
// echo "</table>\n";

return true;
?>
