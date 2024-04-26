<?php
include('session_check.php');
 	include('db.php');
 	 $user=$_SESSION['username'];

$sql = "SELECT * FROM `rep_id` WHERE `rep_id`=$user";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["rep_id"];
  }
} else {
  echo "0 results";
  echo $user;
}
$con->close();


?>