<?php
require "database/database.php";

function getShowData() : array
{
   global $connection;
   $statement = $connection->prepare("select * from users");
   $statement->execute();
   return $statement->fetchAll();
}