<?php
session_start();// Avvio la sessione php

  $username = htmlspecialchars ($_POST['username'],ENT_QUOTES, 'UTF-8'); 
  $password = htmlspecialchars ($_POST['password'],ENT_QUOTES, 'UTF-8');  

  if ( ($username == "legrazie"  and $password == "grazie") 
  or   ($username == "matteotti" and $password == "matteotti111") 
  or   ($username == "marconi"   and $password == "marconi123") ) 
  { 
  $_SESSION['login'] = 1;
  $_SESSION['username'] = $username;
  $_SESSION['password'] = $password;
// Se il login corrisponde ad una delle coppie elencate sopra si collegherà alla relativa pagina
     header('location:'.$username.'.php'); 
	 
  }else{ 
  
  unset($_SESSION['loggedin']);
  unset($_SESSION['username']);
  unset($_SESSION['password']);
    echo "<center><h2><font color=#FF0000><h2>Accesso negato.</font></h2><br>Le credenziali inserite non risultano valide.<br><a href=\"javascript:history.go(-1)\">Clicca qui per tornare al form e reinserire username e password.</a></center>"; 
    die; 
  }  
?>