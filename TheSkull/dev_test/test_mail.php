<?php
$empfaenger = 'jonaswrede@aol.com';
$betreff = 'Der Betreff';
$nachricht = "Hallo $empfaenger";
$header = array(
    'From' => 'jonas.wrede@theskull.de',
    'Reply-To' => 'jonas.wrede@theskull.de',
    'X-Mailer' => 'PHP/' . phpversion()
);

if(mail($empfaenger, $betreff, $nachricht, $header)){
    echo "sucsess";
}
else{
    echo "fail";
}
?>