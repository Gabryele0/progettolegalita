<?php
session_start();// Avvio la sessione php

if(isset($_SESSION['username']) AND $_SESSION['login'] == 1)
{
	$username = $_SESSION['username'];
	
	//Analizzo i casi e le varie combinazioni di login e seleziono la pagina html da caricare
	switch ($username) {
    case "legrazie":
        include 'legrazie.php';
        break;
    case "matteotti":
        include 'matteotti.php';
        break;
    case "marconi":
        include 'marconi.php';
        break;
    default:
        echo "L'utente loggato non possiede una pagina riservata!";
	}
	
}else{
echo 'Accesso Negato!';	
}
?>