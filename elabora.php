<?php
/*catturo le variabili che provengono dal modulo*/
$username = $_POST['username'];
$password = $_POST['password'];


if ($username == "piccolo" && $password == "piccolo123") /*caso 1: definisco l'accesso con user e password corrette*/

/*caso 1: se username e password corrispondono visualizzo il link per continuare*/
	{
echo "<center><h2><font color=#009900>Benvenuto nell'area riservata.</font></h2><br><a href=piccolo.html>Clicca qui per continuare.</a></center>"; exit ();
	}


elseif ($username == "medio" && $password == "medio123") /*caso 2: definisco l'accesso con user e password corrette*/
/*caso 2: se username e password corrispondono visualizzo il link per continuare*/
	{
echo "<center><h2><font color=#009900>Benvenuto nell'area riservata.</font></h2><br><a href=medio.html>Clicca qui per continuare.</a></center>"; exit ();
	}


elseif ($username == "grosso" && $password == "grosso123") /*caso 3: definisco l'accesso con user e password corrette*/
/*caso 3: se username e password corrispondono visualizzo il link per continuare*/
	{
echo "<center><h2><font color=#009900>Benvenuto nell'area riservata.</font></h2><br><a href=grosso.html>Clicca qui per continuare.</a></center>"; exit ();
	}


/*se user e password non corrispondono in nessuno dei casi precedenti visualizzo il link di ritorno al form per ritentare l'accesso*/
else
	{
	echo "<center><h2><font color=#FF0000><h2>Accesso negato.</font></h2><br>Le credenziali inserite non risultano valide.<br><a href=\"javascript:history.go(-1)\">Clicca qui per tornare al form e reinserire username e password.</a></center>"; exit();
	}

?>