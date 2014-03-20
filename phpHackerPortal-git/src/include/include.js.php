<?php
/*
/* JavaScript Utilities */
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

echo '<script>
function JSEditPost(string postvarname, string frontofpage, string pastofpage)
{
	document.write(frontofpage);
	document.write("<input type=\"text\" name=\"");
	document.write(postvarname);
	document.write("\">");
	document.write("<input type=\"submit\" name=\"submit\">");
	document.write(pastofpage);	
}

function JSEditPost2()
{
	x = document.getElementById("edit")
//	document.write("test");

	x.style.color = "#ff0000";
}

function ChangePostAndEdit(string idstr)
{
	document.getElementById(idstr).innerHTML="<input type=\"text\" name=\"currentedit\">";	
}

</script>';

?>
