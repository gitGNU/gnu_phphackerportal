<?php
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
	function dump_db($dbconn) {
		echo "Dumping " . $dbconn . " Database";
		$result = pg_query($dbconn, "SELECT * FROM films");	
		while ($row = pg_fetch_row($result)) {
			echo "Title: $row[1]";
			echo "<br>";
		}
	}

	function display_add_film($dbconn, $tabledisplaywidth = "40%") {
		echo '<b>Add a Movie to the Database :</b><br>';	
		echo '<form id="addfilm" action="addfilm.php">
			<table style="width:" . $tabledisplaywidth>
			<tr>
			<td>Title :</td>
			<td><input type="text" "name="addedfilmtitle" value=""></td>
			</tr>
			<tr>
			<td>Kind :</td>
			<td><input type="text" "name="addedfilmkind" value=""></td>
			</tr>
			<tr>
			<td>Length :</td>
			<td><input type="text" "name="addedfilmlength" value=""><td>
			</tr>
			<tr>
			<td>Front Picture URL :</td>
			<td><input type="text" "name="addedfilmpicture" value=""></td>
			</tr>
			<tr>
			<td>File URL :</td>
			<td><input type="text" "name="addedfilmfile" value=""></td>
			</tr>
			<tr>
			<td><input type="submit" name="submitfilm" value="add film"></td>
			</tr>
			</table>
			</form>';
	

	}

	function display_error_console() {
		echo '<b>Error Console :</b><br>';
		if (!$dbconn) {
			echo "Could not connect to films Database!";
			return -1;
		}	
	}	
?>
<?php
	echo '<html><head><title>Movies DataBase</title></head>';
	echo '<body>';

	$dbconn = pg_connect("host=localhost port=5432 dbname=movies1 user=postgres password=postgres");
	
	display_add_film();
	if (display_error_console() < 0) {
		echo '</body></html>';
		exit;
	}

	dump_db($dbconn);

	echo '</body></html>';
?>
