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

function printExternalCSSHeader($filename)
{

	echo '<link rel="stylesheet" type="text/css" href="';
	echo $filename;
	echo '">';

}

function printInternalCSSHeader()
{

	echo '<style>';

}

function printInternalCSSClose()
{

	echo '</style>';

}

//for printing between <style> tags
function printInternalCSS($contents)
{
	echo $contents;
}
function loadCSSFile($filename)
{
	$fp = fopen($filename, "r");

	$contents = fread($fp, filesize($filename));
	
	fclose($fp);

	return $contents;	
}

function writeCSSFile($filename, $contents)
{
	//do not overwrite *.php files
	if (preg_match("/.*\.php", $filename, $matches)) {
		return -1;
	}

	$fp = fopen($filename, "w+");

	fwrite($fp, $contents);
	
	fclose($fp);

	return $contents;	
}
?>
