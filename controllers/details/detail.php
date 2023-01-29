
<?php

require 'models/detail.model.php';

$movie_name = $_GET['name'];
$datas = getShowData();
$description = '';
$date = '';
$language = '';
$subtitle = '';
$time = '';


foreach($datas as $data){
    if ($movie_name==$data['name']){
        $description = $data['description'];
        $date = $data['date'];
        $language = $data['language'];
        $subtitle = $data['subtitle'];
        $time = $data['minute'];

    }
}

