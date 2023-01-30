
<?php

 function register(string $username, string $password, string  $email ) : bool
{
    global $connection;
    $statement = $connection->prepare("insert into customers (name,email, password) values (:name,:email, :password)");
    $statement->execute([
        ':name' => $username,
        ':email' => $email,
        ':password' => $password

    ]);
    return $statement->rowCount() > 0;
}

function getUserData() : array
{
    global $connection;
    $statement = $connection->prepare("select * from customers");
    $statement->execute();
    return $statement->fetchAll();
}

function getShowData() : array
{
   global $connection;
   $statement = $connection->prepare("select * from movies");
   $statement->execute();
   return $statement->fetchAll(PDO::FETCH_ASSOC);
}