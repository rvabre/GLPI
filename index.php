<?php
   echo 'Hello ALTRAN';
   echo "</br>";
   for ($i=0; $i<3; $i++) {
   echo "Altran";
   echo "</br>";
}

$env_var = getenv('OPENSHIFT_APP_NAME');
echo $env_var; echo "A";
$env_var = getenv('OPENSHIFT_HOMEDIR');
echo $env_var; echo "B";
$env_var = getenv('OPENSHIFT_MYSQL_DB_URL');
echo $env_var; echo "C";


    
?>
