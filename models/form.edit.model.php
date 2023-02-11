<?php


function getshowbyId($id) : array
{
    global $connection;
    $statement = $connection->prepare("select * from shows where id = $id");
    $statement->execute();
    return $statement->fetch(PDO::FETCH_ASSOC);
}

function getVenuebyId($id) : array
{
    global $connection;
    $statement = $connection->prepare("SELECT venues.name,venues.address FROM detail right join venues on venues.id = detail.venue_id where show_id=$id;");
    $statement->execute();
    return $statement->fetch(PDO::FETCH_ASSOC);
}

function editShow(int $id,string $img,string $title, string $description, int $type_id, int $running_time, string $language, string $subtitle, string  $trailer, int $created_id) :bool{
    global $connection;
    $statement = $connection->prepare("update shows set img= $img, title = $title, description = $description, type_id = $type_id, running_time= $running_time , language = $language, subtitle = $subtitle, img = 'sfsfsafdasf', trailer = $trailer,created_id = $created_id where id=$id ");
    $statement->execute();
    return $statement->fetch(PDO::FETCH_ASSOC);
}