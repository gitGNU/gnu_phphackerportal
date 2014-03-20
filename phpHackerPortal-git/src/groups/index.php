<?php

/* test groups.php page */

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
include(groupsDir("groups.php")); 

$a = array('foo' => 'bar', 'bar' => 'baz');

printHeader("Hacker Portal Groups testpage", "<style>" . printGroupsStyle("blue") . "</style>");
printBodyInit();

echo '<h2>Hacker Portal : Groups testpage</h2>';

printGroupArray($a);


printBodyAndHTMLClose();

?>
