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

echo "$dbusername";
echo $dbpassword;
echo $db_name;

echo $_ENV['OPENSHIFT_MYSQL_DB_HOST'],
echo $_ENV['OPENSHIFT_MYSQL_DB_USERNAME'],
echo $_ENV['OPENSHIFT_MYSQL_DB_PASSWORD'],
echo $_ENV['OPENSHIFT_APP_NAME'], // By default, app name == db name
echo $_ENV['OPENSHIFT_MYSQL_DB_PORT'],
echo $_ENV['OPENSHIFT_MYSQL_DB_SOCKET']
    
?>
