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

interface dbFieldInterface
{
	public function addAtom($atom);
	//$n can be a string key or number	
	//inserts on value at pos $n the value of the 2-tuple $atom
	public function addAtomFieldN($n, $atom);
	//inserts the mth value of $atom at value on field pos $n
	public function addAtomNM($n, $m, $atom);
	public function addField($field);
	public function getFieldN($n);
}	
