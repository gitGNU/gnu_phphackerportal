<?php

/* draw pixel art of XPM file page */
/* NOTE that xpm files only have 256 colors */

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
include(utilDir("util.php"));
include(miscDir("css/cssutil.php"));
include(miscDir("css/cssjs.php"));
include('pixelart.util.php');

function xpmMakeHexColorArray()
{

	$array = array();

	/* construct php array of hex colors (== pixels) */
	$i = 0;
	while ($i < $_SESSION['arraylength']) {
		$array_push($array, $_SESSION['array' . $i]);
		$i++;	
	}	
	return $array;
} 

function genAscii()
{
	$_SESSION['asciisymbol'] ++;

	if ($_SESSION['asciisymbol'] >= 256) {
		$_SESSION['asciierr'] = true;
	}
}

function error_console()
{
	if (isset($_SESSION['asciierr'])) {
		echo '<b>Error Console: </b>';
		echo 'More than 256 colors, losing rest of pixels.<br>';
	}
}
	
function xpmWriteToScreen($array)
{
	
	$differentcolors = array(); /* ascii => hex */
	$differentcolors2 = array(); /* hex => ascii */
	$i = 0;
	while ($i < length($array)) {
		/* add color for xpm header */
		if (!isset($differentcolors[$array[$i]])) {
			genAscii();
			array_push($differentcolors[$_SESSION['asciisymbol'] => $array[$i]);
			array_push($differentcolors2[$array[$i] => $_SESSION['asciisymbol']);
		}
	}
	$i = 0;
	foreach ($differentcolors as $key => $val)	
		echo '"';
		echo $key;
		echo ' c ';
		echo $val;
		echo ' "';
		echo '<br>';
	} 
	$i = 0, $j = 0;
	while ($i < $_SESSION['xpmheight']) {
		while ($j < $_SESSION['xpmwidth']) {
			echo $differentcolors2[$array[$i * $_SESSION['xpmwidth'] + $j]];
		}
		echo '<br>';
	}
	echo '<br>';	
}
	
printHeader("PixelArt Xpm view");
printBodyInit();
	session_start();
	$_SESSION['asciisymbol'] = undef;
	xpmWriteToScreen(xpmMakeHexColorArray());	
	error_console();
printBodyHTMLClose();

?>
