<?php
  function leftmargin($li) {
    if ($li == 'yes') { 
      $out = 'margin:0px 2em 2em 16em;';
    } else {
      $out = 'margin:0px 2em 2em 2em;';
    }
  return $out;
  }
?>

/* this is based on the 3 column layout from bluerobot.com */

.bordered { border: 0.1em solid #030; }

.category { font-size:1.7em; text-align:center; }

img { border: 0px; }

ul { margin-bottom: 0.7em; margin-top: 0.1em; }

li.main { margin-bottom: 0.7em; margin-top: 0.3em; }

br { margin-bottom: 0.7em; }

q {   
 color:#000; 
 font: bold 0.9em verdana, arial, helvetica, sans-serif;
 }

blockquote { 
 background: #EFE;
 border: 0.1em solid #030;
 color:#000;
 font: 500 0.9em verdana, arial, helvetica, sans-serif;
 padding: 0.5em;
 }

cite { 
 font: bold 0.9em/1.5em verdana, arial, helvetica, sans-serif;
 padding: 0.5em;
 }

li {
<?php
if (ereg('Mac', $HTTP_USER_AGENT)) {
	if (ereg('Opera', $HTTP_USER_AGENT)) {
		echo "margin-left: -3em;"; } 
	elseif (ereg('Safari', $HTTP_USER_AGENT)) { 
		echo "margin-left: -2.5em;"; }
	elseif (ereg('MSIE', $HTTP_USER_AGENT)) { 
		echo "margin-left: -1em;"; }
	elseif (ereg('Gecko', $HTTP_USER_AGENT)) { 
		echo "margin-left: -2em;"; }
	else { echo "margin-left: -2.7em;"; }
} elseif (ereg('MSIE', $HTTP_USER_AGENT)) { 
	echo "margin-left: -1.5em;"; }
  elseif (ereg('Opera', $HTTP_USER_AGENT)) {
                echo "margin-left: -2em;"; }
else { echo "margin-left: -2.5em;"; } 
?>
}

body {
 color:#111;
 background-color: #66b;
 margin:2em;
 padding:0em;
 font:0.8em verdana, arial, helvetica, sans-serif;
 }

h1 {
 display:none;
 margin:0em 0em 0em 0em;
 padding:0em;
 font: 900 italic 3em verdana, arial, helvetica, sans-serif;
 color:#336;
 text-align: center;
 }

h2 {
 margin:0em 0em 0.3em 0em;
 padding:0em;
 font: 900 1.3em verdana, arial, helvetica, sans-serif;
 color:#336;
 text-align: center;
 }

h3 {
 color:black;
 font: 1.2em verdana, arial, helvetica, sans-serif;
 margin:0em 0em .5em 0em;
 padding:0em;
 text-align:center;
	}
p {
 font:1em verdana, arial, helvetica, sans-serif;
 margin:0em 0em 1.6em 0em;
 padding:0em;
 }
p.recurring { font:0.8em verdana, arial, helvetica, sans-serif; }

table, th {
	text-align:center;
	}

td { text-align:left; }

.left {
	text-align:left;
}

.right {
	text-align:left;
}
	
.Content>p {margin:0em;}
.Content>p+p {text-indent:3em;}

pre {
 font: 1em monospace;
 }

a {
	color:#900;
	font: bold 1em verdana, arial, helvetica, sans-serif;
<?php
if (ereg('Mac', $HTTP_USER_AGENT)) {
        if (ereg('Opera', $HTTP_USER_AGENT)) {
                echo "font-weight:600;"; }
        elseif (ereg('MSIE', $HTTP_USER_AGENT)) {
                echo "font-weight:400;"; }
        else { echo "font-weight:600;"; }
} else {
echo "font-weight:600;";
} ?>
        text-decoration:none;
        }
a:link {color:#600; font-weight:bold;}
a:active {background:#66b; font-weight:bold;}
a:visited {color:#600; font-weight:bold;}
a:hover {color:#900; text-decoration:underline; font-weight:bold;}

/* All the content boxes belong to the content class. */
#notation {
	position:relative; /* Position is declared "relative" to */
		    /* gain control of stacking order (z-index). */
	width:auto;
	min-width:18em;
	margin:0px 1em 1em 1em;
	border:0.1em solid black;
	background-color:#fff;
	padding:1em;
	text-align:center;
	z-index:3; /* This allows the content to overlap the right */
			/* menu in narrow windows in good browsers. */
	}

/* All the content boxes belong to the content class. */
.content {
	position:relative; /* Position is declared "relative" to */
		    /* gain control of stacking order (z-index). */
	width:auto;
	min-width:16em;
	<?php echo(leftmargin($li)); ?>
	border:0.1em solid black;
	background-color:white;
	padding:1em;
	z-index:3; /* This allows the content to overlap the right */
			/* menu in narrow windows in good browsers. */
	}

.logo {
	position:relative; /* Position is declared "relative" to */
			/* gain control of stacking order (z-index). */
	width:auto;
	min-width:12em;
	<?php echo(leftmargin($li)); ?>
	border:0.1em solid black;
	background-color:white;
	padding:.5em;
	text-align:center;
	z-index:3; /* This allows the content to overlap the */
		/* right menu in narrow windows in good browsers. */
	}

#navAlpha {
        position:absolute;
<?php
if (ereg('Windows', $HTTP_USER_AGENT)) {
        if (ereg('Opera', $HTTP_USER_AGENT)) {
                echo "width:11.8em;"; }
        elseif (ereg('MSIE 6', $HTTP_USER_AGENT)) {
                echo "width:11.8em;"; }
        elseif (ereg('MSIE', $HTTP_USER_AGENT)) {
                echo "width:14em;"; }
        elseif (ereg('Mozilla', $HTTP_USER_AGENT)) {
                echo "width:11.8em;"; }
        else { echo "width:11.8em;"; }
} else {
echo "width:11.8em;";
} ?>
        top:2em;
        left:2em;
        border:0.5em double #333;
        background-color:#aad;
        padding:1em;
        z-index:2;
}

#navBeta {
        position:absolute;
<?php
if (ereg('Windows', $HTTP_USER_AGENT)) {
        if (ereg('Opera', $HTTP_USER_AGENT)) {
                echo "width:15.8em;"; }
        elseif (ereg('MSIE 6', $HTTP_USER_AGENT)) {
                echo "width:15.8em;"; }
        elseif (ereg('MSIE', $HTTP_USER_AGENT)) {
                echo "width:18em;"; }
        elseif (ereg('Mozilla', $HTTP_USER_AGENT)) {
                echo "width:15.8em;"; }
        else { echo "width:15.8em;"; }
} else {
echo "width:15.8em;";
} ?>
        top:2em;
        right:2em;
        border:0.5em double #333;
        background-color:#aad;
        padding:1em;
        z-index:1;
}
