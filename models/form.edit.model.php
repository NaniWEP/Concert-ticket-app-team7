<?php


function getshowbyId($id) : array
{
    global $connection;
    $statement = $connection->prepare("select * from shows where id = $id");
    $statement->execute();
    return $statement->fetch(PDO::FETCH_ASSOC);
}
