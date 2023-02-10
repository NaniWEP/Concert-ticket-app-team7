<?php

require 'models/form.edit.model.php';
// require 'models/detail.model.php';
$id = $_GET['showId'];
// $dateTime = getDatetime($id);
$show = getshowbyId($id);
require 'views/forms/form.create.show.view.php';


// $title = $show['title'];

