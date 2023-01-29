
<?php

function getShowData() : array
{
   global $connection;
   $statement = $connection->prepare("select * from movies");
   $statement->execute();
   return $statement->fetchAll();
}
?>


