<?php



function input($data) : string 
{
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;   

}

if (!empty($_GET['search']))
{
    $search = input($_GET['search']);
}else
{
    $search = '';
}
$query= 'select * from shows';
if ($search != '')
{
    $query = "select * from shows where name like '%{$search}%'";;
}

require 'models/search.model.php';
$showResult = getShows($query);