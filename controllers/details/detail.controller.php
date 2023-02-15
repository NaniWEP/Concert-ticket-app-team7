
<?php
require 'models/detail.model.php';
require 'models/form.edit.model.php';

$movie_id = $_GET['id'];
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
    if ($movie_id== $data['id']) 
    {
        $description = $data['description'];
        $id = $data['id'];
        $language = $data['language'];
        $subtitle = $data['subtitle'];
        $time = $data['running_time'];
        $trailer = $data['trailer'];
        $movie_name= $data['title'];
        $img = $data['img'];
    }
}
$date_time = getDatetime($id);
$type = type($id);
$venus = getVenuebyId($id);