<?php

//Start the session
session_start();

include 'db.php';

$movieName = $_POST['movieName'];
$actors = $_POST['actorName'];

$actorname = explode(" ", $actors);

if(empty($actors) && !empty($movieName))
{
  // echo "$movieName\n";
  $query = "SELECT M.MovieId, M.Name FROM Movie M WHERE M.Name ~* '^$movieName';";
}
else if (!empty($actors) && !empty($movieName))
{
  // print_r($actorname);
  $firstname=$actorname[0];
  // $lastname=$actorname[0];
  $query = "SELECT M.MovieId, M.Name FROM Movie M, Actor A, ActorStars S WHERE M.Name ~* '^$movieName' AND A.ActorId=S.ActorId AND S.MovieId=M.MovieId AND (A.firstname ~* '^$firstname' OR A.lastname ~* '^$firstname');";
}
else {
  // echo "lol";
  $query = "SELECT * FROM Movie;";
}

//$studios = $_POST['studios'];
//$directors = $_POST['directors'];
//Test Query for now
 // $query = "SELECT * FROM Movie";
 $result = pg_query($dbconn, $query);// or die('Query failed: ' . pg_last_error());
 $movieInfo = pg_fetch_all($result);

// print_r($movieInfo);
echo json_encode($movieInfo);
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
