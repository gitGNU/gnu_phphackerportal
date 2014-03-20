<?php

/* Scheme language Parse Tree class */

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
include("../include/root.php");
include(treeDir("parsetree.php"));

class SchemeParseTree extends ParseTree {

	protected $currentnode = NULL; //NULL node or parent is root
	
	public function __construct( /* */ ) {
	}

	// contruct a parsetree for rows of code as an element from this array
	public function load($progarray) {
	
		for ($i = 0; $i < count($progarray); $i++) {
			schemeparse($progarray[$i]);
		}
	}

	public function schemeparse($linec) {
		$i = 0;		

		$i = skipWhiteSpace($linec, $i);
		$i = searchForOpeningParens($linec);
		$i = skipWhiteSpace($linec, $i);

		if (cmpAndYield("+", $linec) != "") {
			$i = skipWhiteSpace($linec, 2);
			schemeadd(getSubstringN($linec, $i);
		}	
		else if (cmpAndYield("-", $linec) != "") {
			$i = skipWhiteSpace($linec, 2);
			schememinus(getSubstringN($linec, $i);
		}	
		else if (cmpAndYield("*", $linec) != "") {
			$i = skipWhiteSpace($linec, 2);
			schememul(getSubstringN($linec, $i);
		}	
		else if (cmpAndYield("(/", $linec) != "") {
			$i = skipWhiteSpace($linec, 2);
			schemedivide(getSubstringN($linec, $i);
		}	
	}

	public function schemeadd($subline) {
		scheme2opertree("+", $subline);
	}

	public function schememinus($subline) {
		scheme2opertree("-", $subline);
	}

	public function schememul($subline) {
		scheme2opertree("*", $subline);
	}

	public function schemedivide($subline) {
		scheme2opertree("/", $subline);
	}

	//heavy utility function
	public function scheme2opertree($operstr, $line) {
		$opnd1 = getNextSubString($line);
		$opnd2 = getNextSubStringN($line, strlen($opnd1));

		$tn = new TreeNode($currentnode); 
		$tn->addData("operator", $operstr);
		$tn->addData("operand1", $opnd1);
		$tn->addData("operand2", $opnd2);

		//FIX more opnds for oper, use array for addnoderec function
		//FIX recursive searching inclusion function, use $currentnode instead, $self->addNodeRec($operstr, $tn1, $tn2);	
		$currentnode->addNode($tn);
		//FIX adapt current node hereafter
	}

	//NOTE adds nodes and sometimes data!
	public function addNodeRec($operstr, $tn1, $tn2) {
		//inserts child node and sets data of currentnode
		$currentnode->addNodeAndData($tn1, $operstr);
		//inserts second child node, data was set above
		$currentnode->addNode($tn2);
	}	

	//NOTE adds nodes !
	public function addNodeRec3($operstr, $tn1, $tn2, $tn3) {
		//inserts child node and sets data of currentnode
		$currentnode->addNodeAndData($tn1, $operstr);
		//inserts second child node, data was set above
		$currentnode->addNode($tn2);
		$currentnode->addNode($tn3);
	}	

	//NOTE that the sexp is taken from one line of code, so format
	//it before you use this function
	public function getNextSexp($line, $i = 0) {
		$n = 0;
		$returnstr = NULL;
		//leave this out so the strlen of the return param works	
		//$i = skipWhiteSpace($line, 0);
		for (; $i < strlen($line); $i++) {
			if ($line[$i] == '(') {
				$n++;
				break;
			}
		}
		//$i = skipWhiteSpace($line, 0);
		for (; $i < strlen($line); $i++) {
			if ($line[$i] == '(') {
				$n++;
			}
			if ($line[$i] == ')') {
				if ($n == 0) {
					break;
				} else {
					$n--;
				}
			}
			$returnstr .= $line[$i];
		}

		return $returnstr;	
	}

}

?>
