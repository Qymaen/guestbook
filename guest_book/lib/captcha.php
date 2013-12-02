<?php

	session_start();
	$im = imageCreateTrueColor (90, 50);
	$rand = mt_rand(1000, 99999);
	$_SESSION['rand'] = $rand;
		
	$c = imageColorAllocate ($im, 255, 255, 255);
	imageTtfText ($im, 20, rand(-10, 10), 5, 35, $c, "../fonts/comic.ttf", $rand);	
	header ("Content-type: image/png");
	imagePng ($im);
	imageDestroy ($im);
	
	

?>