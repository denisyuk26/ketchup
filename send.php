<?php
$recepient = "sergey.denisyuk@gmail.com";
$sitename = "Название сайта";

$email = trim($_GET["email"]);

if ($email!='') {
    $message = "$email";
    $res = mail($recepient, 'Subject', $message);
    if ($res) {
        echo 1;
    } else {
        echo 0;
    }
}
else {
    echo 0;
}

?>