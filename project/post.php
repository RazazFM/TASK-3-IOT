
<!DOCTYPE html>
<html>
<head>
<title>post</title>
<link rel="stylesheet" type="text/css" href="task3.css">
</head>
<body>

<form  method="post">
<input type="text" name="number">
	<button type="submit">send</button>
	</form>
</body>
</html> 


<?php

require_once "config.php";

$db = db();
function post($conn , $value){
	@$sql = "INSERT INTO numbers (number)
VALUES ($value)";
	
	if (@$conn->query($sql) === TRUE) {
	echo "send";
	
	
	};
	
	
	
	
};

post($db , @$_POST["number"]);


$db->close();


?>
