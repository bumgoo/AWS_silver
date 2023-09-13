<?php


$db_host = "host=database-silver.c3al6husi4ee.ap-northeast-2.rds.amazonaws.com";
$db_port = "port=5432";
$db_user = "user=postgres";
$db_password = "password=silver1234";
$db_name = "dbname=rds";

$conn = pg_connect("$db_host $db_port $db_user $db_password $db_name");

$query = "SELECT * FROM rds_table";
$result = pg_query($conn, $query);

$res = [];

while ($row = pg_fetch_assoc($result)) {
  $res[] = $row;
}

foreach ($res as $k){
  var_dump($k);
  echo <<<EOM
wo!!! : Hello World<br/>
RDS ID : {$k}
RDS name : {$k}
EOM;
}


?>