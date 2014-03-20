<?php

/* group page piece */

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
//include('../include/root.php');
function printGroupsDefaultStyle()
{
	return 'tr 
	{
		background:orange;
	}';

}

function printGroupsStyle($bgcolor)
{
	return "tr 
	{
		background:" . $bgcolor
	. "}";

}


function printGroupArray($a)
{
	echo '<table border="0">';
	$i = 0;
	foreach ($a as $key=>$value) { 
		echo '<tr>';
		echo '<td>';
			echo $key;
		echo '</td>';
		echo '<td>';
			echo $value;
		echo '</td>';
		echo '</tr>';
	
		$i++;
	}
	echo '</table>';
}

function printGroup($htmlstr)
{
	echo $htmlstr;
}

//////////////////////////////////////////////////////////
// mysql & postgresql
//FIXME Postgressql function also
/***
function printGroupNamesMySQL($connection)
{
$rows = mysqli_query($connection, "SELECT * FROM Groups");

echo '
	<ul>
	';
	while ($row = mysqli_fetch_array($result)) {
		echo '<li>' . $row['Name'] . '</li>';
	}
echo '	
	</ul>
	';	
}
***/
?>
