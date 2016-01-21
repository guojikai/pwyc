<?php

namespace Pwyc;

use Exception;

/**
 * Pwyc(PHP伪原创)
 * Author: guojikai
 * Last Modified: 2010-11-28 17:14
 * version 1.0
 */
class Pwyc {

	private $replaced = [];
  private $synonyms = [];

	//construct
	function __construct()
	{
		$this->synonyms = require(dirname(__FILE__).'/dict.php');
	}

  //replace
	function replace($text)
	{
		foreach($this->synonyms as $key => $val) {
			if(preg_match("/".$key."/", $text) && !in_array($key, $this->replaced)) {
				$text = str_replace($key, $val, $text);
				array_push($this->replaced, $val);
			}
		}
		return $text;
	}

}


