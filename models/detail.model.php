
<?php

function getShowData() : array
{
   global $connection;
   $statement = $connection->prepare("select * from shows");
   $statement->execute();
   return $statement->fetchAll();
}

function getDatetime($id) : array{
   global $connection;
   $statement = $connection->prepare(" SELECT date_time.date,date_time.time FROM show_datetime right join date_time on date_time.id = show_datetime.datetime_id where show_id=$id ");

   $statement->execute();
   return $statement->fetch();
}

function type($id) : array{
   global $connection;
   $statement = $connection->prepare(" SELECT type_shows.name FROM shows right join type_shows on shows.type_id = type_shows.id where shows.id=$id ");
   $statement->execute();
   return $statement->fetch();
}
?>


