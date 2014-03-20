<?
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

function add_bookmark($bmstr)
{
	file_put_contents("/var/www/tmp/bookmarks.txt", "<a href=\"" 
							. 
							$bmstr
							.
							"\">"
							.
							$bmstr
							.
							"</a><br>");

}

?>

<?
echo "<html><title>bookmarks</title><body>";

echo '<form id="id" name="form" method="post" action="bookmarks.php">
	<input type="text" name="wrt">
	<input type="submit" value="write to page">
	</form>';

session_start();
if (isset($_POST['wrt']) && $_POST['wrt'] != "") {
	$_SESSION['lastwrt'] .= $_POST['wrt'];
	add_bookmark($_SESSION['lastwrt']);	
} else {
	$_SESSION['lastwrt'] = "";
}

echo '<a href="' . $_SESSION['lastwrt'] . "\">" . $_SESSION['lastwrt'] . '</a>';

readfile("/var/www/tmp/bookmarks.txt");

echo "</body></html>";
?>	
	
