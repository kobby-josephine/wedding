<?php

$fl = "program.pdf";
header('Content-Type: application/pdf');
if(false !== ($handler = fopen($fl, 'r'))){
	header('Content-Type: application/pdf');
	echo file_get_contents($fl);
	exit;
						
}

?>
