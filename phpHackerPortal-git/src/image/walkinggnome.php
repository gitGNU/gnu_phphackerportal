<?php

/* walking gnome functionality */

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
  href="walkinggnome.css">
<script>
function move(elem) {
 
  var left = 0
 
  function frame() {
     
    left++  // update parameters
    top++ 
    elem.style.left = left + \'px\' // show frame
    elem.style.top = top + \'px\' // show frame

    if (left == 600 || top == 400)  // check finish condition
      clearInterval(id)
  }
 
  var id = setInterval(frame, 10) // draw every 10ms
}
</script>
</head>
 
<body>
<div onclick="var i = 0; 
		while (i < 64) { 
		move(this.children[i++]) 
		}
		" class="gnome_path">
<div class="gnome_block0"></div>
<div class="gnome_block1"></div>
<div class="gnome_block2"></div>
<div class="gnome_block3"></div>
<div class="gnome_block4"></div>
<div class="gnome_block5"></div>
<div class="gnome_block6"></div>
<div class="gnome_block7"></div>
<div class="gnome_block8"></div>
<div class="gnome_block9"></div>
<div class="gnome_block10"></div>
<div class="gnome_block11"></div>
<div class="gnome_block12"></div>
<div class="gnome_block13"></div>
<div class="gnome_block14"></div>
<div class="gnome_block15"></div>
<div class="gnome_block16"></div>
<div class="gnome_block17"></div>
<div class="gnome_block18"></div>
<div class="gnome_block19"></div>
<div class="gnome_block20"></div>
<div class="gnome_block21"></div>
<div class="gnome_block22"></div>
<div class="gnome_block23"></div>
<div class="gnome_block24"></div>
<div class="gnome_block25"></div>
<div class="gnome_block26"></div>
<div class="gnome_block27"></div>
<div class="gnome_block28"></div>
<div class="gnome_block29"></div>
<div class="gnome_block30"></div>
<div class="gnome_block31"></div>
<div class="gnome_block32"></div>
<div class="gnome_block33"></div>
<div class="gnome_block34"></div>
<div class="gnome_block35"></div>
<div class="gnome_block36"></div>
<div class="gnome_block37"></div>
<div class="gnome_block38"></div>
<div class="gnome_block39"></div>
<div class="gnome_block40"></div>
<div class="gnome_block41"></div>
<div class="gnome_block42"></div>
<div class="gnome_block43"></div>
<div class="gnome_block44"></div>
<div class="gnome_block45"></div>
<div class="gnome_block46"></div>
<div class="gnome_block47"></div>
<div class="gnome_block48"></div>
<div class="gnome_block49"></div>
<div class="gnome_block50"></div>
<div class="gnome_block51"></div>
<div class="gnome_block52"></div>
<div class="gnome_block53"></div>
<div class="gnome_block54"></div>
<div class="gnome_block55"></div>
<div class="gnome_block56"></div>
<div class="gnome_block57"></div>
<div class="gnome_block58"></div>
<div class="gnome_block59"></div>
<div class="gnome_block60"></div>
<div class="gnome_block61"></div>
<div class="gnome_block62"></div>
<div class="gnome_block63"></div>

</div>
<br><b>Game Window</b><br>
</body>
</html>';

