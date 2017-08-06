<?php 
$con = mysql_connect("localhost", "root", "");
if(!$con) {
	die('Could not connect: ' . mysql_error());
}

mysql_select_db("my_db", $con);

$sql1 = "INSERT INTO Persons 
		 (FirstName, LastName, Age)
		 VALUES('Peter', 'Griffin', '35')";
$sql2 = "INSERT INTO Persons 
		 (FirstName, LastName, Age)
		 VAlUES('Glenn', 'Quagmire', '33')";
mysql_query($sql1);
mysql_query($sql2);

mysql_close($con);

 ?>