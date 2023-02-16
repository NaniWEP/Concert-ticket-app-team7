<?php

 function creditCard( int $userId, string $ownerName, string $cardNamber, string $expireDate, int $cvvNumber) : bool
 {
    global $connection;
    $statement = $connection->prepare("insert into credit_cards (user_id, name, card_numbers, expire_date, cvv) values (:user_id, :name, :card_numbers, :expire_date, cvv)");
    $statement->execute([
        ':user_id' => $userId,
        ':name' => $ownerName,
        ':card_numbers' => $cardNamber,
        ':expire_date' => $expireDate,
        ':cvv' => $cvvNumber

    ]);
    return $statement->rowCount() > 0;
}

function getCreditCardData() : array
{
    global $connection;
    $statement = $connection->prepare("select * from credit_cards");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}
