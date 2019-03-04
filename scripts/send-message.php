<?php

    $recaptchaSecret = "6LdxZpUUAAAAABRDaEe90BQkRPibBIGSf1pTLiAf";
    $check = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$recaptchaSecret."&response=".$_POST['g-recaptcha-response']);
    $response = json_decode($check);

    if($response->success == false)
        echo "BŁąd recaptchy!";

?>