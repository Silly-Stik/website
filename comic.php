<html>
<head>
<link href="style.php" rel="stylesheet">
<?php
if(($_SERVER["REQUEST_URI"]=="/comic.php")||($_SERVER["REQUEST_URI"]=="/comic")){
	echo "<meta http-equiv=\"refresh\" content=\"0; url=random\" />";
}else{
?>
</head>
<body>
<?php include ("topnav.php"); ?>
<title><?php
if (count($titles)>=(int)$_GET["c"]){
	echo "Stik Site | Comic #".$_GET["c"].": ".$titles[(int)$_GET["c"]-1];
} else {
	echo "Stik Site | Unknown Comic";
}
?></title>
<div class="comic">
<h2 class="comhead">
<?php
if (count($titles)>=(int)$_GET["c"]){
echo $titles[(int)$_GET["c"]-1];
}
?>
</h2>
<?php
if (count($titles)<(int)$_GET["c"]){
	echo "<p class=\"ctext\">The comic number in the above link does not exist. Please enter a lower number or go to the main page to see the most recent comic.</p>";
}else{
?>
<div class="ctr"><span class="btn"><a class="ctext" href="comic.php?c=1">|<</a></span> <span class="btn"><?php
if($_GET["c"] != 1){
	echo "<a class=\"ctext\" href=\"comic.php?c=".((int)$_GET["c"]-1)."\">Prev</a>";
}else{
	echo "<span class=\"ctext\">Previous</span>";
}?></span> <span class="btn"><a class="ctext" href="random.php">Random</a></span> <span class="btn"><?php
if((int)$_GET["c"] < count($titles)){
	echo "<a class=\"ctext\" href=\"comic.php?c=".((int)$_GET["c"]+1)."\">Next</a>";
}else{
	echo "<span class=\"ctext\">Next</span>";
}?></span> <span class="btn"><a class="ctext" href="comic.php?c=<?php echo count($titles); ?>">>|</a></span></div>
<img src=<?php echo "\"comics/" . $the_big_array[$_GET["c"]-1][2] . "\""; ?> width="100%" title=<?php echo "\"". $the_big_array[$_GET["c"]-1][1]."\"";?>>
<div class="ctr"><span class="btn"><a class="ctext" href="comic.php?c=1">|<</a></span> <span class="btn"><?php
if($_GET["c"] != 1){
	echo "<a class=\"ctext\" href=\"comic.php?c=".((int)$_GET["c"]-1)."\">Prev</a>";
}else{
	echo "<span class=\"ctext\">Previous</span>";
}?></span> <span class="btn"><a class="ctext" href="random.php">Random</a></span> <span class="btn"><?php
if((int)$_GET["c"] < count($titles)){
	echo "<a class=\"ctext\" href=\"comic.php?c=".((int)$_GET["c"]+1)."\">Next</a>";
}else{
	echo "<span class=\"ctext\">Next</span>";
}?></span> <span class="btn"><a class="ctext" href="comic.php?c=<?php echo count($titles); ?>">>|</a></span></div>
<p class="ctr ctext">Author/s: <?php echo $the_big_array[$_GET["c"]-1][3]; ?></p>
<p class="ctr ctext">Permanent link to the comic: <a href=<?php echo "http://sillystik.com/comic.php?c=".$_GET["c"]; ?>><?php echo "sillystik.com/comic?c=".$_GET["c"]; ?></a></p>
<p class="ctr ctext">Link to the image: <a href=<?php echo "\"comics/" . $the_big_array[$_GET["c"]-1][2] . "\""; ?>><?php echo $the_big_array[$_GET["c"]-1][2]; ?></a></p>
<?php
}
?>
</div>
<?php include("footer.php");
}?>
</body>
</html>