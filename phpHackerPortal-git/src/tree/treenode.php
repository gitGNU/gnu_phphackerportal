<?php

/* Tree Node class */

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

class TreeNode {
	protected $data = array();
	protected $parent = NULL;
	protected $nodes = array();

	public function __construct($par, $name, $value) {

		if ($name != NULL && $value != NULL) {
			$data[$name] = $value;	
		}
	
		$parent = $par;
	}

	//adds a child
	public function addNode($node) {
		$nodes->add($node);
	}	

	//adds a child and inserts metadata of this node
	public function addNodeAndData($node, $rest) {
		$nodes->add($node);
		$data->add($rest);
	}	
	public function getNode($n) {
		return $nodes[$n];
	}

	public function addData($name, $value) {
		$data[$name] = $value;
	}	

	public function getData($n) {
		return $data[$n];
	}

	public function getDataWithName($n) {
		return $data[$n];
	}	
}

?>
