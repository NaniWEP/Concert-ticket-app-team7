
<?php
require 'models/detail.model.php';

$movie_name = $_GET['name'];
$datas = getShowData();
$description = '';
$id = '';
$language = '';
$subtitle = '';
$time = '';
$trailer = '';
$poster = '';
foreach($datas as $data)
{
    if ($movie_name == $data['title']) 
    {
        $description = $data['description'];
        $id = $data['id'];
        $language = $data['language'];
        $subtitle = $data['subtitle'];
        $time = $data['running_time'];
        $trailer = $data['trailer'];
    }
}
$date_time = getDatetime($id);
$type = type($id);