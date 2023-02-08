<?php 
	function insertDataShow(string $title, string $description, int $type_id, int $running_time, string $language, string $subtitle, string $img, string  $trailer) : bool
    {
           global $connection;
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
            return $statement->rowCount() > 0;
    }
?>

<?php

function insertDateTime( $date, $time) 
    {
           global $connection;
               $statement=$connection->prepare('insert into date_time (date, time) values ( :date, :time)');
               $statement->execute([
                   ':date' => $date,
                   ':time' => $time,

               ]);
            return $statement->rowCount() > 0;
    }