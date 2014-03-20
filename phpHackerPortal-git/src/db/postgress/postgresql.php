<?php

/* PostGresSQL DB utility functions */

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



function connectToPostgressSQL($site, $login, $pass,$dbname)
{

	$connection = pg_connect("host=" . $site . "dbname=" . $dbname . "user=" . $login . "password=" . $pass");	
	return $connection;

}

//query wrapper
function getQuery($query, $dbconn = (isset($currentdbconn) ? $currentdbconn : $dbconn))
{
	return ($result = pg_query($dbconn, $query));
}
//fetch column of nth field
function getNthField($n, $table, $dbconn = (isset($currentdbconn) ? $currentdbconn : $dbconn))
{
	$rows = array();
	while ($row = pg_fetch_row(getQuery("SELECT * FROM " . $table . ";", $dbconn))) {
		array_push($rows, $row[$n]);
	}
	return $rows;
}	
//fetch column of named field
function getNamedField($fieldname, $table, $dbconn = (isset($currentdbconn) ? $currentdbconn : $dbconn))
{
	$rows = array();
	while ($row = pg_fetch_row(getQuery("SELECT * FROM " . $table . ";", $dbconn))) {
		array_push($rows, $row[$fieldname]);
	}
	return $rows;
}

function getFirstNamedField($fieldname, $table, $dbconn = (isset($currentdbconn) ? $currentdbconn : $dbconn))
{
	return getNamedField($fieldname, $table, $dbconn)[0];
}

function getSecondNamedField($fieldname, $table, $dbconn = (isset($currentdbconn) ? $currentdbconn : $dbconn))
{
	return getNamedField($fieldname, $table, $dbconn)[1];
}

function getThirdNamedField($fieldname, $table, $dbconn = (isset($currentdbconn) ? $currentdbconn : $dbconn))
{
	return getNamedField($fieldname, $table, $dbconn)[2];
}

function getFourthNamedField($fieldname, $table, $dbconn = (isset($currentdbconn) ? $currentdbconn : $dbconn))
{
	return getNamedField($fieldname, $table, $dbconn)[3];
}

function getFifthNamedField($fieldname, $table, $dbconn = (isset($currentdbconn) ? $currentdbconn : $dbconn))
{
	return getNamedField($fieldname, $table, $dbconn)[4];
}

function getSixthNamedField($fieldname, $table, $dbconn = (isset($currentdbconn) ? $currentdbconn : $dbconn))
{
	return getNamedField($fieldname, $table, $dbconn)[5];
}

function getSeventhNamedField($fieldname, $table, $dbconn = (isset($currentdbconn) ? $currentdbconn : $dbconn))
{
	return getNamedField($fieldname, $table, $dbconn)[6];
}
//and so on ...

?>
