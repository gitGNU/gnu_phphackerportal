<?php

/* drawing functionality */

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

echo '<html>
<head>
<link type="text/css" rel="stylesheet"
  href="draw.css">
<script>
function move(elem) {
 
  var left = 0
 
  function frame() {
     
    left++  // update parameters
     
    elem.style.left = left + \'px\' // show frame
 
    if (left == 300)  // check finish condition
      clearInterval(id)
  }
 
  var id = setInterval(frame, 10) // draw every 10ms
}
</script>
</head>
 
<body>
<div onclick="move(this.children[0])" class="example_path">
    <div class="example_block"></div>
</div>
</body>
</html>';

