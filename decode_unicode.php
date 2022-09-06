<?php

	$string = "\u099c\u09be\u09a4\u09c0\u09df \u09aa\u09b0\u09bf\u099a\u09df\u09aa\u09a4\u09cd\u09b0\u09c7\u09b0 \u09a4\u09a5\u09cd\u09af";

	decode_unicode($string);

	function decode_unicode($str){
		$str = preg_replace_callback('/\\\\u([0-9a-fA-F]{4})/', function ($match) {
		    return mb_convert_encoding(pack('H*', $match[1]), 'UTF-8', 'UTF-16BE');
		}, $str);

		echo $str;
	}

?>
