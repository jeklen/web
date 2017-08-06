<?php 
// mysqli_query(connection, query, resultmode);
// connection: 必需，规定要使用的MySQL连接
// query: 必需，规定查询字符串
// resultmode:MYSQLI_USERESULT(如果需要检索大量数据，用这个),而MYSQLI_STORE_RESULT是默认的
$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = '';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
if(! $conn) {
	die('连接错误： ' . mysqli_error($conn));
}
echo "连接成功<br />";
$sql = 'CREATE DATABASE RUNOOB';
$retval = mysqli_query($conn, $sql);
if (! $retval) {
	die('创建数据库失败' . mysqli_error($conn));
}
echo "数据库 RUNOOB 创建成功\n";

mysqli_error($conn);
 ?>