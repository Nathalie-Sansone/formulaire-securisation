<?php

$name = ($_POST['user_name']);
$firstname = ($_POST['user_fname']);
$mail = ($_POST['user_mail']);
$phone = ($_POST['user_phone']);
$subject = ($_POST['subjects']);
$message = ($_POST['user_message']);


if (!empty($name)
    && !empty($firstname)
    && !empty($mail)
    && filter_var($mail, FILTER_VALIDATE_EMAIL)
    && !empty($phone)
    && !empty($subject)
    && !empty($message)) {
    echo 'Merci ' . htmlspecialchars($_POST["user_fname"]) . ' ' . htmlspecialchars($_POST["user_name"]) . ' de nous avoir contacté à propos de ' . '"' . htmlspecialchars($_POST["subjects"]) . '"' . '.';
    echo "<br>";
    echo "<br>";
    echo 'Un de nos conseillers vous contactera soit à l\'adresse ' . htmlspecialchars($_POST["user_mail"]) .  ' ou par téléphone au ' . htmlspecialchars($_POST["user_phone"]) . ' dans les plus brefs délais pour traiter votre demande : ';
    echo "<br>";
    echo "<br>";
    echo htmlspecialchars($_POST["user_message"]);
}
 else {
     echo 'Merci de bien vouloir compléter tous les champs du formulaire';
 }
