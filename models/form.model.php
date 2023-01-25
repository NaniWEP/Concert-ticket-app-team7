
<?php
require 'database/database.php';

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