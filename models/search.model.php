<?php
require 'database/database.php';
// require '../../controllers/searchs/search.php';

// $showResult = getShows($search);

// if ($search = ' '){
//     $query = "select * from shows";
//     echo 'truetype';
// }else{
//     $query = "select name from shows where name like '%{$search}%'";
// }

function getShows(string $query) : array
{
    global $connection;
    $statement = $connection->prepare($query);
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);

}
