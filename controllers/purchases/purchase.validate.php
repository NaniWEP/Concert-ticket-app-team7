<?php

$ownerName = "";
$ownerNameError = "";
$cardNumber = "";
$cardNumberError = "";
$expireDate = "";
$expireDateError = "";
$cvvNumber = "";
$cvvNumberError = "";
$formValid = true;

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    // validation owner name
    if (empty($_POST['ownerName']))
    {
        $ownerNameError = "Please enter a valid owner name";
        $colorErrorOwnerName  = true;
        $formValid = false;
    }else
    {
        $ownerName = $_POST['ownerName'];
    }
    // Validation credit card numbers
    if (empty($_POST['cardNumber']))
    {
        $cardNumberError = "Please enter a valid card number";
        $colorErrorCreditCardNumber  = true;
        $formValid = false;
    }else
    {
        $cardNumber = $_POST['cardNumber'];
        if (strlen($cardNumber) < 19)
        {
            $cardNumberError = "Please enter a valid card number";
            $colorErrorCreditCardNumber  = true;
            $formValid = false;
        }
    }
    // Validation  Expire date 
    if (empty($_POST['expireDate']))
    {
        $expireDateError = "Please enter a valid expire date";
        $colorErrorExpireDate  = true;
        $formValid = false;
    }else
    {
        $expireDate = $_POST['expireDate'];
        if (strlen($expireDate) < 5)
        {
            $expireDateError = "Please enter a valid expire date";
            $colorErrorExpireDate  = true;
            $formValid = false;
        }
    }
    // Validation CVV numbers 
    if (empty($_POST['cardCvv']))
    {
        
        $cvvNumberError = "Please enter a valid CVV number";
        $colorErrorCvvNumber = true;
        $formValid = false;
    }else
    {
        $cvvNumber = $_POST['cardCvv'];
    }

    if($formValid)
    {
        echo "yes";
    }   
}