<?php

class Sentence {
	public $offset;
	public $text;

	function __construct( $text, $offset ) {
		$this->text   = $text;
		$this->offset = $offset;
	}
}
