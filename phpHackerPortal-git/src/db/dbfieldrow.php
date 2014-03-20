<?php

/* db functionality */

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
include(dbDir("dbfieldrowinterface.php");
include(dbDir("dbdata.php");
include(dbDir("dbbase.php");
include(dbDir("dbfield.php");

class dbFieldRow
{
	public function __construct() {

		$_dbfieldrow = array();	

	}

	public function addFieldRow($fieldrow) {
		//check that fields compare in the fieldrow
		//overruns different size fieldrows
		$i = 0;
		$j = 0;
		while ($i < count($_dbfieldrow) {
			while ($j < count($_dbfieldrow) {
			//the first parameter is the ith field's dbdata key value
			//the second parameter is the fieldrow's dbdata key value
			if (strncmp($_dbfieldrow($i)->getFieldN($j)->get(0),
				$fieldrow->getFieldN($j)->get(0),
				strlen($fieldrow->getFieldN($j)->get(0)))) {
				return NULL;//FIXME implement db error codes		
			} 	
			$j++;
			}
			if (j == count($fieldrow)) {
				//push the fieldrow onto the db array	
				array_push($fieldrow, $_dbfieldrow);
				return 0;	
			}
			$j = 0;
			$i++;
		}
		return -1;
	}

	private $_dbfieldrow;
		
}	
