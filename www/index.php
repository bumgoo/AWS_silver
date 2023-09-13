<?php

$db_host = "host=database-silver.c3al6husi4ee.ap-northeast-2.rds.amazonaws.com";
$db_port = "port=5432";
$db_user = "user=postgres";
$db_password = "password=silver1234";
$db_name = "dbname=postgres";

$conn = pg_connect("$db_host $db_port $db_user $db_password $db_name");

$query = "SELECT * FROM rds_table";
$result = pg_query($conn, $query);

$res = [];

$row = pg_fetch_assoc($result);

var_dump($row);

//
//while () {
//  $res[] = $row;
//}
//
//echo <<<EOM
//EC2 : Hello World<br/>
//RDS : $res[0]
//EOM;

?>