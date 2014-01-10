<?php
session_start();

if (isset($_SESSION['name']))
{
	$text = $_POST['text'];
	if(strlen($text) > 200)
	{
		echo 'Een bericht mag maximaal 200 tekens bevatten.';
	}
	else if(strlen($text) == 0)
	{
		echo 'Een bericht moet minstens 1 teken bevatten';
	}
	else
	{
		$fp = fopen('log.html', 'a');
		fwrite($fp, "<div class='msgln'>(" .date('g:i A'). ") <strong>" . $_SESSION['name'] . "</strong>:  " .stripslashes(htmlspecialchars($text)). "<br></div>");
		fclose($fp);
	}
}
?>