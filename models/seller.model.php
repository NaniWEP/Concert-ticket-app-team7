<?php
$user_email = $_COOKIE['email'] ;
$id = getUserId($user_email);
function getUserId($user_email) : array
{
    global $connection;
    $statement = $connection->prepare("select * from users where email = '$user_email'");
    $statement->execute();
    return $statement->fetch(PDO::FETCH_ASSOC);
}

function getShowDataSeller($id) : array
{
    global $connection;
    $statement = $connection->prepare("select img,title,shows.id,trailer,type_id,running_time,language,subtitle from shows left join users on shows.created_id = users.id where users.id = $id ");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function type_show($id) : array
{
    global $connection;
    $statement = $connection->prepare("select name from type_shows where id = $id ");
    $statement->execute();
    return $statement->fetch(PDO::FETCH_ASSOC);
}
//delete shows by id
function deleteShow($id) {
    global $connection;
    $statement = $connection->prepare(" DELETE from shows where id = $id ");
    $statement->execute();
}

function getshowbyId($id) : array
{
    global $connection;
    $statement = $connection->prepare("select * from shows where id = $id");
    $statement->execute();
    return $statement->fetch(PDO::FETCH_ASSOC);
}