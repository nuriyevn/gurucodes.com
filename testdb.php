<?php


include_once "./app-config.php";

require_once (ABSPATH."/php/CDBConn.php");
require_once (ABSPATH."/host-config.php");



echo "Testdb.php<br>";

#printf("Host=%s;db_name=%s;db_user=%s", $host_ip, $db_name, $db_user);

$conn = new CDBConn($host_ip, $db_name, $db_user, $db_pass);

$conn->connect();
$conn->printinfo();

$sql = "SELECT * FROM users";

echo $conn->run_select($sql);

$conn->close();


?>