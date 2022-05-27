<?php 

$voto = $_POST['time'];

if (!isset($_COOKIE['time']))
{
	setcookie("time", $voto, time()+3600*24*31);

	$msg = "Obrigado por votar!";
	echo "Você votou em ".$voto."<br>";

}
else
{
	$msg = "Você já votou uma vez.";
}

	echo $msg;

?>