<?php 
	function insertDataShow(string $title, string $description, int $type_id, int $running_time, string $language, string $subtitle, string $img, string  $trailer) : bool
    {
           global $connection;
           $msg ="";
           if(isset($_POST['upload'])){
              $target = "assets/moveis/" . basename($_FILES['profile']['name']); 
               $image = $_FILES['profile']['name'];

               $statement=$connection->prepare('insert into shows (title, description, type_id, running_time, language, subtitle, img, trailer )
               values (:title, :description, :type_id, :running_time, :language, :subtitle, :image, :trailer )');
               $statement->execute([
                   ':title' => $title,
                   ':description' => $description,
                   ':type_id' => $type_id,
                   ':running_time' => $running_time,
                   ':language' => $language,
                   ':subtitle' => $subtitle,
                   ':image' => $img,
                   ':trailer' => $trailer,
               ]);
               if(move_uploaded_file($_FILES['profile']['tmp_name'], $target)){
                    echo $target;
                    $msg ="image upload successfully";
                }
                else{
                    $msg ="image upload is have problem";
                }
           }
            return $statement->rowCount() > 0;
    }
?>

<?php

function insertDateTime( $date, $time) : bool
    {
           global $connection;
               $statement=$connection->prepare('insert into date_time (date, time) values ( :date, :time)');
               $statement->execute([
                   ':date' => $date,
                   ':time' => $time,

               ]);
            return $statement->rowCount() > 0;
}