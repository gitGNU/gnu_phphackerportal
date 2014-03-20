<?php

/* draw pixel art page */

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
printHeader("PixelArt Studio", 
	
	//CSS link
	"<style>" .
			loadCSSFile("pixelart.start.css") . 
			loadCSSFile("pixelart.start.2.css") . 
	"</style>");
printBodyInit();
$tmppixelcolor = $_POST["pixelcolor"];

echo '<div id="pixelwindow">
	<div onmousedown="this.style.background="';
	if (isset($_POST["pixelcolor"])) {
		echo "$tmppixelcolor";
	} else {
		echo "red";
	}
echo '"></div>';
echo '</div>';

echo '<form id="changecolor" method="post" action="pixelart.php">';
echo '<input type="text" name="pixelcolor" value="';
	if (isset($_POST["pixelcolor"])) {
		echo "$tmppixelcolor";
	} else {
		echo "red";
	}
echo '">';

echo '<input type="submit" name="submit" value="change pixel color">';
echo '</form>';

printBodyHTMLClose();

?>
