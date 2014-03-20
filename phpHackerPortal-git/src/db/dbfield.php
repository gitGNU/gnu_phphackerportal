<?php

/* db field functionality */

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
include('../include/root.php');
include(dbDir("dbfieldinterface.php");
include(dbDir("dbdata.php");

class dbField implements dbFieldInterface 
{
	public function __construct() {

		$_dbfield = array();	

	}

	public function addAtom($atom) {
		array_push($_dbfield[$atom->get(0)], $_dbfield[0]);
	}	

	//inserts on value at pos $n the value of the 2-tuple $atom
	public function addAtomFieldN($n, $atom) {
		array_push($_dbfield[$atom->get(0)], $_dbfield[$n]);
	}	
	//inserts the mth value of $atom at value on field pos $n
	public function addAtomNM($n, $m,  $atom) {
		array_push($_dbfield[$atom->get($m)], $_dbfield[$n]);
	}	

	public function addField($field) {

		array_push($field, $_dbfield);

	}

	public function getFieldN($n) {
		return $_dbfield[$n];
	}

	private $_dbfield;
		
}	
