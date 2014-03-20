<?php

/* Scheme language parser */

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
include("schemeparsetree.php");

class SchemeParser {
	protected $tree = new SchemeParseTree;	

	public function __construct( /* */ ) {
	}

	// contruct a parsetree for rows of code as an element from this array
	public function load($progarray) {
	
		for ($i = 0; $i < count($progarray); $i++) {
			$tree->schemeparse($progarray[$i]);
		}
	}

	public function schemeparse($linec) {
		$i = 0;		

		$i = $tree->skipWhiteSpace($linec, $i);
		$i = $tree->searchForOpeningParens($linec);
		$i = $tree->skipWhiteSpace($linec, $i);

		// Note that everything is not a nested structure,
		// The parser searches for Sexp's here 
		$sexpstr = $tree->getNextSexp($linec, $i); 

		//--FIXME
		if ($tree->searchForOpeningParens($linec, $i) < ($i + strlen($linec))) 
		{
			schemeparse($sexpstr);
			return; 
		}

		if ($tree->cmpAndYield("+", $linec) != "") {
			$i = skipWhiteSpace($linec, $i);
			schemeadd(getSubstringN($linec, $i);
		}	
		else if ($tree->cmpAndYield("-", $linec) != "") {
			$i = skipWhiteSpace($linec, $i);
			schememinus(getSubstringN($linec, $i);
		}	
		else if ($tree->cmpAndYield("*", $linec) != "") {
			$i = skipWhiteSpace($linec, $i);
			schememul(getSubstringN($linec, $i);
		}	
		else if ($tree->cmpAndYield("/", $linec) != "") {
			$i = skipWhiteSpace($linec, $i);
			schemedivide(getSubstringN($linec, $i);
		}	
		else if ($tree->cmpAndYield("define", $linec) != "") {
			$i = skipWhiteSpace($linec, $i);
			schemedefine(getSubstringN($linec, $i);
		}	
		else if ($tree->cmpAndYield("if", $linec) != "") {
			$i = skipWhiteSpace($linec, $i);
			schemeif(getSubstringN($linec, $i);
		}	
	}

	public function schemeadd($subline) {
		$tree->scheme2opertree("+", $subline);
	}

	public function schememinus($subline) {
		$tree->scheme2opertree("-", $subline);
	}

	public function schememul($subline) {
		$tree->scheme2opertree("*", $subline);
	}

	public function schemedivide($subline) {
		$tree->scheme2opertree("/", $subline);
	}

	public function schemedefine($subline) {
		$tree->scheme2opertree("define", $subline);
	}

	public function schemeif($subline) {
		$tree->scheme2if("if", $subline);
	}

	//heavy utility function
	public function scheme2opertree($operstr, $line) {
		if (($i = $tree->searchForOpeningParens($line)) < strlen($line)) {
			$sexpstr = $tree->getNextSexp($line, $i-1); 
			schemeparse($sexpstr);

			return;
		} 
		$opnd1 = $tree->getNextSubString($line);
		$opnd2 = $tree->getNextSubStringN($line, strlen($opnd1));

		$tn = new TreeNode(); 
		$tn->addData("operand", $opnd1);
		
		$tn2 = new TreeNode(); 
		$tn2->addData("operand", $opnd2);
		
		$tree->addNodeRec($operstr, $tn1, $tn2);	
	}

	//NOTE on Sexps, there has to be 2 parens in a Sexp, if they are
	//not you need to not use schemeparse but it should resolve 
	public function scheme2if($ifstr, $line) {
		$sexpstr = $tree->getNextSexp($line), 
		$trueclause = $tree->getNextSubStringN($line, strlen($sexpstr)) 	
		$elseclause = $tree->getNextSubStringN($line, strlen($sexpstr) + strlen($trueclause)); 	

		schemeparse($trueclause);
		schemeparse($elseclause);
		//leave this out --FIXME
		//$tree->addNodeRec3($ifstr, $sexpstr, $trueclause, $elseclause); 
	}

?>
