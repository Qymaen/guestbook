<?php
	
	function filter_value($value)
	{
		$value = trim($value);
		$value = htmlspecialchars($value);
		$value = mysql_escape_string($value);
		return $value;
	}

	
	
	//-------------------------------------------------------------------------------------------------------------------------
		function validate_name($name) {
		$pattern = '/[^-a-zA-z0-9 ]/';
		$replacement = '';
		$name = preg_replace($pattern, $replacement, $name);
		return $name;
	}

	function validate_mail($mail) {
		$pattern = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/i';
		$replacement = '';
		$mail = preg_replace($pattern, $replacement, $mail);
		$mail = htmlspecialchars($mail);
		echo $mail;
		return $mail;
	}

	function validate_text($text) {
		//$text = htmlspecialchars($text);
		//$allowable_tags = '<i><a><code><strike><strong>';
		$text = strip_tags($text);
		return $text;
	}
	


	
	
?>