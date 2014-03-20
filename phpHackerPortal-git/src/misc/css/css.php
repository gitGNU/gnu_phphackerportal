<?php

/* css page piece */

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
include("../../include/root.php");
include(utilDir("util.php"));
include(miscDir("css/cssutil.php"));
include(miscDir("css/cssjs.php"));
//FIX use JS widgets for changing the look and feel

printHeader();
printBodyInit();
$tmp = loadCSSFile($_POST["filename"]);

echo '<textarea name="csswritetext" form="start" rows="40" cols="50">';
echo $tmp;
echo '</textarea>';

echo '<form id="start" method="post" action="cssfirstpass.php">';
echo '<input type="name" name="filename" value="current.css">';
echo '<input type="submit" name="csswritetextsubmit" value="commit and save">';
echo '</form>';

echo '<form id="start2" method="post" action="css.php">';
echo '<input type="name" name="filename" value="current.css">';
echo '<input type="submit" name="csswritetextsubmit" value="load file">';
echo '</form>';

/***echo '<button type="button" onclick="">Load</button>'***/ 

printBodyHTMLClose();

?>
