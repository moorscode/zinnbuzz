<?php

function zinnbuzz( $text, $keyword ) {
	$sentences = split_sentences( $text );
	$parts     = partition_sentences( $sentences, 10 );

	return find_keyword_in_parts( $keyword, $parts );
}

function split_sentences( $text ) {
	preg_match_all( '~(\.)(\s+\p{Lu}|$)~u', $text, $matches, PREG_OFFSET_CAPTURE | PREG_SET_ORDER );

	$offset = 0;
	foreach ( $matches as $match ) {
		$matchOffset = $match[0][1];
		$sentence    = substr( $text, $offset, $matchOffset - $offset + 1 );
		$sentences[] = new Sentence( $sentence, $offset );

		$offset = $matchOffset + ( strlen( $match[0][0] ) - 1 );
	}

	return $sentences;
}

function find_keyword_in_parts( $keyword, $parts ) {
	foreach ( $parts as $group ) {
		$partSentences = array();
		foreach ( $group as $sentence ) {
			$found           = keyword_appears_in( $sentence->text, $keyword );
			$partSentences[] = new Result( $sentence, $found );
		}

		$results[] = $partSentences;
	}

	return $results;
}

function keyword_appears_in( $text, $keyword ) {
	return stripos( $text, $keyword ) !== false;
}

function partition_sentences( $sentences, $numberOfPartitions ) {
	$listSize               = count( $sentences );
	$partitionSize          = floor( $listSize / $numberOfPartitions );
	$partitionSizeRemainder = $listSize % $numberOfPartitions;

	$partitions = array();
	$offset     = 0;

	for ( $partitionIndex = 0; $partitionIndex < $numberOfPartitions; $partitionIndex ++ ) {
		$numberOfEntries               = ( $partitionIndex < $partitionSizeRemainder ) ? $partitionSize + 1 : $partitionSize;
		$partitions[ $partitionIndex ] = array_slice( $sentences, $offset, $numberOfEntries );

		$offset += $numberOfEntries;
	}

	// Remove empty partitions.
	$partitions = array_filter( $partitions );

	return $partitions;
}
