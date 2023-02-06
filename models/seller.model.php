<?php

function getShowData() : array
{
    global $connection;
    $statement = $connection->prepare("select * from shows right join users on shows.created_id = users.id where users.id =10");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}