<?php

require 'models/form.edit.model.php';
$id = $_GET['showId'];
$show = getshowbyId($id);$date='';
$time='';
$type ='';
$runningTime = '';
$trailer = '';
$description = '';
$title = '';
$language = '';
$subtitle = ''; 
$venueName = '';
$venueAddress ='';
require 'views/forms/form.create.show.view.php';
