<?php
   echo 'Hello ALTRAN';
   echo "</br>";
   for ($i=0; $i<100; $i++) {
   echo "Altran";
   echo "</br>";
   $host = getenv('OPENSHIFT_MYSQL_DB_HOST');
   echo $host;
  echo "</br>";
}

?>
