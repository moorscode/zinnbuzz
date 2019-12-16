<?php

class Result {
	function __construct( Sentence $sentence, $keywordFound = false ) {
		$this->setence      = $sentence;
		$this->keywordFound = $keywordFound;
	}
}
