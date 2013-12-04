<?php

	session_start();
	$im = imageCreateTrueColor (90, 50);
	$length = 4;
	$char = 'abcdefhjkmnpqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ2345678'; //Убраны похожие символы, чтобы было меньше ошибок на вводе
	$rand = substr(str_shuffle($char), 0, $length);
	$_SESSION['rand'] = $rand;
		
	$c = imageColorAllocate ($im, 255, 255, 255);
	imageTtfText ($im, 20, rand(-10, 10), 5, 35, $c, "../fonts/comic.ttf", $rand);	
	header ("Content-type: image/png");
	imagePng ($im);
	imageDestroy ($im);
	
	

?>