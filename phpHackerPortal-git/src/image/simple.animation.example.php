<?php

echo '<html>
<head>
<style> 
div
{
width:100px;
height:100px;
background:red;
position:relative;
animation:mymove 5s infinite;
-webkit-animation:mymove 5s infinite; /*Safari and Chrome*/
}

@keyframes mymove
{
from {left:0px;}
to {left:200px;}
}

@-webkit-keyframes mymove /*Safari and Chrome*/
{
from {left:0px;}
to {left:200px;}
}
</style>
</head>
<body>

<p><strong>Note:</strong> The animation property is not supported in Internet Explorer 9 and earlier versions.</p>

<div></div>

</body>
</html>';


