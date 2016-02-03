<?php
   echo 'Hello ALTRAN';
   echo "</br>";
   for ($i=0; $i<3; $i++) {
   echo "Altran";
   echo "</br>";


}

define('DB_USER', getenv('MYSQL_USER'));
define('DB_PASS', getenv('MYSQL_PASSWORD'));
define('DB_NAME', getenv('MYSQL_DATABASE'));


$dbusername = constant("DB_USER"); // Mysql username 
$dbpassword = constant("DB_PASS"); // Mysql password 
$db_name = constant("DB_NAME");

echo $dbusername;
echo $dbpassword;
echo $db_name;
    
?>
