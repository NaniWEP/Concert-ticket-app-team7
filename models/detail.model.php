
<?php

function getShowData() : array
{
   global $connection;
   $statement = $connection->prepare("select * from shows");
   $statement->execute();
   return $statement->fetchAll();
}
?>


