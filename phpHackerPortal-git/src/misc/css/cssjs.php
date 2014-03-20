<?php

/* css js widgets etc piece */

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

/***
	Utility Functions
***/

function docgetId()
{
	echo '<script>';
	echo 'function docgetId (var id) {';
	echo 'return	document.element.getElementById(id)';
	echo '}';
	echo '</script>';
}

function elgetId()
{
	echo '<script>';
	echo 'function elgetId(var id) {';
	echo 'return	document.element.getElementById(id)';
	echo '}';
	echo '</script>';
}

function reloadPage()
{
	echo '<script>';
	echo 'function reloadPage() {';
	echo 'document.reload() ';
	echo '}';
	echo '</script>';
}
/***
	JS Functionality
***/

function printEditWidget()
{
	echo '<script>';

	

	echo '</script>';
}


//NOTE needs to load above JS functions echoed in php
function printJSReloadId($id)
{
	echo '<script>';

	echo "elgetId($id).reload()";
	
	echo '</script>';
}


?>
