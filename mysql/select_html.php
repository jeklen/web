<?php 
// 除了select，常用的 还有where，order by，update，delete等
$con = mysql_connect("localhost", "root", "");
if (!$con) {
	die("Cound not connect: " . mysql_error());
}
mysql_select_db("my_db", $con);
$result = mysql_query("SELECT * FROM Persons");
// 需要注意一个点</tr>之类的，/之前不能有空格
echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>
";

while ($row = mysql_fetch_array($result)) {
	echo "<tr>";
	echo "<th>" . $row["FirstName"] . "</th>";
	echo "<th>" . $row["LastName"] . "</th>";
}
echo "</table>";

mysql_close($con);
 ?>