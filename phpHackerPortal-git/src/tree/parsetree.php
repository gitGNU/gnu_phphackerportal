<?php

/* Parse Tree class */

/*
 Copyright (C) Johan Ceuppens 2013

 This program is free software: you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation, either version 2 of the License, or
 (at your option) any later version.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/
?>

<?php
include("tree.php");

class ParseTree extends Tree {

	public function __construct( /* */ ) {
	}

	public function skipWhiteSpace($line, $n) {
		$i = $n;
		while ($line[$i] == ' ' || $line[$i] == '\t') {
			$i++;
		}
		return $i;
	}  

	public function searchForOpeningParens($line, $n) {
		$i = $n;
		while ($line[$i] != '(') {
			$i++;
		}
		return $i;
	}  

	public function searchForClosingParens($line, $n) {
		$i = $n;
		while ($line[$i] != ')') {
			$i++;
		}
		return $i;
	}  

	public function getSubStringN($line, $n) {

		$returnstr = NULL;

		for ($i = $n; $i < strlen($line); $i++) {
			$returnstr .= $line[$i];
		}

		return $returnstr;	
	}

	public function getNextSubString($line) {

		$returnstr = NULL;
		$i = skipWhiteSpace($line, 0);
		for (; $i < strlen($line); $i++) {
			if ($line[$i] == ' ' || $line[$i] == '\t') {
				break;
			$returnstr .= $line[$i];
		}

		return $returnstr;	

	}

	//utility function with start index
	public function getNextSubStringWithStart($line, $n) {
		return getNextSubStringN($line, $n);
	}

	//with start index
	public function getNextSubStringN($line, $n) {

		$returnstr = NULL;
		$i = skipWhiteSpace($line, 0);
		for ($i = $n; $i < strlen($line); $i++) {
			if ($line[$i] == ' ' || $line[$i] == '\t') {
				break;
			$returnstr .= $line[$i];
		}
		//e.g. return tuple (str, index)
		return $returnstr;	
	
	}

	public function cmpAndYield($operstr, $line) { 
		////$i = skipWhiteSpace($line, 0);
		if (strcmp($line, $operstr) >= 0) {
			return getSubStringN($line, $i + strlen($operstr));
		} else {
			return "";
		}
	}

}

?>
