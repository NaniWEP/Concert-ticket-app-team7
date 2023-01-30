<?php
require 'database/database.php';
function getShows(string $search) : array
{
    global $connection;
    $statement = $connection->prepare("select * from shows where name like '%{$search}%'");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);

}
