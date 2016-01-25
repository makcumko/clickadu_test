<?php

class Foo {
	// consider using english alphabet and no multibyte characters
	private $convert = ['a' => 1, 'e' => 1, 'i' => 1, 'o' => 1, 'u' => 1];

	public function Reverse($str) {
		$result = "";

		for ($i = strlen($str) - 1; $i >= 0 ; $i--) {
			if (!isset($convert[$str{$i}])) $result .= $str{$i};
		}
		return $result;
	}


}