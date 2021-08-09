<?php
session_start();// Avvio la sessione php

if(isset($_SESSION['username']) AND $_SESSION['username'] == 'matteotti' AND $_SESSION['login'] == 1):?>
<?php echo 'Benvenuto, <strong>'.$_SESSION['username'].'</strong>';?>

<form action="?Logout" method="post">
<input type="submit" name="action" value="Logout">
</form>
<!--Qui sotto puoi inserire tutto il codice HTMLche ti pare.. Ho messo dei link a circolari prova-->
- <a href="http://www.linkcircolare.com">Prima Circolare</a><br>	
- <a href="http://www.linkcircolare.com">Prima Circolare</a><br>
- <a href="http://www.linkcircolare.com">Prima Circolare</a>
<!--Fine zona HTML-->

<?php //Logout
if (isset($_POST['action']) and $_POST['action'] == 'Logout')
{
	unset($_SESSION['loggedin']);
	unset($_SESSION['username']);
	unset($_SESSION['password']);
	
	header('location:../index.html'); 
}
?>
<?php else:
echo 'Accesso diretto Negato, effettua il login per accedere alla pagina!'; 
?>
<?php endif;?>