<?php

/* notebook page */

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
//include(fileDir("file.php")); 

function splitparagraph($n, $pstr) 
{
	$i = 0;
	$returnstr = "";
	while ($i+$n < strlen($pstr)) {
		$returnstr .= substr($pstr, $i, $i+$n);
		$returnstr .= "<br>";	
		$i += $n;
	}
	$returnstr .= substr($pstr, $i, strlen($pstr));
	$returnstr .= "<br>";	
	return $returnstr;
}

session_start();
if (isset($_POST['lastedit']) && $_POST['lastedit'] != "") {
	$_SESSION['lasteditcurrent'] .= "<p id=\"textpara\">";
	$_SESSION['lasteditcurrent'] .= splitparagraph(40, $_POST['lastedit']); 
	$_SESSION['lasteditcurrent'] .=	"</p>";
} else {
	$_SESSION['lasteditcurrent'] = ""; //read db
}
	
printHeader("Open Hacker Portal : Notebook", "<style>" . loadCSSFile("notebook.css") . "</style>");

printBodyInit();
echo '<h2>Open Hacker Portal : Notebook</h2>';

echo $_SESSION['lasteditcurrent'];

//include scripts in body
//include(includeDir("include.js.php"));
echo '<script>
	function printinnerTextarea() {
		return \'<form id="start2" name="lasteditform2" method="post" action="notebook.php"> 
			<textarea name="lastedit2" form="start2" rows="5" cols="20"></textarea>
			<input type="submit" value="write to page"> 
			</form>\';	
	}
	</script>';
 
echo '<form id="start" name="lasteditform" method="post" action="notebook.php"> 
	<textarea name="lastedit" form="start" rows="5" cols="20"></textarea>
	<br>
	<input type="submit" value="write to page"> 
	</form>';	

/***echo '<p id="textareapara" onclick="this.innerHTML=printinnerTextarea()">
		Click this text to Edit</p>';
***/
printBodyAndHTMLClose();

?>
