<?php

/* example of 8x8 picture animation */

/*
 Copyright (C) Johan Ceuppens 2013-2014

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
  href="8x8.picture.example.css">
<script>
function move(elem) {
 
  var left = 0
 
  function frame() {
     
    left++  // update parameters
     
    elem.style.left = left + \'px\' // show frame

    if (left == 600)  // check finish condition
      clearInterval(id)
  }
 
  var id = setInterval(frame, 10) // draw every 10ms
}
</script>
</head>
 
<body>
<div onclick="
		/* For more animation of the 8x8 picture change the pixels
		   in here by changing the this.children (which are 8x8_blockX
		   values.
                */
		var i = 0; while (i < 64) { 
		move(this.children[i++]) 
		}
		" class="8x8_path">
<div class="8x8_block0"></div>
<div class="8x8_block1"></div>
<div class="8x8_block2"></div>
<div class="8x8_block3"></div>
<div class="8x8_block4"></div>
<div class="8x8_block5"></div>
<div class="8x8_block6"></div>
<div class="8x8_block7"></div>
<div class="8x8_block8"></div>
<div class="8x8_block9"></div>
<div class="8x8_block10"></div>
<div class="8x8_block11"></div>
<div class="8x8_block12"></div>
<div class="8x8_block13"></div>
<div class="8x8_block14"></div>
<div class="8x8_block15"></div>
<div class="8x8_block16"></div>
<div class="8x8_block17"></div>
<div class="8x8_block18"></div>
<div class="8x8_block19"></div>
<div class="8x8_block20"></div>
<div class="8x8_block21"></div>
<div class="8x8_block22"></div>
<div class="8x8_block23"></div>
<div class="8x8_block24"></div>
<div class="8x8_block25"></div>
<div class="8x8_block26"></div>
<div class="8x8_block27"></div>
<div class="8x8_block28"></div>
<div class="8x8_block29"></div>
<div class="8x8_block30"></div>
<div class="8x8_block31"></div>
<div class="8x8_block32"></div>
<div class="8x8_block33"></div>
<div class="8x8_block34"></div>
<div class="8x8_block35"></div>
<div class="8x8_block36"></div>
<div class="8x8_block37"></div>
<div class="8x8_block38"></div>
<div class="8x8_block39"></div>
<div class="8x8_block40"></div>
<div class="8x8_block41"></div>
<div class="8x8_block42"></div>
<div class="8x8_block43"></div>
<div class="8x8_block44"></div>
<div class="8x8_block45"></div>
<div class="8x8_block46"></div>
<div class="8x8_block47"></div>
<div class="8x8_block48"></div>
<div class="8x8_block49"></div>
<div class="8x8_block50"></div>
<div class="8x8_block51"></div>
<div class="8x8_block52"></div>
<div class="8x8_block53"></div>
<div class="8x8_block54"></div>
<div class="8x8_block55"></div>
<div class="8x8_block56"></div>
<div class="8x8_block57"></div>
<div class="8x8_block58"></div>
<div class="8x8_block59"></div>
<div class="8x8_block60"></div>
<div class="8x8_block61"></div>
<div class="8x8_block62"></div>
<div class="8x8_block63"></div>

</div>
</body>
</html>';

