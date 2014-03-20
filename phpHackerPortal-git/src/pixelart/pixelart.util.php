<?php

/* draw pixel art page utilities */

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
//include("../include/root.php");
function printJSColorizePixel()
{
	echo '<script>';

	echo 'function colorize(elem) {
					
		elem.style.left = left + \'px\'
		if (left == 100)
			clearIntervak(id)

		var id = setInterval(frame, 10)
	}';
	echo '</script>';
}

//alert mouse coords, use onmousedown"show(event)"
function printJSgetXY()
{
	echo '<script>
function show(event){
	var x = event.clientX; 
	var y = event.clientY;
	alert("X coords: " + x + " Y coords: " + y);
	} </script>';
}

class Xpm {
	public function __construct( /* */ ) {
	}
}

?>
