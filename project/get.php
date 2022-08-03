<?php

require_once "config.php";

$db = db();
function gets($conn){
	
$sql = "SELECT * FROM numbers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo  $row["number"] ."<br>";
  }
} else {
  echo "0 results";
}
};


gets($db);

$db->close();
