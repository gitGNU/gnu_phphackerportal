<?php

/* db data (field) structure inherited array functionality */

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
include(dbDir("dbdatabase.php");

class dbData extends dbDataBase
{
	public function __construct() {

		$_data = array(); 	

	}

	public function add($key, $value) {
		$_data[$key] = $value;	
	}	

	public function get($key) {
		//return $_data[$key];	
		return {$_data[$key]};	
	}

	public function getkey() {
		//return $_data[0];	
		return {$_data[0]};	
	}

	public function getvalue() {
		//return $_data[1];	
		return {$_data[1]};	
	}

	protected $_data;
}	
