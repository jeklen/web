<?php 
$con = mysql_connect("localhost", "root", "");
if (!$con) {
	die('Could not connect: ' . mysql_);
} 
// Create table in my_db database
// 在创建表之前，首先必须选择数据库
mysql_select_db("my_db", $con);
$sql = "CREATE TABLE Persons 
(
	FirstName varchar(15),
	LastName varchar(15),
	Age int
)";

$sql1 = "CREATE TABLE Persons1
(
	personID int NOT NULL AUTO_INCREMENT,
	PRIMARY KEY(personID),
	FirstName varchar(15),
	LastName varchar(15),
	Age int
)";

mysql_query($sql1, $con);

mysql_close($con);
 ?>
