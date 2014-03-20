<?php

/* include directives */

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

$DOCROOT = $_SERVER['DOCUMENT_ROOT'];
$SRCROOT = $DOCROOT . "/php.portal/src/";
session_start();

$_SESSION['SRCROOT'] = $SRCROOT;

function cDir($path) { return $_SESSION['SRCROOT'] . "c/" . "$path"; }
function dbDir($path) { return $_SESSION['SRCROOT'] . "db/" . "$path"; }
function fileDir($path) { return $_SESSION['SRCROOT'] . "file/" . "$path"; }
function groupsDir($path) { return $_SESSION['SRCROOT'] . "groups/" . "$path"; }
function imageDir($path) { return $_SESSION['SRCROOT'] . "image/" . "$path"; }
function includeDir($path) { return $_SESSION['SRCROOT'] . "include/" . "$path"; }
function miscDir($path) { return $_SESSION['SRCROOT'] . "misc/" . "$path"; }
function pixelartDir($path) { return $_SESSION['SRCROOT'] . "pixelart/" . "$path"; }
function schemeDir($path) { return $_SESSION['SRCROOT'] . "scheme/" . "$path"; }
function treeDir($path) { return $_SESSION['SRCROOT'] . "tree/" . "$path"; }
function utilDir($path) { return $_SESSION['SRCROOT'] . "util/" . "$path"; }

?>
