<?php
   echo 'Hello ALTRAN';
   echo "</br>";
   for ($i=0; $i<100; $i++) {
   echo "Altran";
   echo "</br>";


}
 $var = getenv('OPENSHIFT_MYSQL_DB_HOST');
  echo " $var</br>";
   $var = getenv('OPENSHIFT_MYSQL_DB_USERNAME'); 
    echo " $var</br>";
    $var = getenv('OPENSHIFT_MYSQL_DB_HOST');
     echo " $var</br>";
    $var = getenv('OPENSHIFT_MYSQL_DB_PASSWORD');
     echo " $var</br>";
    $var = getenv('OPENSHIFT_MYSQL_DB_PORT');
     echo " $var</br>";
    
?>
