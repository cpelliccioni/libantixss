<?php

class libantixss {

	function xss_sanitized($var_to_sanitize, $flag) {

		$s_chars = htmlentities($var_to_sanitize);

		if ($flag==0) {

			$lowercase = strtolower($s_chars);
			return $lowercase;

		} else if ($flag==1) {

			$first_char = substr($s_chars, 0, 1);	
			$next_chars = substr($s_chars, 1, -1);
			$lowercase = strtolower($next_chars);
			$new_string = $first_char . $lowercase;
			return $new_string;

		}
	
	}

}
			
?>
