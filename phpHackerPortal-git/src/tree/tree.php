<?php

/* Tree class */

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
include("treenode.php");

class Tree {
	protected $nodes = array();

	public function __construct( /* */ ) {
	}

	public function addNode($node) {
		$nodes->add($node);
	}	

	public function addNodeRec($node) {
		//FIX add node to this tree, recursively search for a place	
	}	

	public function getNode($n) {
		return $nodes[$n];
	}

	public function getNodeWithName($n) {
		return $nodes[$n];
	}	
}

?>
