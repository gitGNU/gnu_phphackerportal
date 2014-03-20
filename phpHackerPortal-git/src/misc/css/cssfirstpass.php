<?php

/* css page concur piece */

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

//FIX use JS widgets for changing the look and feel

printHeader("CSS Test", "<style>" . $_POST["csswritetext"] . "</style>");
printBodyInit();

session_start();
$_SESSION["cssstyleinput"] = $_POST["csswritetext"];

echo 'Here is your edit : <br>';
echo $_POST["csswritetext"];

echo '<br>';

echo 'Exit new without Look&Feel : 
	<form name="gotoportal" id="gotoportal" <!--FIXME-->action="index.php">
	<input type="submit" id="submit" value="go">
	</form>';

//NOTE current.css 
writeCSSFile($_POST["filename"], $_POST["csswritetext"]);

printBodyHTMLClose();

?>
