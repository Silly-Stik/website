<html>
<head>
<title>Stik Site | Home</title>
<link href="style.php" rel="stylesheet">
</head>
<body>
<?php 
include ("topnav.php")
?>
<?php
$filecount = 0; 
$filecount = count($titles); 
?>
<h1>Welcome to the Silly Stik Site!</h1>
<h3>What is Silly Stik?</h3>
<p>Silly Stik is a comic that was first developed by brothers Nick and Sam back in 2014.<br/>
This is the series of comics as a website archive.</p>
<h3>Who is Silly Stik?</h3>
<p>Silly Stik is a Stick figure who is known for... getting into trouble, and just overall being silly.<br/>
He goes on crazy, yet not <i>too</i> crazy, adventures and regularly catches up with other characters in this series, such as, <b>Smart Stick</b> (yes, he knows how to spell "Stick" correctly), The <b>Army Dudes</b> &amp; the <b>Army Dude Leader</b>.</p>
<br/>
<!--<p>We will most likely continue writing comics on paper, and scanning them in for this site.</p>-->
<!-- Put front page stuff here -->
<h2>Most Recent Comic</h2>
<div class="comic">
<h2 class="comhead">
<?php
echo $titles[(int)$filecount - 1];
?>
</h2>
<div class="ctr"><span class="btn"><a class="ctext" href="comic.php?c=1">|<</a></span> <span class="btn"><?php echo "<a class=\"ctext\" href=\"comic.php?c=".($filecount-1)."\">Prev</a>"; ?></span> <span class="btn"><a class="ctext" href="random.php">Random</a></span> <span class="btn"><span class="ctext">Next</span></span> <span class="btn"><a class="ctext" href="comic.php?c=<?php echo $filecount; ?>">>|</a></span></div>
<img src=<?php echo "\"comics/" . $the_big_array[count($the_big_array)-1][2] . "\""; ?> width="100%" title=<?php echo "\"".$the_big_array[count($the_big_array)-1][1]."\"";?>>
<div class="ctr"><span class="btn"><a class="ctext" href="comic.php?c=1">|<</a></span> <span class="btn"><?php echo "<a class=\"ctext\" href=\"comic.php?c=".($filecount-1)."\">Prev</a>"; ?></span> <span class="btn"><a class="ctext" href="random.php">Random</a></span> <span class="btn"><span class="ctext">Next</span></span> <span class="btn"><a class="ctext" href="comic.php?c=<?php echo $filecount; ?>">>|</a></span></div>
<p class="ctr ctext">Author/s: <?php echo $the_big_array[count($the_big_array)-1][3]; ?></p>
<p class="ctr ctext">Permanent link to the comic: <a href=<?php echo "http://sillystik.com/comic.php?c=".$filecount; ?>><?php echo "sillystik.com/comic?c=".$filecount; ?></a></p>
<p class="ctr ctext">Link to the image: <a href=<?php echo "\"comics/" . $the_big_array[count($the_big_array)-1][2] . "\""; ?>><?php echo $the_big_array[count($the_big_array)-1][2]; ?></a></p>
</div>
<?php include("footer.php") ?>
</body>
</html>